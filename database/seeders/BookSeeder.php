<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Facades\DB;
use Faker\Provider\en_US\Text;

class BookSeeder extends Seeder
{

    //FAKER to create test data for the webshop
    public function run()
    {
        DB::table('books')->truncate();

        $faker = Factory::create();

        $books = [];


        for ($i = 1; $i <= 400; $i++) {

            $books[] = [
                'name'         => $faker->sentence(rand(1, 2)),
                'author'        => $faker->name(),
                'description'   => $faker->realTextBetween($minNbChars = 160, $maxNbChars = 400, $indexSize = 4),
                'image'          => url('https://i.ibb.co/n7w30Tx/Magical-Book.png'),
                'price'         => rand(5, 30),
                'category_id'   => rand(1, 19),

            ];
        }
        DB::table('books')->insert($books);
    }
}
