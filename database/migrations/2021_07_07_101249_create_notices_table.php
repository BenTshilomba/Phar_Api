<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notices', function (Blueprint $table) {
            $table->id();
            $table->string('Code_nc');
            $table->string('Nc');
            $table->string('Fg');
            $table->string('Dci');
            $table->string('Ct');
            $table->string('Indication');
            $table->string('Ci');
            $table->string('Dosage_posologie');
            $table->string('Ei');
            $table->string('Im');
            $table->string('Pec');
            $table->string('Composition');
            $table->string('Firme');
            $table->string('Cout');
            $table->string('Lieu');
            $table->string('Ma');
            $table->string('Precaution');
            $table->string('Es');
            $table->string('Autres');
            $table->string('Nouveau');
            $table->string('Payant');
            $table->string('Validation');
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
        Schema::dropIfExists('notices');
    }
}
