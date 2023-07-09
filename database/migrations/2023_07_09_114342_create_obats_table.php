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
    Schema::create('obats', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('kategoriobat');
        $table->integer('harga_obat');
        $table->integer('stok')->unsigned();
        $table->timestamps('tanggal_kadaluarsa');
    });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obats');
    }
};
