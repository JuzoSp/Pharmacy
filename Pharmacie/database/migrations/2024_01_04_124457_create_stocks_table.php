<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->integer('quantite');
            $table->unsignedBigInteger('depot_id');
            $table->unsignedBigInteger('produit_id');
            // Ajoutez d'autres colonnes au besoin

            $table->foreign('depot_id')->references('id')->on('depots');
            $table->foreign('produit_id')->references('id')->on('produits');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('stocks');
    }
};
