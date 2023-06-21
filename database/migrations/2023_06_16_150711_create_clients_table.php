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
            $table->string('last_name');
            $table->string('username')->nullable();
            $table->string('email')->unique();
            $table->string('verification_token')->nullable();
            $table->string('password')->nullable();
            $table->string('nationality')->nullable();
            $table->dateTime('email_verified_at')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('profile_photo_path')->default('client.png');
            $table->boolean('account_stattus')->default(true);
            $table->boolean('is_reported')->default(false);
            $table->foreignId('country_id')->nullable()->constrained();
            $table->string('city')->nullable();
            $table->foreignId('job_id')->nullable()->constrained();
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
