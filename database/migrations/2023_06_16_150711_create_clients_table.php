<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->bigInteger('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('nationality')->nullable();
            $table->dateTime('email_verified_at');
            $table->string('profile_photo_path')->default('client.png');
            $table->boolean('account_stattus')->default(true);
            $table->boolean('is_reported')->default(false);
            $table->unsignedBigInteger('country_id')->nullable();
            $table->foreign('country_id')->references('id')->on('countries');
            $table->string('city')->nullable();
            $table->unsignedBigInteger('job_id');
            $table->foreign('job_id')->references('id')->on('jobs');
            $table->smallInteger('points')->default(0);
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
