<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eis', function (Blueprint $table) {
            $table->id();
            $table->string('Nc');
            $table->string('Dci');
            $table->string('Ct');
            $table->string('Firme');
            $table->string('Detail_ei');
            $table->string('Quantite');
            $table->string('Attitude');
            $table->string('Urgence');
            $table->string('Categorie');
            $table->string('Adresse');
            $table->string('Date');
            $table->string('Identifiant');
            $table->string('Telephone');
            $table->string('Hopital');
            $table->string('Code_ei');
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
        Schema::dropIfExists('eis');
    }
}
