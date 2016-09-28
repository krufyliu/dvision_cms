<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->comment('标题');
            $table->string('cover_image')->comment('封面图');
            $table->text('content')->comment('内容');
            $table->tinyInteger('status')->comment('状态: 1 草稿 2 发布');
            $table->integer('creator_id')->comment('创建者ID');
            $table->timestamp('deleted_at')->nullable()->comment('软删除时间');
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
        Schema::dropIfExists('posts');
    }
}
