<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProtocoleStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('protocole_stats', function (Blueprint $table) {
            $table->id();
            $table->string('Telephone');
            $table->string('Identifiant');
            $table->string('CodeP');
            $table->string('Jaime');
            $table->string('Vue');
            $table->string('Favoris');
            $table->string('Id_code');
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
        Schema::dropIfExists('protocole_stats');
    }
}
