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

        Schema::create('professional_subscriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('professional_id')->nullable()->constrained();
            $table->foreignId('subscription_plan_id')->nullable()->constrained();
            $table->dateTime('start_date');
            $table->unique(["professional_id", "subscription_plan_id"], 'professional_plan_unique');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professional_subscriptions');
    }
};
