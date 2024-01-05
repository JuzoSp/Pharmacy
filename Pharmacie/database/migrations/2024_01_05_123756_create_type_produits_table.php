<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeProduitsTable extends Migration
{
    public function up()
    {
        Schema::create('type_produits', function (Blueprint $table) {
            $table->id('idTypeProduit');
            $table->string('typeProduit');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('type_produits');
    }
}
