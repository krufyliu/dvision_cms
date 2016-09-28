<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->comment('名称');
            $table->string('cover_image')->nullable()->comment('封面图');
            $table->string('url')->comment('视频地址');
            $table->text('description')->comment('描述');
            $table->integer('category_id')->comment('视频分类');
            $table->integer('creator_id')->comment('创建者ID');
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
        Schema::dropIfExists('videos');
    }
}
