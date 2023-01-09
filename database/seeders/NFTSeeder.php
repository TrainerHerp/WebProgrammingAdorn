<?php

namespace Database\Seeders;

use App\Models\NFT;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NFTSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NFT::insert([
            [
                'name' => 'nft1',
                'image' => 'https://picsum.photos/200/300',
                'price' => 10000,

                'owner_id' => 1,
                'creator_id' => 1,
                'category_id' => 1
            ],
            [
                'name' => 'nft2',
                'image' => 'https://picsum.photos/200/300',
                'price' => 12000,

                'owner_id' => 2,
                'creator_id' => 2,
                'category_id' => 2
            ],
            [
                'name' => 'nft3',
                'image' => 'https://picsum.photos/200/300',
                'price' => 15000,

                'owner_id' => 3,
                'creator_id' => 3,
                'category_id' => 3
            ]
        ]);
    }
}
