<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avis', function (Blueprint $table) {
            $table->id();
            $table->string('Hopital');
            $table->string('Province');
            $table->string('Date_send');
            $table->string('Time_send');
            $table->string('Avis');
            $table->string('CodeP');
            $table->string('Telephone');
            $table->string('Code_avis');
            $table->string('Pays');
            $table->string('Fonction');
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
        Schema::dropIfExists('avis');
    }
}
