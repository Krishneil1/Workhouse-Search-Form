<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listing',function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->integer('price');
            $table->integer('bedroom');
            $table->integer('bathroom');
            $table->integer('storey');
            $table->integer('garage');
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
        Schema::drop('listing');
    }
}
