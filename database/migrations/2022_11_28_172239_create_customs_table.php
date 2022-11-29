<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customs', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->enum('status', ['Pending', 'Belum_Bayar', 'Pengerjaan', 'Dikirim', 'Selesai'])->default('Pending');
            $table->enum('jenis_custom', ['Kursi', 'Meja', 'Pagar', 'Pintu', 'Rak']);
            $table->enum('bahan', ['Kayu Jati', 'Kayu Mahoni', 'Besi', 'Kaca', 'Alumunium']);
            $table->string('desc', 255);
            $table->integer('dp');
            $table->integer('total_harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customs');
    }
};
