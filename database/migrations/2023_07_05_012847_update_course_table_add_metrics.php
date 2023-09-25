<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCourseTableAddMetrics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courses',function (Blueprint $table) {
            $table->integer('likes')->default(0);
            $table->integer('unlikes')->default(0);
            $table->integer('reviews')->default(0);
            $table->integer('buyers')->default(0);
            $table->integer('comments')->default(0);
            $table->integer('showers')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
