<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('books')->delete();
        
        \DB::table('books')->insert(array (
            0 => 
            array (
                'id' => 3,
                'title' => 'Don Quixote',
                'author' => 'Miguel de Cervantes',
                'genre' => 'Horror',
                'price' => 1000,
                'quantity' => 10,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 4,
                'title' => 'Misery',
                'author' => 'Mary Shelley',
                'genre' => 'Horror',
                'price' => 500,
                'quantity' => 20,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 5,
                'title' => 'The Three Musketeers',
                'author' => 'Alexandre Dumas',
                'genre' => 'Historical',
                'price' => 1000,
                'quantity' => 10,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 6,
                'title' => 'A Tale of Two Cities',
                'author' => 'Charles Dickens',
                'genre' => 'Historical',
                'price' => 500,
                'quantity' => 20,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 7,
                'title' => 'Animal Farm',
                'author' => 'George Orwell',
                'genre' => 'Political',
                'price' => 1000,
                'quantity' => 10,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 8,
                'title' => 'The Jungle',
                'author' => 'Upton Sinclair',
                'genre' => 'Political',
                'price' => 500,
                'quantity' => 20,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 9,
                'title' => 'A Passage to India',
                'author' => 'E.M. Forster',
                'genre' => 'Political',
                'price' => 1000,
                'quantity' => 10,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 10,
                'title' => 'The Secret Agent',
                'author' => 'Joseph Conrad',
                'genre' => 'Political',
                'price' => 500,
                'quantity' => 20,
                'status' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}