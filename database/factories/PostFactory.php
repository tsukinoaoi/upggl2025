<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'titulo' => $this->faker->sentence,
            'contenido' => $this->faker->paragraphs(3, true),
            'estado' => $this->faker->randomElement(['publicado', 'borrado', 'inactivo']),
            'url_imagen' => $this->faker->imageUrl(800, 600, 'nature', true, 'Post'),
            'fecha_publicacion' => $this->faker->optional()->date(),
        ];
    }
}
