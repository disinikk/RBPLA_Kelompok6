<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabTugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawabTugas', function (Blueprint $table) {
            $table->id('idJawaban');
            $table->foreignId('IdTugas')->constrained('tugas');
            $table->string('Jawaban');
            $table->string('UploadFile');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawab_tugas');
    }
}
