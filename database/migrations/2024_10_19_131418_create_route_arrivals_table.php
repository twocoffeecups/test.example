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
        Schema::create('route_arrivals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('route_id')
                ->index('arrival_route_idx')
                ->constrained('bus_routes')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreignId('stop_id')
                ->index('arrival_stop_idx')
                ->constrained('stops')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->time('arrival_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('route_arrivals');
    }
};
