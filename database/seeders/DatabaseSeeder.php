<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@doe.com',
            'password' => bcrypt('password')
        ]);

        User::factory()->create([
            'name' => 'Lemon Squeez',
            'email' => 'lemon@squeez.com',
            'password' => bcrypt('password')
        ]);

        User::factory()->create([
            'name' => 'Manago Sizzle',
            'email' => 'mango@sizzle.com',
            'password' => bcrypt('password')
        ]);

        $this->call([
            RolesAndPermissionsSeeder::class,
        ]);
    }
}
