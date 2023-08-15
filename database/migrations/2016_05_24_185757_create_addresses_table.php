<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('country')->nullable();
            $table->string('region_or_state')->nullable();
            $table->string('city')->nullable();
            $table->string('subcity')->nullable();
            $table->string('woreda')->nullable();
            $table->string('kebele')->nullable();
            $table->timestamps();
            $table->integer('users_id')->unsigned()->default(0);
            $table->foreign('users_id')
                    ->references('id')->on('users')
                    ->onDelete('cascade');   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('addresses');
    }
}
