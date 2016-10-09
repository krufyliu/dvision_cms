<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToAdmins extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('admins', function(Blueprint $table) {
            $table->boolean('is_super')->default(false)->comment('是否是超级管理员');
            $table->boolean('need_change_password')->default(false)->comment('登陆后是否需要强制修改密码');
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
        Schema::table('admins', function(Blueprint $table) {
            $table->dropColumn('is_super');
            $table->dropColumn('need_change_password');
        });
    }
}
