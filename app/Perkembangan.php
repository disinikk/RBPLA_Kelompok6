<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perkembangan extends Model
{
    protected $table = "perkembangan_siswa";

    protected $fillable = ['file','idMurid','tanggal','isi','nama'];
}
