<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors_info', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('speciality_id');
            $table->integer('camber_id');
            $table->integer('socialmedia_id');
            
            $table->string('title');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('image');
            $table->string('regi_no');
            $table->string('email');
            $table->string('phone_no');
            $table->text('about_me');
            $table->string('bloodgroup');
            $table->string('birthday');
            $table->text('address');
            $table->string('city');
            $table->integer('post_code');
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
        Schema::dropIfExists('doctors_info');
    }
}
