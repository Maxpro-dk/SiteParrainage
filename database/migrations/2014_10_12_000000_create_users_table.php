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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fb_id')->nullable();
            $table->string('name')->nullable;
            $table->string('email')->unique()->nullable;
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable;
            $table->boolean('admin')->default(null)->nullable();
            $table->unsignedBigInteger("parent_id")->nullable();;
            $table->foreign('parent_id')->references('id')->on("users");
            $table->string("first_pass")->nullable();
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
};
