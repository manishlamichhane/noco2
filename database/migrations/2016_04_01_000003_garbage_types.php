<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GarbageTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('garbage_types', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('garbage_type_id');
            $table->integer('garbage_cat_name')->unsigned();
            $table->string('garbage_type_name');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('garbage_types', function($table) {

            $table->foreign('garbage_cat_name')->references('garbage_category_id')->on('garbage_categories');

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
          Schema::drop('garbage_types');
        
    }
}
