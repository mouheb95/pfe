<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCongesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conges', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_enseig');
            $table->string('nom');
            $table->string('prenom');
            $table->string('grade');
            $table->string('stra_nat');
            $table->string('p_a');
            $table->string('p_n');
            $table->string('jus');
            $table->string('depuis');
            $table->string('periode');
            $table->integer('annee');
            $table->string('p_t');
            $table->integer('tele');
            $table->integer('num_post');
            $table->string('place');
            $table->string('certif');
            $table->string('date_ecrire');
            $table->string('ou');
            $table->integer('code');
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
        Schema::dropIfExists('conges');
    }
}
