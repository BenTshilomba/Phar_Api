<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticeStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notice_stats', function (Blueprint $table) {
            $table->id();
            $table->string('Telephone');
            $table->string('Identifiant');
            $table->string('Code_nc');
            $table->string('Nc');
            $table->string('Dci');
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
        Schema::dropIfExists('notice_stats');
    }
}
