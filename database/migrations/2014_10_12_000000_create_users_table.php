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
            $table->bigIncrements('id');
            $table->uuid('uuid');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('nickname')->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->unique()->nullable();
            $table->string('national_id')->nullable();
            $table->dateTime('date_of_birth')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('gender')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('line')->nullable();
            $table->string('youtube')->nullable();
            $table->string('website')->nullable();
            $table->string('about_me')->nullable();
            $table->string('avatar')->nullable();
            $table->string('cover_photo')->nullable();
            $table->boolean('is_publish_email')->default(false);
            $table->boolean('is_publish_phone_number')->default(false);
            $table->boolean('is_publish_facebook')->default(false);
            $table->boolean('is_publish_twitter')->default(false);
            $table->boolean('is_publish_line')->default(false);
            $table->boolean('is_publish_youtube')->default(false);
            $table->boolean('is_publish_website')->default(false);
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
