<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tema;

class TemaUser extends Model
{
    use HasFactory;

    protected $table = 'tema_user';
    protected $guarded = [''];

    public function tema(){
        return $this->belongsTo(Tema::class ,'id_tema','id_tema');
    }

}
