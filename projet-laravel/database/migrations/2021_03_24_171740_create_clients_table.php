<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('raison_social');
            $table->string('staut_juridique');
            $table->string('capital');
            $table->string('numero_siret');
            $table->string('code_naf', 6);
            $table->string('pays');
            $table->text('adresse');
            $table->string('code_postal', 5);
            $table->string('ville');

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
        Schema::dropIfExists('clients');
    }
}
