<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('order_number')->nullable();
            $table->string('first_name')->nullable();
            $table->string('addresse')->nullable();
            $table->string('sexe')->nullable();
            $table->string('email')->nullable();
            $table->string('telephone')->nullable();
            $table->string('nif')->nullable();
            $table->string('type_personne')->nullable();
            $table->string('debut_activite')->nullable();
            $table->string('table_name')->nullable();
            $table->string('type_enregistrement')->nullable();
            $table->string('status')->nullable();
            $table->string('valider')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
