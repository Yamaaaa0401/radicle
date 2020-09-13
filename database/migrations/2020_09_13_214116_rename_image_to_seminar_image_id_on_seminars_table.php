<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameImageToSeminarImageIdOnSeminarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('seminars', function (Blueprint $table) {
            //
            $table->renameColumn('image', 'seminar_image_id');
            $table->renameColumn('format_id', 'mst_format_id');
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
            $table->renameColumn('seminar_image_id','image');
            $table->renameColumn('mst_format_id','format_id');
        });
    }
}
