<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBizUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biz_users', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('group_name');
            $table->string('group_name_kana');
            $table->string('department');
            $table->string('name');
            $table->string('name_kana');
            $table->string('tel');
            $table->string('postal');
            $table->integer('mst_prefecture_code_id');
            $table->string('city');
            $table->string('address_line');
            $table->string('building_name');
            $table->integer('mst_biz_newsletter_id');
            $table->string('password');
            $table->integer('mst_user_authority_id');
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
        Schema::dropIfExists('biz_users');
    }
}
