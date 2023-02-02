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
            'name' => 'Literatuur',
            'description' => 'dit zijn Literatuur boeken',
            'image' => '',
        ]);
        DB::table('categories')->insert([
            'name' => 'Romans',
            'description' => 'dit zijn Romans boeken',
            'image' => '',
        ]);
        DB::table('categories')->insert([
            'name' => 'Thrillers',
            'description' => 'dit zijn Thrillers boeken',
            'image' => '',
        ]);
        DB::table('categories')->insert([
            'name' => 'Kinderboeken',
            'description' => 'dit zijn Kinderboeken boeken',
            'image' => '',
        ]);
        DB::table('categories')->insert([
            'name' => 'Young adult',
            'description' => 'dit zijn Young adult boeken',
            'image' => '',
        ]);
        DB::table('categories')->insert([
            'name' => 'Fantasy',
            'description' => 'dit zijn fantasy boeken',
            'image' => '',
        ]);
        DB::table('categories')->insert([
            'name' => 'Geschiedenis & politiek',
            'description' => 'dit zijn Geschiedenis & politiek boeken',
            'image' => '',
        ]);
        DB::table('categories')->insert([
            'name' => 'Sportboeken',
            'description' => 'dit zijn Sportboeken boeken',
            'image' => '',
        ]);
        DB::table('categories')->insert([
            'name' => 'Kunst & cultuur',
            'description' => 'dit zijn Kunst & cultuur boeken',
            'image' => '',
        ]);
        DB::table('categories')->insert([
            'name' => 'Luisterboeken',
            'description' => 'dit zijn Luisterboeken boeken',
            'image' => '',
        ]);
        DB::table('categories')->insert([
            'name' => 'Managementboeken',
            'description' => 'dit zijn Managementboeken boeken',
            'image' => '',
        ]);
        DB::table('categories')->insert([
            'name' => 'School & studieboeken',
            'description' => 'dit zijn School & studieboeken boeken',
            'image' => '',
        ]);
        DB::table('categories')->insert([
            'name' => 'Computerboeken',
            'description' => 'dit zijn Computerboeken boeken',
            'image' => '',
        ]);
        DB::table('categories')->insert([
            'name' => 'Hobbyboeken',
            'description' => 'dit zijn Hobbyboeken boeken',
            'image' => '',
        ]);
        DB::table('categories')->insert([
            'name' => 'Religie',
            'description' => 'dit zijn Religie boeken',
            'image' => '',
        ]);
        DB::table('categories')->insert([
            'name' => 'Spiritualiteit',
            'description' => 'dit zijn Spiritualiteit boeken',
            'image' => '',
        ]);
        DB::table('categories')->insert([
            'name' => 'Cadeauboeken',
            'description' => 'dit zijn Cadeauboeken boeken',
            'image' => '',
        ]);
        DB::table('categories')->insert([
            'name' => 'Kookboeken',
            'description' => 'dit zijn Kookboeken boeken',
            'image' => '',
        ]);
        DB::table('categories')->insert([
            'name' => 'Bestsellers',
            'description' => 'dit zijn bestsellers boeken',
            'image' => '',
        ]);
    }
}
