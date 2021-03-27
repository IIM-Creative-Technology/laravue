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
            $table->text('prenom_responsable');
            $table->text('tel_responsable');
            $table->text('email_responsable');
            $table->text('title');
            $table->text('description');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->text('etat');
            $table->text('nombre_jours_vendus',3);
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
