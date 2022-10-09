<?php

namespace App\Http\Controllers;
use App\Models\Tema;
use App\Models\TemaUser as TemaUserModel;
use Illuminate\Http\Request;

class TemaUser extends Controller
{

    public function store($idTema){
        $temaUser = TemaUserModel::where('id_user',auth()->user()->id);
        if(!$temaUser->first()){
            TemaUserModel::create([
                'id_user' => auth()->user()->id,
                'id_tema' => $idTema,
            ]);
        } else {
            $temaUser->update([
                'id_tema' => $idTema,
            ]);
        }
        return redirect()->back()->with('message','tema berhasil deipilih');
    }

}
