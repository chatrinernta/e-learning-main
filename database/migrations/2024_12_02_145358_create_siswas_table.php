<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('nis')->unique(); // Nomor Induk Siswa (unik)
            $table->string('nisn')->unique(); // Nomor Induk Siswa Nasional (unik)
            $table->string('nama'); // Nama siswa
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']); // Jenis kelamin lengkap
            $table->string('tempat_lahir'); // Tempat lahir siswa
            $table->date('tanggal_lahir'); // Tanggal lahir siswa
            $table->string('kelas')->default('XII PPLG 1'); // Kelas dengan default value
            $table->timestamps(); // Timestamps created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas');
    }
}

