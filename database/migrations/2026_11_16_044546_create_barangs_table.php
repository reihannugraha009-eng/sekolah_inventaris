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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('kode_barang', 100)->unique();
            $table->string('nama_barang', 200);
            $table->enum('kategori', ['Elektronik', 'Furniture', 'Alat Tulis'])->default('Furniture');
            $table->integer('jumlah');
            $table->enum('kondisi', ['Baik', 'Rusak Ringgan', 'Amoh'])->default('Baik');
            $table->string('lokasi', 200);
            $table->date('tanggal_masuk')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
