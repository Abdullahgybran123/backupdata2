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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pembeli');
            $table->unsignedBigInteger('id_obat');
            $table->integer('jumlah');
            $table->date('tanggal_transaksi');
            $table->integer('total');
        
            $table->foreign('id_pembeli')->references('id')->on('pembelis')
                ->onDelete('cascade');
        
            $table->foreign('id_obat')->references('id')->on('obats')
                ->onDelete('cascade');
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
        Schema::dropIfExists('transaksis');
    }
};
