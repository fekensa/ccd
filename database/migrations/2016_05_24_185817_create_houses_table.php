<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('house_type', 10);
            $table->string('site_name')->nullable();
            $table->integer('progress_in_percent')->nullable;
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
        Schema::drop('houses');
    }
}
