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
            $table->foreignId('user_id')->unique()->constrained();
            $table->enum('account_type', ["freelancer","company_single_person","company_multiple_person"])->default('freelancer')->comment('{freelancer, company_single_person,company_multiple_person)');
            $table->boolean('is_closed_tomporary')->default(false);
            $table->unsignedMediumInteger('employment_rate')->default(0);
            $table->json('work_days')->nullable();
            $table->string('website_url')->nullable();
            $table->string('commercial_register_no')->nullable();
            $table->boolean('swear_on_ethiks')->default(false);
            $table->boolean('is_giving_promotions')->default(false);
            $table->boolean('has_service_after_sale')->default(false);
            $table->boolean('accept_installment_sale')->default(false);
            $table->foreignId('company_id')->nullable()->references('id')->on('professional_companies')->constrained();
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
