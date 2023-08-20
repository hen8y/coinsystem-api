<?php

namespace Database\Seeders;

use App\Models\History;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)
                ->has(History::factory(5))
                ->create();
    }
}
