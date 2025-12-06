<?php

namespace Database\Factories;

use App\Models\Devices;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DeviceLogsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "device_model" => Devices::factory(),
            "device_health" => rand(50, 100),
            "device_signal" => rand(50, 100),
            "device_course" => rand(0, 360),
            "device_lat" => fake()->latitude(),
            "device_long" => fake()->longitude(),
            "device_speed" => rand(0, 100),
            "status" => 1
        ];
    }
}
