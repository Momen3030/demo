<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();   //bigint autoincrment unsiged primary
            $table->string('name');  //varchar 255 not null
            $table->string('address')->default("default  address ");
            $table->string('email')->unique(); // varchar 255 not null unique
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password'); //varchar 255 not null
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
