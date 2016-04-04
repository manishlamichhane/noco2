<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserGarbageRelationship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('user_garbage_relationships', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('user_garbage_id');
            $table->integer('user')->unsigned();
            $table->integer('garbage_type')->unsigned();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('user_garbage_relationships', function($table) {

            $table->foreign('user')->references('user_id')->on('users');
            $table->foreign('garbage_type')->references('garbage_type_id')->on('garbage_types');

         });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('user_garbage_relationships');
    }
}
