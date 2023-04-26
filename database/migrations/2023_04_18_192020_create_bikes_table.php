<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bikes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            
            $table->unsignedBigInteger("category_id");
            $table->foreign("category_id")->references("category_id")->on("categories");
            $table->unsignedBigInteger("user_id");
            $table->foreign('user_id')->references('id')->on('users');

            $table->string("slug")->unique();
            $table->string("title");
            $table->string("description");
            $table->string("bike_make");
            $table->string("bike_year");
            $table->string("condition");
            $table->string("price");
            $table->string("bike_images");
            $table->string("location");
            $table->string("status");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bikes');
    }
}