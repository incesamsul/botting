<?php

namespace App\Http\Controllers;

use App\Models\Percetakan;
use App\Models\Tema;
use Illuminate\Http\Request;

class Home extends Controller
{

    public function beranda()
    {
        $data['tema'] = Tema::all();
        return view('pages.halaman_depan.beranda', $data);
    }

    public function oldHome()
    {
        $data['tema'] = Tema::all();
        return view('pages.halaman_depan.beranda_old', $data);
    }

    public function preview($nama_tema)
    {
        $data['nama_tema'] = $nama_tema;
        // return view('pages.halaman_depan.preview.' . $nama_tema);
        return view('pages.halaman_depan.preview.index', $data);
    }

    public function getPages($page, $nama_tema)
    {
        $data['nama_tema'] = $nama_tema;
        return view('turnjs.pages.' . $page, $data);
    }

    public function getUndanganPages(Request $request, $page)
    {
        $data['nama_tema'] = $request->nama_tema;
        $idUser = $request->id_user;
        $data['informasi'] = getInformasiUndangan($idUser);
        return view('undangan.pages.' . $page, $data);
    }
}
