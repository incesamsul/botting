<?php

namespace App\Http\Controllers;

use App\Models\Percetakan;
use App\Models\Tema;

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
        return view('pages.halaman_depan.preview.' . $nama_tema);
    }

    public function getPages($page){
        return view('turnjs.pages.'.$page);
    }

}
