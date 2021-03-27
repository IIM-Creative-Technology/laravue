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
            $table->id('client_id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description');
            $table->text('raison_social');
            $table->text('statut_juridique');
            $table->text('capital');
            $table->text('numero_siret');
            $table->text('code_naf');
            $table->text('pays');
            $table->text('adresse');
            $table->text('code_postal');
            $table->text('ville');
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
