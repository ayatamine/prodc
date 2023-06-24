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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('username')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('verification_token')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('profile_photo_path')->default('professional.png');
            $table->mediumText('bio')->nullable();
            $table->date('birth_date')->nullable();
            $table->boolean('account_status')->default(true);
            $table->boolean('is_reported')->default(false);
            $table->boolean('is_account_verified')->default(false);
            $table->dateTime('phone_verified_at')->nullable();
            $table->enum('gender',['male','female'])->default('male')->comment('male or female');
            $table->string('oauth_taken')->nullable();
            $table->foreignId('country_id')->nullable()->constrained();
            $table->string('nationality')->nullable();
            $table->string('city')->nullable();
            $table->foreignId('job_id')->nullable()->constrained()->comment('==sub_scpeciality_id');
            $table->string('job_position_title')->nullable();
            $table->dateTime('last_seen')->nullable();
            $table->json('location')->nullable();
            $table->boolean('is_subscribed_to_newsletter')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
