<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBalaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balais', function (Blueprint $table) {
            $table->id();
            $table->string('nama_satker');
            $table->string('alamat');
            $table->string('kota');
            // $table->unsignedBigInteger('tipe_id');
            // $table->foreign('tipe_id')->references('id')->on('tipe_balais')->onDelete('cascade');
            // $table->foreignId('tipe_id')->constrained('tipe_balais');
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
        Schema::dropIfExists('balais');
    }
}
