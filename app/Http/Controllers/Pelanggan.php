<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Payment\TripayController;
use App\Models\Informasi;
use App\Models\Tamu;
use App\Models\Tema;
use App\Models\Transaksi;
use App\Models\Undangan;
use Illuminate\Http\Request;


class Pelanggan extends Controller
{

    public function tema()
    {
        $data['tema'] = Tema::all();
        return view('pages.tema.pelanggan', $data);
    }

    public function tamuUndangan()
    {
        $data['tamu'] = Tamu::where('status_kehadiran', '1')->get();
        return view('pages.halaman_depan.tamu_undangan', $data);
    }

    public function terimaTamu($kodeUndangan)
    {
        $tamu = Tamu::where('kode_undangan', $kodeUndangan);
        $tamu->update([
            'status_kehadiran' => '1'
        ]);

        return redirect()->back()->with('message', 'selamat datang ' . $tamu->first()->nama_tamu);
    }

    public function registrasi()
    {
        $tripay = new TripayController();
        $undangan = Undangan::where('id_user', auth()->user()->id)->first();
        $data['channels'] = $tripay->getPaymentChannels();
        $data['id_undangan'] = $undangan->first()->id_undangan;
        $data['transaksi'] = Transaksi::where('id_user', auth()->user()->id)->get();
        return view('pages.registrasi.index', $data);
    }


    public function info($jenisInfo = 'mempelai_pria')
    {
        $data['info'] = Informasi::where('id_user', auth()->user()->id)->first();
        $data['jenisInfo'] = $jenisInfo;
        return view('pages.info.index', $data);
    }

    public function publish()
    {
        $undangan = Undangan::where('id_user', auth()->user()->id);
        $data['domain'] = $undangan->first();
        return view('pages.publish.index', $data);
    }

    public function daftarTamu()
    {
        $data['tamu'] = Tamu::where('id_user', auth()->user()->id)->get();
        $undangan = Undangan::where('id_user', auth()->user()->id);
        $data['domain'] = $undangan->first();
        return view('pages.tamu.list', $data);
    }

    public function undangan($domain, $kodeUndangan = '')
    {
        $tamu = Tamu::where('kode_undangan', $kodeUndangan)->first();
        $data['tamu'] = $tamu;
        $undangan = Undangan::where('domain', $domain);
        $namaTema = spaceToUnderscore($undangan->first()->user->temaUser->tema->nama_tema);
        $data['nama_tema'] = $namaTema;
        $data['informasi'] = Informasi::where('id_user', $undangan->first()->user->id)->first();
        $data['id_user'] = $undangan->first()->user->id;
        return view('pages.halaman_depan.undangan.index', $data);
    }

    public function simpanDomain(Request $request)
    {

        $undangan = Undangan::where('id_user', auth()->user()->id);
        if (!$undangan->first()) {
            $cekDomain = Undangan::where('domain', $request->domain);
            if ($cekDomain->first()) {
                return redirect()->back()->with('message', 'domain tidak tersediah, pilih yang lain');
            }
            Undangan::create([
                'domain' => $request->domain,
                'id_user' => auth()->user()->id,
            ]);
            return redirect()->back()->with('message', 'berhasil membuat domain');
        } else {

            if ($undangan->first()->domain == $request->domain) {
                $undangan->update([
                    'domain' => $request->domain,
                ]);
                return redirect()->back()->with('message', 'berhasil mengupdate domain');
            } else {
                $cekDomain = Undangan::where('domain', $request->domain);
                if ($cekDomain->first()) {
                    return redirect()->back()->with('message', 'domain tidak tersediah, pilih yang lain');
                }
                $undangan->update([
                    'domain' => $request->domain,
                ]);
                return redirect()->back()->with('message', 'berhasil mengupdate domain');
            }
        }
    }
}
