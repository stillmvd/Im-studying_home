<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    public function up()
    {   
        Schema::create('posts', function (Blueprint $table) {
            $table->id()->from(1001);
            $table->timestamps();

            $table->foreignId('user_id')->constrained();
            
            $table->string('alias');
            $table->text('description');
            $table->text('category');
            $table->foreignId('category_id')->constrained();

            $table->boolean('published')->default(true);
            $table->timestamp('published_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
