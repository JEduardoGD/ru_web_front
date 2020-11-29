<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_post', function (Blueprint $table) {
            $table->id();
            $table->text('title', 255)->nullable(false);
            $table->longText('short_html');
            $table->longText('html');
            $table->text('tags');
            $table->unsignedBigInteger('user_id');
            $table->text('image');
            $table->foreign('user_id')->references('id')->on('users');
            $table->boolean('visible')->default(true);
            $table->dateTimeTz('visible_since')->useCurrent();
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
        Schema::dropIfExists('blog_post');
    }
}
