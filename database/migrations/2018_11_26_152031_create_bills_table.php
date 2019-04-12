<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('billNumber')->unique();
            $table->float('imponibleBill')->nullable();
            $table->string('company_fact');
            $table->string('retention')->nullable();
            $table->text('pdf');
            $table->float('iva')->nullable();
            $table->float('total')->nullable();
            $table->string('status')->nullable();
            $table->string('destiny')->nullable();
            $table->string('date_send')->nullable();
            $table->string('send_with')->nullable();
            $table->float('cost_send')->nullable();
            $table->integer('percent_send')->nullable();
            $table->string('status_flete')->nullable();
            $table->string('data_send')->nullable();
            $table->integer('user_id')->unsigned();
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
        Schema::dropIfExists('bills');
    }
}
