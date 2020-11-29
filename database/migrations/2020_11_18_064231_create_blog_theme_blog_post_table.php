<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogThemeBlogPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_theme_blog_post', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('blog_theme_id');
            $table->foreign('blog_theme_id')->references('id')->on('blog_theme');
            $table->unsignedBigInteger('blog_post_id');
            $table->foreign('blog_post_id')->references('id')->on('blog_posts');
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
        Schema::dropIfExists('blog_theme_blog_post');
    }
}
