<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pendidikans', function (Blueprint $table) {
            $table->id();
            $table->enum('id_dosen', ['Dosen1', 'Dosen2', 'Dosen3']);
            $table->enum('kategori', ['Pendidikan Formal', 'Pelatihan/Diklat']);
            $table->string('pendidikan');
            $table->string('gelar')->nullable();
            $table->string('tahun')->nullable();
            $table->string('jenjang')->nullable();
            $table->text('berkas')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendidikans');
    }
};
