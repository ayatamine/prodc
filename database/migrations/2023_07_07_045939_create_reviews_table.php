<?php

use App\Models\Client;
use App\Models\Professional;
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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
             $table->foreignIdFor(Professional::class)->constrained()->cascadeOnDelete();
             $table->foreignIdFor(Client::class)->constrained()->cascadeOnDelete();
             $table->float('rating');
             $table->mediumText('comment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
