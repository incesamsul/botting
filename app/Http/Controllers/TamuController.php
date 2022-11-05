<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use App\Models\Tema;
use App\Models\TemaUser as TemaUserModel;
use Illuminate\Http\Request;

class TamuController extends Controller
{

    public function store(Request $request)
    {
        Tamu::create([
            'id_user' => auth()->user()->id,
            'kode_undangan' => $request->kode_undangan,
            'nama_tamu' => $request->nama_tamu,
            'no_hp' => $request->no_hp,
            'status_kehadiran' => '0',
        ]);
        return redirect()->back()->with('message', 'tamu berhasil tambah');
    }

    public function update(Request $request)
    {
        Tamu::where('id_tamu', $request->id)->update([
            'kode_undangan' => $request->kode_undangan,
            'nama_tamu' => $request->nama_tamu,
            'no_hp' => $request->no_hp,
        ]);

        return redirect()->back()->with('message', 'tamu berhasil update');
    }

    public function delete(Request $request)
    {
        Tamu::where('id_tamu', $request->id)->delete();
        return 1;
    }
}
