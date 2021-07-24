<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGodelieveSecursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('godelieve_securs', function (Blueprint $table) {
            $table->id();
            $table->string('Expiration');
            $table->string('Avertissement');
            $table->string('Blocage');
            $table->string('Blaspheme');
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
        Schema::dropIfExists('godelieve_securs');
    }
}
