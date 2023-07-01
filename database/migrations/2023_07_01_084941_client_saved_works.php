<?php

use App\Models\Work;
use App\Models\Client;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('clien_saved_works', function (Blueprint $table) {
            $table->foreignIdFor(Client::class)->constrained();
            $table->foreignIdFor(Work::class)->constrained();
            $table->timestamps();
            $table->primary(['client_id', 'work_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('clien_saved_works');
    }

};