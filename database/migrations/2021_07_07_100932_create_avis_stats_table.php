<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvisStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avis_stats', function (Blueprint $table) {
            $table->id();
            $table->string('Telephone');
            $table->string('Identifiant');
            $table->string('Code_avis');
            $table->string('Jaime');
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
        Schema::dropIfExists('avis_stats');
    }
}
