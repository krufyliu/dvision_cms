<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareerJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career_jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->comment('职位');
            $table->string('department')->comment('部门');
            $table->string('location')->comment('工作地点');
            $table->text('description')->comment('描述');
            $table->tinyInteger('status')->comment('状态: 1 未发布 2 已发布');
            $table->integer('creator_id')->comment('创建人ID');
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
        Schema::dropIfExists('career_jobs');
    }
}
