<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Posts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() // Blogpost Dataset
    {
        Schema::create('posts', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('picture');
            $table->string('genre');
            $table->string('headline');
            $table->text('description');
            $table->longText('content');
            $table->timestamps();
            $table->integer('read_time');
            $table->unsignedBigInteger('user_id');
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
        //
    }
}
