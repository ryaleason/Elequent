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
    Schema::create('pesanans', function (Blueprint $table) {
        $table->id();
        $table->foreignId('id_menu')->constrained('menus')->onDelete('cascade');
        $table->foreignId('id_pelanggan')->constrained('pelanggans')->onDelete('cascade');
        $table->integer('jumlah');
        $table->decimal('total_harga', 10, 2);
        $table->date('tanggal_pesanan');
        $table->enum('status_pesanan', ['pending', 'completed', 'cancelled'])->default('pending');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
