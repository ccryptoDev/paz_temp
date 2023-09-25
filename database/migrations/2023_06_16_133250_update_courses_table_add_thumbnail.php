<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCoursesTableAddThumbnail extends Migration
{
    protected $thumbnail = "http://localhost:8000/uploads/thumbnails/default.thumbnail.jpg";
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courses',function (Blueprint $table) {
            $table->string('thumbnail')->default($this->thumbnail);
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
