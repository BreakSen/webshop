<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use public\images;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //for now this is good to use, beter way is factories
        DB::table('categories')->insert([
            'name' => 'Romans',
            'description' => 'dit zijn romans boeken',
            'image' => '',
        ]);
        DB::table('categories')->insert([
            'name' => 'Thrillers',
            'description' => 'dit zijn thrillers boeken',
            'image' => '',
        ]);
        DB::table('categories')->insert([
            'name' => 'Kinderboeken',
            'description' => 'dit zijn kinderboeken boeken',
            'image' => '',
        ]);
        DB::table('categories')->insert([
            'name' => 'Romansliteratuur',
            'description' => 'dit zijn romansliteratuur boeken',
            'image' => '',
        ]);
        DB::table('categories')->insert([
            'name' => 'Kookboeken',
            'description' => 'dit zijn kookboeken boeken',
            'image' => '',
        ]);
        DB::table('categories')->insert([
            'name' => 'Fantasy',
            'description' => 'dit zijn fantasy boeken',
            'image' => '',
        ]);
        DB::table('categories')->insert([
            'name' => 'Bestsellers',
            'description' => 'dit zijn bestsellers boeken',
            'image' => '',
        ]);
    }
}
