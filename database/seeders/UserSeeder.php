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
        
        /*User::factory()->count(5)->create()->each(function ($profesor) {
            $profesor->assignRole("profesor");
        });
        User::factory()->count(5)->create()->each(function ($alumno) {
            $alumno->assignRole("alumno");
        });
// Se ha creado el admin de esta forma asi sabemos las credenciales de acceso
        $admin = User::create([
            'name' => 'admin',
            'apellido' => 'admin',
            'password' => bcrypt('12345678'),
            'fecha_nacimiento' => '2000-01-01',
            'email' => 'a@a.com'
        ]);
        $admin->assignRole("admin"); */

        User::factory()
            ->count(5)
            ->create([
                'password' => bcrypt('12345678'),
            ])
            ->each(function ($profesor) {
                $profesor->assignRole('profesor');
            });


        User::factory()
            ->count(5)
            ->create([
                'password' => bcrypt('12345678'),
            ])
            ->each(function ($alumno) {
                $alumno->assignRole('alumno');
            });


        $admin = User::create([
            'name' => 'admin',
            'apellido' => 'admin',
            'password' => bcrypt('12345678'),
            'fecha_nacimiento' => '2000-01-01',
            'email' => 'a@a.com',
        ]);

        $admin->assignRole('admin');

        
    }
}
