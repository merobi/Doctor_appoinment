<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstituteInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institute_info', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('doctor_id');
            $table->string('name');
            $table->text('address');
            $table->string('fax');
            $table->string('email');
            $table->string('phone');
            $table->text('about_hospital');
            $table->string('type');
            $table->string('city');
            $table->string('post_code');
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
        Schema::dropIfExists('institute_info');
    }
}
