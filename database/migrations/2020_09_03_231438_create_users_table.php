<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('users')){
            Schema::create('users', function
             (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('email',500);
                $table->string('name',100);
                $table->string('password',50);
                $table->string('family_name',30);
                $table->string('given_name',30);
                $table->string('workplace',100);
                $table->string('title',100);
                $table->string('qualification',100);
                $table->timestamps();
            });
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::dropIfExists('users');

    }
}
