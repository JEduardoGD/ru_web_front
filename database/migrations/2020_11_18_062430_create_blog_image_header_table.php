<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogImageHeaderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_image_header', function (Blueprint $table) {
            $table->id();
            $table->text('etag', 32);
            $table->longText('filename');
            $table->text('title', 255);
            $table->unsignedBigInteger('blog_post_id');
            $table->foreign('blog_post_id')->references('id')->on('blog_post');
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
        Schema::dropIfExists('blog_image_header');
    }
}
