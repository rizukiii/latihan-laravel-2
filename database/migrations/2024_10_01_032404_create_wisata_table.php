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
        Schema::create('wisata', function (Blueprint $table) {
            // id auto ai dan primary
            $table->id();
            // varchar itu string
            $table->string('nama', 100);
            // text tetap sama
            $table->text('alamat');
            // year untuk tahun
            $table->year('tahun');
            // double untuk uang rupiah
            $table->double('harga_tiket');
            $table->text('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wisata');
    }
};
