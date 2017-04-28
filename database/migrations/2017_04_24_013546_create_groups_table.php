<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('semillero_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('groups', function($table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); //LLave foranea usuarios
            $table->foreign('semillero_id')->references('id')->on('semilleros')->onDelete('cascade'); //LLave foranea usuarios
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groups');
    }
}
