<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Alumno;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        $this::call([
            AlumnoSeeder::class,
            RolesSeeder::class,
        ]);
        
        $user = User::create([
            'name' => 'admin',
            'email' => 'a@a.com',
            'password' => bcrypt('12345678')
        ]);

        $user->assignRole("admin");
    }
}
