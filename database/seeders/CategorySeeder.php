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
            'image' => "storage/img/category/index-category-art.png",
        ]);

        DB::table('category')->insert([
            'name' => "Card",
            'image' => "storage/img/category/index-category-card.png",
        ]);

        DB::table('category')->insert([
            'name' => "Music",
            'image' => "storage/img/category/index-category-music.png",
        ]);

        DB::table('category')->insert([
            'name' => "Photography",
            'image' => "storage/img/category/index-category-photography1.png",
        ]);

        DB::table('category')->insert([
            'name' => "Virtual World",
            'image' => "storage/img/category/index-category-virtual world.png",
        ]);

        DB::table('category')->insert([
            'name' => "Sport",
            'image' => "storage/img/category/index-cateogry-sport1.png",
        ]);
    }
}
