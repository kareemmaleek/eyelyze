<?php

namespace Database\Seeders;

use App\Models\DeviceLogs;
use App\Models\Devices as ModelsDevices;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DevicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DeviceLogs::factory(10)->recycle(ModelsDevices::factory(5)->recycle(User::factory(3)->create(['role' => 0]))->create())->create();
    }
}
