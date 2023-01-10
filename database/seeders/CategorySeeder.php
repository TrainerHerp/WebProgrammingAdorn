<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            'name' => "Art",
            'image' => "image/category/art.png",
        ]);

        DB::table('category')->insert([
            'name' => "Card",
            'image' => "image/category/card.png",
        ]);

        DB::table('category')->insert([
            'name' => "Music",
            'image' => "image/category/music.png",
        ]);

        DB::table('category')->insert([
            'name' => "Photography",
            'image' => "image/category/photography.png",
        ]);

        DB::table('category')->insert([
            'name' => "Virtual World",
            'image' => "image/category/virtualworld.png",
        ]);

        DB::table('category')->insert([
            'name' => "Sport",
            'image' => "image/category/sport.png",
        ]);
    }
}
