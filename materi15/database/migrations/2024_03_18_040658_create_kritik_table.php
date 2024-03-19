<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kritik', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('film_id');
            $table->text('content');
            $table->integer('point');
            $table->timestamps();

            
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('film_id')->references('id')->on('film');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kritik');
    }
};
