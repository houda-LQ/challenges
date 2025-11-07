<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
<<<<<<< HEAD
 
       public function run(): void
{
    \App\Models\Service::factory(10)->create()->each(function ($service) {
        \App\Models\Booking::factory(3)->create([
            'service_id' => $service->id,
        ]);
    });
}


=======
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
>>>>>>> 9209f5f0e4b6c8bd491b14f6d5c1bef6c92f317c
}
