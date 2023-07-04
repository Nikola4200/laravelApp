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
        Schema::create('kupovinas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('polaznik_id');
            $table->foreignId('kurs_id');
            $table->string('datum'); //gggg-mm-dd
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
        Schema::dropIfExists('kupovinas');
    }
};
