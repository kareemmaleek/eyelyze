<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Ramsey\Uuid\Uuid;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Devices>
 */
class DevicesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "device_model" => Uuid::uuid4(),
            "device_owner" => User::factory(),
            "device_name" => fake()->userName(),
            "device_gsm_number" => fake()->e164PhoneNumber(),
            "device_ip" => fake()->ipv4(),
            "device_signal" => rand(50, 90),
            "device_health" => rand(70, 100),
            "status" => 1
        ];
    }
}
