<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCommentToPostCommentsTable extends Migration
{
    public function up()
    {
        Schema::table('post_comments', function (Blueprint $table) {
            $table->text('comment')->nullable();
        });
    }

    public function down()
    {
        Schema::table('post_comments', function (Blueprint $table) {
            $table->dropColumn('comment');
        });
    }
}
