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
        Schema::create('peminjams', function (Blueprint $table) {
            $table->id();
            $table->string('nama_anggota');
            $table->string('judul_buku');
            $table->string('tanggal_peminjam');
            $table->string('tanggal_pengembalian');
            $table->string('kondisi_buku_saat_dipinjam');
            $table->string('kondisi_buku_saat_dikembalikan');
            $table->string('denda');
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
        Schema::dropIfExists('peminjams');
    }
};
