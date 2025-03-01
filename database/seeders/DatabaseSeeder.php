<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Genre;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $genres = [
            'Heroïque-Fantasy',
            'Policier',
            'Mystère',
            'Humoristique',
            'Science-Fiction'
        ];

        foreach($genres as $genreName) {
            Genre::create(['name' => $genreName]);
        }

        Book::factory(10)->create();
    }
}
