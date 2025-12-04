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
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->string('device_model')->unique();
            $table->foreignId('device_owner')->constrained(
                table: 'users',
                indexName: 'device_owner_id'
            );
            $table->string('device_name');
            $table->string('device_gsm_number');
            $table->string('device_ip')->default('0.0.0.0');
            $table->integer('device_health');
            $table->integer('device_signal');
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devices');
    }
};
