<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Payment\TripayController;
use App\Models\Cart;
use App\Models\PrintList;
use App\Models\ProdukModel;
use App\Models\Transaksi;
use App\Models\Undangan;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function store(Request $request)
    {
        $tripay = new TripayController();

        $transaksi = $tripay->requestTransaksi($request->method, 'paket undangan reguler', $request->total_pembayaran);

        $undangan = Undangan::where('id_user', auth()->user()->id)->first();

        Transaksi::create([
            'id_user' => auth()->user()->id,
            'id_undangan' => $undangan->first()->id_undangan,
            'reference' => $transaksi->reference,
            'merchant_reference' => $transaksi->merchant_ref,
            'total_amount' => $transaksi->amount,
            'status' => $transaksi->status,
        ]);

        return redirect('/pelanggan/detail_transaksi/' . $transaksi->reference);
    }

    public function detailTransaksi($reference)
    {

        $tripay = new TripayController();
        $data['detail_transaksi'] = $tripay->detailTransaksi($reference);
        return view('pages.registrasi.detail', $data);
    }
}
