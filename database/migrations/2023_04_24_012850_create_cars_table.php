<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger("category_id");
            $table->foreign("category_id")->references("category_id")->on("categories");
            $table->unsignedBigInteger("user_id");
            $table->foreign('user_id')->references('id')->on('users');

            $table->string("slug")->unique();
            $table->string("title");
            $table->string("description");
            $table->string("car_make");
            $table->string("car_model");
            $table->string("car_year");
            $table->integer("car_drive_km");
            $table->string("car_fuel");
            $table->string("registration_city");
            $table->string("car_documents");
            $table->string("assembly");
            $table->string("transmission");
            $table->string("features");
            $table->string("condition");
            $table->string("price");
            $table->string("car_images");
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
        Schema::dropIfExists('cars');
    }
}