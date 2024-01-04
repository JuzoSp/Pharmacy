<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePharmacienTable extends Migration
{
    public function up()
    {
        Schema::create('pharmacien', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->string('mot_de_passe');
            // Add other columns as needed
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pharmacien');
    }
};
