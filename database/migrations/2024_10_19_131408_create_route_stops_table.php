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
        Schema::create('route_stops', function (Blueprint $table) {
            $table->id();
            $table->foreignId('route_id')
                ->index('route_stops_route_idx')
                ->constrained('bus_routes')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreignId('stop_id')
                ->index('route_stops_stop_idx')
                ->constrained('stops')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->integer('order');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('route_stops');
    }
};
