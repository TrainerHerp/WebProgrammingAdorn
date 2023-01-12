<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
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
            'fullname' => "Kelsie English",
            'username' => "Kelsie",
            'email' => "kelsie.english@gmail.com",
            'password' => bcrypt('Kelsie123'),
            'image' => "image/user/Kelsie.jpg",
            'balance' => 230000,
            'bio' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus accusantium magnam consequuntur aliquid atque obcaecati libero, et assumenda neque, id debitis magni veritatis ipsum deleniti dolorum mollitia repudiandae unde earum laudantium error.",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'fullname' => "Stevie Silva",
            'username' => "Stevie",
            'email' => "stevie.silva@gmail.com",
            'password' => bcrypt('Stevie123'),
            'image' => "image/user/Stevie.jpg",
            'balance' => 310000,
            'bio' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus accusantium magnam consequuntur aliquid atque obcaecati libero, et assumenda neque, id debitis magni veritatis ipsum deleniti dolorum mollitia repudiandae unde earum laudantium error.",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'fullname' => "Philip Atkinson",
            'username' => "Philip",
            'email' => "philip.atkinson@gmail.com",
            'password' => bcrypt('Philip123'),
            'image' => "image/user/Philip.jpg",
            'balance' => 160000,
            'bio' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus accusantium magnam consequuntur aliquid atque obcaecati libero, et assumenda neque, id debitis magni veritatis ipsum deleniti dolorum mollitia repudiandae unde earum laudantium error.",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'fullname' => "Kaiden Sloan",
            'username' => "Kaiden",
            'email' => "kaiden.sloan@gmail.com",
            'password' => bcrypt('Kaiden123'),
            'image' => "image/user/Kaiden.jpg",
            'balance' => 80000,
            'bio' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus accusantium magnam consequuntur aliquid atque obcaecati libero, et assumenda neque, id debitis magni veritatis ipsum deleniti dolorum mollitia repudiandae unde earum laudantium error.",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'fullname' => "Marion Gentry",
            'username' => "Marion",
            'email' => "marion.gentry@gmail.com",
            'password' => bcrypt('Marion123'),
            'image' => "image/user/Marion.jpg",
            'balance' => 0,
            'bio' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus accusantium magnam consequuntur aliquid atque obcaecati libero, et assumenda neque, id debitis magni veritatis ipsum deleniti dolorum mollitia repudiandae unde earum laudantium error.",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'fullname' => "Lilia Smith",
            'username' => "Lilia",
            'email' => "lilia.smith@gmail.com",
            'password' => bcrypt('Lilia123'),
            'image' => "image/user/Lilia.jpg",
            'balance' => 30000,
            'bio' => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus accusantium magnam consequuntur aliquid atque obcaecati libero, et assumenda neque, id debitis magni veritatis ipsum deleniti dolorum mollitia repudiandae unde earum laudantium error.",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
