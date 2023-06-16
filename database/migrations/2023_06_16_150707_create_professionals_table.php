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

        Schema::create('professionals', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->dateTime('email_verified_at');
            $table->string('phone_number');
            $table->string('profile_photo_path');
            $table->mediumText('bio')->nullable();
            $table->enum('account_type', ["freelancer","company_single_person","company_multiple_person"])->default('freelancer')->comment('{freelancer, company_single_person,company_multiple_person)');
            $table->foreignId('company_id')->references('id')->on('professional_companies')->nullable()->constrained();
            $table->foreignId('country_id')->nullable()->constrained();
            $table->date('birth_date');
            $table->boolean('account_status')->default(true);
            $table->boolean('is_reported')->default(false);
            $table->boolean('is_account_verified')->default(false);
            $table->dateTime('phone_verified_at')->nullable();
            $table->enum('gender',['male','female'])->default('male')->comment('male or female');
            $table->string('oauth_taken');
            $table->boolean('is_closed_tomporary')->default(false);
            $table->string('city');
            $table->foreignId('job_id')->nullable()->constrained();
            $table->unsignedMediumInteger('employment rate');
            $table->json('work_days')->nullable();
            $table->dateTime('last_seen')->nullable();
            $table->json('location')->nullable();
            $table->string('website_url')->nullable();
            $table->string('commercial_register_no')->nullable();
            $table->boolean('is_subscribed_to_newsletter')->default(false);
            $table->boolean('swear_on_ethiks')->default(false);
            $table->boolean('is_giving_promotions')->default(false);
            $table->boolean('has_service_after_sale')->default(false);
            $table->boolean('accept_installment_sale')->default(false);
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professionals');
    }
};
