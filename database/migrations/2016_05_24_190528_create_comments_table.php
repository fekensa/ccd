<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->text('comment');
            $table->timestamps();
            $table->integer('posts_id')->unsigned()->default(0);
            $table->foreign('posts_id')
                    ->references('id')->on('posts')
                    ->onDelete('cascade'); 
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
        Schema::drop('comments');
    }
}
