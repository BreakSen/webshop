<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('author');
            $table->text('description');
            $table->text('image');
            $table->integer('price');
            $table->foreignId('category_id')->constrained();
            //$table->integer('category_id');
            //https://laravel.com/docs/9.x/migrations#foreign-key-constraints
            //Schema::table('posts', function (Blueprint $table) {
            //     $table->unsignedBigInteger('user_id');
            
            //     $table->foreign('user_id')->references('id')->on('users');
            // });
            // check the link to do a better id category key
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
        Schema::dropIfExists('books');
    }
};
