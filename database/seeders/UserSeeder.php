<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => "Kelsie",
            'email' => "kelsie.english@gmail.com",
            'password' => bcrypt('Kelsie123'),
            'image' => "image/user/Kelsie.jpg",
            'balance' => 230000,
        ]);

        DB::table('users')->insert([
            'username' => "Stevie",
            'email' => "stevie.silva@gmail.com",
            'password' => bcrypt('Stevie123'),
            'image' => "image/user/Stevie.jpg",
            'balance' => 310000,
        ]);

        DB::table('users')->insert([
            'username' => "Philip",
            'email' => "philip.atkinson@gmail.com",
            'password' => bcrypt('Philip123'),
            'image' => "image/user/Philip.jpg",
            'balance' => 160000,
        ]);

        DB::table('users')->insert([
            'username' => "Kaiden",
            'email' => "kaiden.sloan@gmail.com",
            'password' => bcrypt('Kaiden123'),
            'image' => "image/user/Kaiden.jpg",
            'balance' => 80000,
        ]);

        DB::table('users')->insert([
            'username' => "Marion",
            'email' => "marion.gentry@gmail.com",
            'password' => bcrypt('Marion123'),
            'image' => "image/user/Marion.jpg",
            'balance' => 0,
        ]);

        DB::table('users')->insert([
            'username' => "Lilia",
            'email' => "lilia.smith@gmail.com",
            'password' => bcrypt('Lilia123'),
            'image' => "image/user/Lilia.jpg",
            'balance' => 30000,
        ]);
    }
}
