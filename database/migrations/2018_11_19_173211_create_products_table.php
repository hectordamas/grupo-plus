<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image');
            $table->text('title');
            $table->text('details')->nullable();
            $table->string('company')->nullable();
            $table->string('category')->nullable();
            $table->string('brand')->nullable();
            $table->float('ref')->nullable();
            $table->float('regular')->nullable();
            $table->float('premium')->nullable();
            $table->string('sku')->nullable();
            $table->integer('stock')->nullable();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('products');
    }
}
