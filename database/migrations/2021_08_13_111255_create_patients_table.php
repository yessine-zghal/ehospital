<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Firstname');
            $table->string('lastname');
            $table->string('username');
            $table->string('email')->unique();
            $table->date('dateofbirth');
            $table->string('address');
            $table->string('city');
            $table->string('country');
            $table->string('state');
            $table->integer('postalcode');
            $table->integer('phone');
            $table->string('gendre');
            $table->string('file');
            $table->string('patientrecord');
            


            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
