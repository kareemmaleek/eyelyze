<?php

namespace Database\Seeders;

use App\Models\AuditLogs;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call(AdminSeeder::class);

        $this->call(DevicesSeeder::class);


        AuditLogs::factory(4)->recycle(User::factory(50)->create([
            'role' => 0,
        ]))->create();
    }
}
