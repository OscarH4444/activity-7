<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Course;
use App\Models\RoboticsKit;

class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3), // Genera un título con 3 palabras
            'cover_image' => $this->faker->imageUrl(640, 480, 'education', true), 
            'content' => $this->faker->paragraph(4), // Genera un contenido de 4 frases
            'robotics_kit_id' => RoboticsKit::inRandomOrder()->first()->id ?? 1, // Obtiene un ID aleatorio de un kit de robótica
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

