<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    //public function run(): void
   // {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
   // }
   public function run(): void
    {
    $faker = Faker::create();
    

    foreach(range(1, 200) as $index){
      DB::table('people')->insert([
            'name' => $faker->firstName,
            'surname' => $faker->lastName,
            'phonenumber' => $faker->phoneNumber,
            'street' => $faker->streetName,
            'city' => $faker->city
      ]);
    }

    }
}