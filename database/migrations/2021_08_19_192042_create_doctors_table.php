<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            
            $table->id();
            $table->timestamps();
            $table->string('Firstname');
            $table->string('lastname');
            $table->string('username');
            $table->string('email');
            $table->string('password');
            $table->date('dateOfBirth');
            $table->string('gender');
            $table->string('adress');
            $table->string('country');
            $table->string('city');
            $table->string('state');
            $table->string('speciality');
            $table->unsignedBigInteger('phone');
            $table->string('image', 2048);
            $table->string('biography', 2048);
            $table->string('status');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
}
