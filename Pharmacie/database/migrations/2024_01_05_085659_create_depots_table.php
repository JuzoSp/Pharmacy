<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepotsTable extends Migration
{
    public function up()
    {
        Schema::create('depots', function (Blueprint $table) {
            $table->id();
            $table->string('nom_depot');
            $table->string('adresse_depot');
            $table->unsignedBigInteger('magasin_id');
            $table->foreign('magasin_id')->references('id')->on('magasins');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('depots');
    }
}
