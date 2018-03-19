<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('from_user_id')->index()->unsigned();
            $table->integer('to_user_id')->index()->unsigned();
            $table->text('content');
            $table->timestamp('read_time')->nullable($value = true);                     
            $table->timestamps();
            $table->foreign('from_user_id')
                  ->references('id')->on('users')
                  ->onDelete('cascade');
            $table->foreign('to_user_id')
                  ->references('id')->on('posts')
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
        Schema::dropIfExists('messages');
    }
}
