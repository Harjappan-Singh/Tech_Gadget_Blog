<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('tech_posts', function (Blueprint $table) {
    $table->increments('id');
    $table->string('slug')->default('');
    $table->string('title');
    $table->longText('description');
    $table->longText('content');
    $table->string('category');
    $table->string('tags')->nullable();
    $table->string('image_path');
    $table->boolean('is_featured')->default(false);
    $table->unsignedInteger('views')->default(0);
    $table->unsignedInteger('comments_count')->default(0);
    $table->unsignedInteger('likes_count')->default(0);
    $table->timestamp('published_at')->nullable();
    $table->unsignedBigInteger('user_id');
    $table->string('author_name');
    $table->timestamps();

    $table->foreign('user_id')->references('id')->on('users');
});

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tech_posts');
    }
}
