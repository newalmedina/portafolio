<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'Usuario de ejemplo',
            'email' => 'ing.newal.medina@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'description' => "Software developer",
            'facebook_url' => "#",
            'twitter_url' => "#",
            'dribbble_url' => "#",
            'linkedin_url' => "#",
            'phone' => "+34 652 36 25 36",
            'address' => "Madrid España",
            'birthdate' => "1987-09-24",
            'bio' => 'Soy Desarrollador de Software desde hace mas de 15 años. Me encanta la tecnología y todo el mundo que la rodea.<br>
            Además de mi vocación como desarrollador, tambien me encanta la creación de contenido, por lo que tengo un canal de Youtube llamado: El Rincón de Isma.'
        ]);

        $this->call([
            BlogSeeder::class,
            ClientSeeder::class,
            EducationSeeder::class,
            ExperienceSeeder::class,
            JobSeeder::class,
            KnowledgeSeeder::class,
            ServiceSeeder::class,
            WorkingSeeder::class,


        ]);
    }
}
