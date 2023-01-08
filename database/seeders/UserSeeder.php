<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
           ['username'=>'user1', 'email'=>'user1@gmail.com', 'password'=>bcrypt('user1')],
           ['username'=>'user2', 'email'=>'user2@gmail.com', 'password'=>bcrypt('user2')],
           ['username'=>'user3', 'email'=>'user3@gmail.com', 'password'=>bcrypt('user3')],
        ]);
    }
}
