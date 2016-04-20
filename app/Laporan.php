<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = 'laporan';
    protected $fillable = array('tipe_progres', 'judul', 'dosen','id_proposal','file');
    protected $guarded = ['id'];
}