<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Uuid;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'uid' => Uuid::uuid4()->toString(),
            'name' => 'Kareem Maleek',
            'username' => 'kareemmaleek14',
            'email' => 'musafeerbinmalik@gmail.com',
            'password' => Hash::make('@Nevada14'),
            'role' => 1
        ]);
    }
}
