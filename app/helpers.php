<?php

use App\Models\Informasi;
use App\Models\TemaUser;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use phpDocumentor\Reflection\Types\Null_;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Str;
use function PHPUnit\Framework\isNull;



function getInformasiUndangan($idUser)
{
    return Informasi::where('id_user', $idUser)->first();
}

function getTemaUser($idUser)
{
    $tema = TemaUser::where('id_user', $idUser)->first();
    if ($tema) {
        return $tema->id_tema;
    }
    return 0;
}

function generateId()
{
    return strtolower(Str::random(8) . '-' . Str::random(4) . '-' . Str::random(4) . '-' . Str::random(4) . '-' . Str::random(12));
}

function removeSpace($string)
{
    return str_replace(" ", "", $string);
}

function spaceToUnderscore($string)
{
    return strtolower(str_replace(" ", "_", $string));
}

function getUserRoleName($userRoleId)
{
    return DB::table('users')
        ->Join('role', 'role.id_role', '=', 'users.id_role')
        ->where('users.id_role', $userRoleId)
        ->select('nama_role')
        ->first()->nama_role;
}


function sweetAlert($pesan, $tipe)
{
    echo '<script>document.addEventListener("DOMContentLoaded", function() {
        Swal.fire(
            "' . $pesan . '",
            "proses berhasil di lakukan",
            "' . $tipe . '",
        );
    })</script>';
}
