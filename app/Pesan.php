<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    //TABLE
    protected $table = 'pesan_user';
    protected $fillable = array('subjek', 'penerima', 'pesan','file','id_pengirim');
    protected $guarded = ['id'];
<<<<<<< HEAD
}
=======

    //fungsi untuk mendapatkan foreign key one-to-one pengirim
    public function hasPengirim(){
    	return $this->hasOne('\App\users', 'id', 'id_pengirim');
    }

    //fungsi untuk mendapatkan foreign key one-to-one penerima
    public function hasPenerima(){
    	return $this->hasOne('\App\users', 'id', 'penerima');
    }

}
>>>>>>> 896703dbc6025a47aad621d90322d29d5c249d1c
