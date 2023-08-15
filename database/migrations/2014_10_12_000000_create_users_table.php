<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique(); 
            $table->string('mobile'); 
            $table->string('phone')->nullable();           
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name')->nullable();
            $table->enum('role',['Customer','Administrator'])->default('Customer');
            $table->enum('gender',['Male','Female'])->default('Male');
            $table->string('password');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
