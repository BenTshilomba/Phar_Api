<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdonnanceProtocolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordonnance_protocoles', function (Blueprint $table) {
            $table->id();
            $table->string('CodeP');
            $table->string('Nc');
            $table->string('Dci');
            $table->string('Fg');
            $table->string('Dose');
            $table->string('Dt');
            $table->string('Posologie');
            $table->string('Va');
            $table->string('Duree');
            $table->string('Note');
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
        Schema::dropIfExists('ordonnance_protocoles');
    }
}
