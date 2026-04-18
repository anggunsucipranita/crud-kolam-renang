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
    Schema::create('transaksis', function (Blueprint $table) {
        $table->id();
        $table->string('nama_pelanggan');
        $table->integer('total_pembayaran');
        $table->string('metode_pembayaran');
        $table->string('status_transaksi');
        $table->text('catatan')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
