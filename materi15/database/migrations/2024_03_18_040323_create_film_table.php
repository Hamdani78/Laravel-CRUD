<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('film', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->string('judul');
            $table->text('ringkasan');
            $table->year('tahun');
            $table->string('poster');
            $table->unsignedBigInteger('genre_id');
            $table->foreign('genre_id')->references('id')->on('genre');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('film');
    }
};