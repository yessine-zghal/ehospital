<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Appointment_ID');
            $table->string('Patient_Name');
            $table->string('Department');
            $table->string('Doctor');
            $table->date('Date');
            $table->string('Time');
            $table->string('Patient_Email');
            $table->string('Patient_Phone_Number');
            $table->string('Message',2048);
            $table->string('Appointment_Status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
