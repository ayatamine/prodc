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

        Schema::create('awards', function (Blueprint $table) {
            $table->id();
            $table->enum('title',[1,2,3,4])->default(1)->comment('1: top ideal prodc of month
            2: top ideal prodc of the year
            3: top awared client of month
            4: top awared client of the yearr');
            $table->double('amount')->default('100')->comment('the amount in euro');
            $table->enum('period_type',['monthly','yearly'])->default('monthly')->comment('monthly or yearly');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('awards');
    }
};
