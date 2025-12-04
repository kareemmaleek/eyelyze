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
        Schema::create('device_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('device_model')->constrained(
                table: 'devices',
                indexName: 'device_logs_device_model'
            );
            $table->integer('device_health');
            $table->integer('device_signal');
            $table->integer('device_course');
            $table->string('device_lat');
            $table->string('device_long');
            $table->string('device_speed');
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('device_logs');
    }
};
