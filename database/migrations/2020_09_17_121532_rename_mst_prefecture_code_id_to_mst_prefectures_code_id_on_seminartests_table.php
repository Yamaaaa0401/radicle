<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameMstPrefectureCodeIdToMstPrefecturesCodeIdOnSeminartestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('seminartests', function (Blueprint $table) {
            $table->renameColumn('mst_prefecture_code_id', 'mst_prefectures_code_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('seminartests', function (Blueprint $table) {
            //
        });
    }
}
