<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProtocolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('protocoles', function (Blueprint $table) {
            $table->id();
            $table->string('Codep');
            $table->string('Intitule');
            $table->string('Categorie');
            $table->string('Service');
            $table->string('Atteste_selon');
            $table->string('Attesteur');
            $table->string('Hopital_attesteur');
            $table->string('Province_attesteur');
            $table->string('Telephone_attesteur');
            $table->string('Details');
            $table->string('Autres_detail');
            $table->string('Date');
            $table->string('Pays');
            $table->string('Fonction');
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
        Schema::dropIfExists('protocoles');
    }
}
