<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'title' => 'Disque-monde',
                'author' => 'Pratchett',
                'genre' => 'Fantasy',
                'publication_year' => 2000,
                'synopsis' => 'Un monde étrange'
            ],
            [
                'title' => 'Seigeur des anneaux',
                'author' => 'Tolkien',
                'genre' => 'Fantasy',
                'publication_year' => 1995,
                'synopsis' => 'Un anneau'
            ],
            [
                'title' => 'Harry Potter',
                'author' => 'JK Rowling',
                'genre' => 'Thriller',
                'publication_year' => 2010,
                'synopsis' => 'Oh la belle cicatrice !'
            ],
        ]);
    }
}
