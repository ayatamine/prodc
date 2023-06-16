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

        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->mediumText('description');
            $table->boolean('is_open')->default(false);
            $table->bigInteger('duration');
            $table->enum('timeline_point', ["pending","published","processing","finished"])->default('pending')->comment('receiving offers or in_progress or done');
            $table->float('min_budget')->nullable();
            $table->float('max_budget')->nullable();
            $table->float('real_amount')->nullable();
            $table->unsignedBigInteger('professional_id')->nullable();
            $table->foreign('professional_id')->references('id')->on('professionals');
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
