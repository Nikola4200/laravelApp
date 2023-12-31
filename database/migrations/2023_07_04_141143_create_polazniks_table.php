<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePolazniksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('polazniks', function (Blueprint $table) {
            $table->id();
            $table->string('ime'); 
             $table->string('prezime');
             $table->string('jmbg');
             $table->string('email')->unique();
             $table->string('brojTelefona');

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
        Schema::dropIfExists('polazniks');
    }
}
