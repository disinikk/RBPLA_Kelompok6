<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerkembanganSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perkembanganSiswa', function (Blueprint $table) {
            $table->id('IdPerkembanganSiswa');
            $table->integer('IdUser');
            $table->string('Nama');
            $table->integer('NilaiTugasSiswa');
            $table->integer('NilaiSikapSiswa');
            $table->string('KeteranganSiswa');
            $table->integer('IdTugas');
            $table->foreignId('id')->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perkembangan_siswa');
    }
}
