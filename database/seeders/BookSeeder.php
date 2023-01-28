<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
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
        DB::table('books')->truncate();

        $faker = Factory::create();

        $books = [];


        for ($i = 1; $i <= 200; $i++)
        {

            $books [] = [
                'name'         => $faker->sentence(rand(1,2)),
                'author'        => $faker->name(),
                'description'   => $faker->paragraphs(rand(5,10), true),
                'image'          => $faker->imageUrl(500, 775, 'books', true),
                'price'         => rand(5,30),
                'category_id'   => rand(1,7),

            ];
        }
        //beter manier:
        //gebruik factroies

        DB::table('books')->insert($books);
    }
    }
