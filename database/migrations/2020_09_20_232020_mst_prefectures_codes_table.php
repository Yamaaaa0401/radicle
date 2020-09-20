<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MstPrefecturesCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            if(!Schema::hasTable('mst_prefectures_codes')){
            Schema::create('mst_prefectures_codes', function
             (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name');
                $table->integer('code',100);
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
        Schema::dropIfExists('mst_prefectures_codes');
    }
}
