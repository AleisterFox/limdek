<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\PetCategory;
use App\Models\Category;
use App\Models\LadingPageConfig;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Admin',
                'password' => 'testroot',
            ]
        );

        Category::firstOrCreate(['name' => 'Categoria']);

        LadingPageConfig::create();
    }
}
