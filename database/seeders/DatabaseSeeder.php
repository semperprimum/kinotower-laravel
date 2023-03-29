<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Gender;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Gender::create([
            'id' => 1,
            'name' => 'Женский'
        ]);

        Gender::create([
            'id' => 2,
            'name' => 'Мужской'
        ]);

         \App\Models\User::factory(10)->create();

         \App\Models\Admin::factory()->create([
             'username' => 'Super Admin',
             'email' => 'test@example.com',
             'password' => bcrypt("123456"),
         ]);


    }
}
