<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrupKelasTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('grup_kelas', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('judul')->required(); // Kolom untuk judul
            $table->text('deskripsi')->nullable(); // Kolom untuk deskripsi
            $table->string('link')->required(); // Kolom untuk URL/link
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grup_kelas');
    }
}
