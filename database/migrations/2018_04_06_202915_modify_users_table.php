<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table){
            $table->string('gender')->nullable(true)->change();
            $table->string('date_of_birth')->nullable(true)->change();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table){
            $table->string('gender')->nullable(false)->change();
            $table->string('date_of_birth')->nullable(false)->change();
            $table->dropColumn('remember_token');
        });
    }
}
