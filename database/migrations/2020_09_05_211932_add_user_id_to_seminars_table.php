<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToSeminarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('seminars', function (Blueprint $table) {
            //カラムの追加
            $table->integer('mst_format_id');	
            $table->integer('biz_user_id');	
            $table->string('online_conference',255);
            $table->string('eventologist',255);
            $table->string('name',255);
            $table->text('lead',255);
            $table->date('seminar_date');
            $table->integer('capacity');
            $table->string('capacity_supplement',255);
            $table->text('seminar_description');
            $table->string('venue',255);
            $table->integer('mst_prefecture_code_id');
            $table->string('address',255);
            $table->integer('fee');
            $table->string('subject',255);
            $table->string('qualification',255);
            $table->integer('qualification_point');
            $table->integer('unit_id');
            $table->integer('application_id');
            $table->text('web');
            $table->text('seminar_image_id');
            $table->text('website');
            $table->integer('mst_seminar_contract_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('seminars', function (Blueprint $table) {
            //
        });
    }
}
