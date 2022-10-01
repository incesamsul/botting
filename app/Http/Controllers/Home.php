<?php

namespace App\Http\Controllers;

use App\Models\Percetakan;

class Home extends Controller
{

    public function beranda()
    {
        return view('pages.halaman_depan.beranda');
    }

    public function katalog($idPercetakan)
    {
        dd($idPercetakan);
    }
}
