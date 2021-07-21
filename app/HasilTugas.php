<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HasilTugas extends Model
{
    protected $table = "hasil_tugas";

    protected $fillable = ['nama','file','deskripsi','judul'];
}
