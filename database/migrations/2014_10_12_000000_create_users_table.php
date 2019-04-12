<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->text('companyName');
            $table->string('telephoneNumber');
            $table->text('name');
            $table->text('role')->nullable();
            $table->string('cellphoneNumber');
            $table->string('email')->unique();
            $table->string('rif')->unique();
            $table->text('city');
            $table->text('address_fact');
            $table->text('address_send');
            $table->string('date_expiration')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->text('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
