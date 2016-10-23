<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppoinmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appoinment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('doctor_id');
            $table->integer('chamber_id');
            $table->integer('patient_id');
            $table->string('appointment_date');
            $table->string('app_time');
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
        Schema::dropIfExists('appoinment');
    }
}
