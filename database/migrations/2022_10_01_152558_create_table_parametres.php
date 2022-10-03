<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableParametres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_parametres', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('number');
            $table->text('politique_de_confidentialite');
            $table->string('mail');
            $table->text('social_links');
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
        Schema::dropIfExists('table_parametres');
    }
}
