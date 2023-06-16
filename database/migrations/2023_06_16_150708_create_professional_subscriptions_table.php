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
            $table->bigInteger('professional_id');
            $table->foreign('professional_id')->references('id')->on('professionals');
            $table->bigInteger('subscription_plan_id');
            $table->foreign('subscription_plan_id')->references('id')->on('subscription_plans');
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
