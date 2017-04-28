<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCurriculumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculums', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('document_number');
            $table->date('birthdate');
            $table->string('country');
            $table->string('city');
            $table->string('addres');
            $table->string('phone_number');
            $table->string('email');
            $table->string('profile');
            $table->integer('user_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('curriculums', function($table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); //LLave foranea usuarios
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curriculums');
    }
}
