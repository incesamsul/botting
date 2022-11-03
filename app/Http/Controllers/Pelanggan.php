<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use App\Models\Tema;
use App\Models\Undangan;
use Illuminate\Http\Request;


class Pelanggan extends Controller
{

    public function tema()
    {
        $data['tema'] = Tema::all();
        return view('pages.tema.pelanggan', $data);
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

    public function undangan($domain)
    {
        $undangan = Undangan::where('domain', $domain);
        $namaTema = spaceToUnderscore($undangan->first()->user->temaUser->tema->nama_tema);
        $data['nama_tema'] = $namaTema;
        $data['informasi'] = Informasi::where('id_user', $undangan->first()->user->id)->first();
        return view('pages.halaman_depan.undangan.index', $data);
    }

    public function simpanDomain(Request $request)
    {
        $undangan = Undangan::where('id_user', auth()->user()->id);
        if (!$undangan->first()) {
            Undangan::create([
                'domain' => $request->domain,
                'id_user' => auth()->user()->id,
            ]);
        } else {
            $undangan->update([
                'domain' => $request->domain,
            ]);
        }

        return redirect()->back()->with('message', 'berhasil membuat domain');
    }
}
