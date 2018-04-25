<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropUserIdFromCategories extends Migration
{
   public function up()
    {
        Schema::table('categories', function(Blueprint $table) {
            $table->dropForeign('categories_user_id_foreign');
            $table->dropColumn('user_id');
        });
    }

    public function down()
    {
        Schema::table('categories', function(Blueprint $table) {
            $table->foreign('categories_user_id_foreign')
                  ->references('id')->on('users')
                  ->onDelete('cascade');
            $table->integer('user_id');
        });
    }
}

