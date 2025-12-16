<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        User::factory()->count(10)->create()->each(function ($user) {
            $user->assignRole("profesor");
        });
        User::factory()->count(50)->create()->each(function ($user) {
            $user->assignRole("alumno");
        });
        
        $user = User::create([
            'name' => 'admin',
            'apellido' => 'admin',
            'password' => bcrypt('12345678'),
            'fecha_nacimiento' => '2000-01-01',
            'email' => 'a@a.com'
        ]);
        $user->assignRole("admin");
    }
}
