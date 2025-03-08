<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Llamar a los seeders de usuarios y kits de robótica
        $this->call([
            UsersTableSeeder::class,
            RoboticsKitsTableSeeder::class,
        ]);

        // Crear 100 cursos aleatorios con la Factory
        Course::factory(100)->create();
    }
}

