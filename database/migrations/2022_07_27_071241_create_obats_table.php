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
        Schema::create('obats', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('nama_obat');
            $table->string('slug');
            $table->text('keterangan');
            $table->integer('stok');
            $table->integer('harga');
            $table->unsignedBigInteger('id_kategori');
            $table->foreign('id_kategori')->references('id')->on('kategori_obats')
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
        Schema::dropIfExists('obats');
    }
};
