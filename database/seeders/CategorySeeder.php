<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

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
        //
        DB::table('categories')->insert([
            'name' => 'romans',
            'description' => 'dit zijn romans boeken',
            'image' => '',
        ]);
        DB::table('categories')->insert([
            'name' => 'thrillers',
            'description' => 'dit zijn thrillers boeken',
            'image' => '',
        ]);
        DB::table('categories')->insert([
            'name' => 'kinderboeken',
            'description' => 'dit zijn kinderboeken boeken',
            'image' => '',
        ]);
        DB::table('categories')->insert([
            'name' => 'romansliteratuur',
            'description' => 'dit zijn romansliteratuur boeken',
            'image' => '',
        ]);
        DB::table('categories')->insert([
            'name' => 'kookboeken',
            'description' => 'dit zijn kookboeken boeken',
            'image' => '',
        ]);
        DB::table('categories')->insert([
            'name' => 'fantasy',
            'description' => 'dit zijn fantasy boeken',
            'image' => '',
        ]);
        DB::table('categories')->insert([
            'name' => 'bestsellers',
            'description' => 'dit zijn bestsellers boeken',
            'image' => '',
        ]);
    }
}
