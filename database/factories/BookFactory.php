<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $titles = [
            'L’Art de programmer',
            'Laravel pour les nuls',
            'Les Secrets du PHP',
            'Développement Web Moderne',
            'Code propre et efficace',
            'Laravel, le retour',
            'Le cas Symfony',
            'Le mystère MVC',
            'Martine apprend Laravel',
            'Symfony contre-attaque'
        ];

        static $index = 0;

        $title = $titles[$index];

        $index = ($index + 1) % count($titles);

        return [
            'title' => $title,
            'user_id' => User::factory(),
        ];
    }
}