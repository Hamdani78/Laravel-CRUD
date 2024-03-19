<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('peran', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('film_id');
            $table->unsignedBigInteger('casts_id');
            $table->string('nama');
            $table->timestamps();
    
            $table->foreign('film_id')->references('id')->on('film');
            $table->foreign('casts_id')->references('id')->on('casts');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('peran');
    }
};
