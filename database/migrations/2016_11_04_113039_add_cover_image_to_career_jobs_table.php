<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCoverImageToCareerJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('career_jobs', function (Blueprint $table) {
            $table->string('cover_image')->comment('封面图');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('career_jobs', function (Blueprint $table) {
            $table->dropColumn('cover_image');
        });
    }
}
