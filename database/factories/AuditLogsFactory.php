<?php

namespace Database\Factories;

use App\Models\AuditLogs;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AuditLogs>
 */
class AuditLogsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'description' => fake()->sentence(5),
            'route' => fake()->sentence(1),
            'method' => 'get',
            'ip_address' => fake()->ipv4(),
        ];
    }

    protected $model = AuditLogs::class;
}
