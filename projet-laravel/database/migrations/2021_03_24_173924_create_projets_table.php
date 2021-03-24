<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->string('name_responsable');
            $table->string('prenom_responsable');
            $table->string('tel_responsable', 10);
            $table->string('email_responsable');
            $table->string('title');
            $table->string('description');
            $table->string('date_debut');
            $table->string('date_fin');
            $table->string('etat');
            $table->string('nombre_jours_vendus');




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
        Schema::dropIfExists('projets');
    }
}
