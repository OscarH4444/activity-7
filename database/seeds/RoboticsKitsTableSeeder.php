<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoboticsKitsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('robotics_kits')->insert([
            [
                'name' => 'Lego Mindstorms EV3',
                'description' => 'Kit de robótica avanzado para estudiantes.',
            ],
            [
                'name' => 'Arduino Starter Kit',
                'description' => 'Kit básico para aprender electrónica y programación.',
            ],
            [
                'name' => 'Raspberry Pi Robotics Kit',
                'description' => 'Kit para desarrollar proyectos avanzados de robótica con Raspberry Pi.',
            ],
        ]);
    }
}

