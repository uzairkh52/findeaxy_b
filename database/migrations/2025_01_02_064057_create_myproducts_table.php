<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('myproducts', function (Blueprint $table) {
        $table->id();
        $table->timestamps(); // Automatically adds `created_at` and `updated_at`.
        $table->bigInteger('user_id')->unsigned();
        $table->string('my_product_name');
        $table->string('my_product_type');
        $table->bigInteger('my_product_type_id')->unsigned();
        $table->bigInteger('my_product_id')->unsigned();
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('myproducts');
    }
}
