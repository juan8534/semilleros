<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFormatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('note');
            $table->integer('user_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('formats', function($table) {
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
        Schema::dropIfExists('formats');
    }
}
