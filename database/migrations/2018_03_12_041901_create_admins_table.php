<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins',function(Blueprint $table){
            $table->increments('admin_id');
            $table->string('name');
            $table->string('email',191)->unique();
            $table->string('password');
            $table->string('salt');
            $table->tinyInteger('role')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->rememberToken();
            $table->dateTime('last_login')->nullable();
            $table->timestamps();
            $table->softDeletes();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('admins');
    }
}
