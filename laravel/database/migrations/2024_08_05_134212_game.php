<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('game', function (Blueprint $table){
            $table->id();
            $table->string('Nama',45);
            $table->text('gameplay');
            $table->string('developer',45);
            $table->integer('');
        });
    }

    /**
     * Reverse the migrations
     */
    public function down(): void
    {
        Schema::drop('game', function(Blueprint $table){

        });
    }
};
