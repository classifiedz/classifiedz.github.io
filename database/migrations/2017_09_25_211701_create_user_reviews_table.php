<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reviewee_id')->unsigned();
            $table->foreign('reviewee_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('reviewer_id')->unsigned();
            $table->foreign('reviewer_id')->references('id')->on('users')->onDelete('cascade');
            $table->text('comment')->nullable();
            $table->tinyInteger('rating')->unsigned();
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
        Schema::dropIfExists('user_reviews');
    }
}
