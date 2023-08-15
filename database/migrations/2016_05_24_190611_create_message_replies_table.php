<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessageRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message_replies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('replied_by');
            $table->text('body')->nullable();
            $table->boolean('active')->default(true);            
            $table->timestamps();
            $table->integer('messages_id')->unsigned()->default(0);
            $table->foreign('messages_id')
                    ->references('id')->on('messages')
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
        Schema::drop('message_replies');
    }
}
