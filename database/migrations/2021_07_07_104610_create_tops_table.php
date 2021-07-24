<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tops', function (Blueprint $table) {
            $table->id();
            $table->string('Lock_my');
            $table->string('Telephone');
            $table->string('Fonction');
            $table->string('Sauvegarde');
            $table->string('Hopital');
            $table->string('Province');
            $table->string('Pays');
            $table->string('Cnom');
            $table->string('Imei');
            $table->string('Top');
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
        Schema::dropIfExists('tops');
    }
}
