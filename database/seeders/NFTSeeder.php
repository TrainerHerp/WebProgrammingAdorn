<?php

namespace Database\Seeders;

use App\Models\NFT;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NFTSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nft')->insert([
            'name' => "Bored Ape Yacht",
            'description' => "NFT Bored Ape Yacht Club",
            'image' => "image/NFT/1 - NFT Bored Ape Yacht Club-20211214165446.webp",
            'price' => 100000,
            'owner_id' => 1,
            'creator_id' => 1,
            'category_id' => 1,
        ]);

        DB::table('nft')->insert([
            'name' => "Mutant Ape Yacht",
            'description' => "Mutant Ape Yacht",
            'image' => "image/NFT/2 - Mutant Ape Yacht.png",
            'price' => 110000,
            'owner_id' => 1,
            'creator_id' => 1,
            'category_id' => 1,
        ]);

        DB::table('nft')->insert([
            'name' => "Kaizoku Mechanics",
            'description' => "Kaizoku Mechanics",
            'image' => "image/NFT/3 - Kaizoku Mechanics.jpg",
            'price' => 120000,
            'owner_id' => 2,
            'creator_id' => 2,
            'category_id' => 2,
        ]);

        DB::table('nft')->insert([
            'name' => "NFT Cryptopunk",
            'description' => "NFT Cryptopunk Collection",
            'image' => "image/NFT/4 - nft-from-cryptopunk-collection-was-mistakenly-sold-for-less-than-0.01.jpg",
            'price' => 130000,
            'owner_id' => 2,
            'creator_id' => 2,
            'category_id' => 2,
        ]);

        DB::table('nft')->insert([
            'name' => "Muri",
            'description' => "Muri by Haus",
            'image' => "image/NFT/5 - Muri by Haus NFT.webp",
            'price' => 100000,
            'owner_id' => 3,
            'creator_id' => 3,
            'category_id' => 3,
        ]);

        DB::table('nft')->insert([
            'name' => "Ragnarok Meta NFT",
            'description' => "Ragnarok Meta NFT",
            'image' => "image/NFT/6 - Ragnarok Meta NFT.png",
            'price' => 110000,
            'owner_id' => 3,
            'creator_id' => 3,
            'category_id' => 3,
        ]);

        DB::table('nft')->insert([
            'name' => "OnChain Monkey",
            'description' => "OnChain Monkey",
            'image' => "image/NFT/7 - OnChain Monkey NFT.png",
            'price' => 120000,
            'owner_id' => 4,
            'creator_id' => 4,
            'category_id' => 4,
        ]);

        DB::table('nft')->insert([
            'name' => "MoonBird NFT",
            'description' => "MoonBird NFT",
            'image' => "image/NFT/8 - MoonBird NFT.webp",
            'price' => 130000,
            'owner_id' => 4,
            'creator_id' => 4,
            'category_id' => 4,
        ]);

        DB::table('nft')->insert([
            'name' => "Gutter Cat Gang",
            'description' => "Gutter Cat Gang NFT",
            'image' => "image/NFT/9 - Gutter Cat Gang.png",
            'price' => 100000,
            'owner_id' => 5,
            'creator_id' => 5,
            'category_id' => 5,
        ]);

        DB::table('nft')->insert([
            'name' => "DeadFellaz NFT",
            'description' => "DeadFellaz NFT",
            'image' => "image/NFT/10 - DeadFellaz NFT.webp",
            'price' => 110000,
            'owner_id' => 5,
            'creator_id' => 5,
            'category_id' => 5,
        ]);

        DB::table('nft')->insert([
            'name' => "Nyan Cat NFT",
            'description' => "Nyan Cat NFT",
            'image' => "image/NFT/11 - Nyan Cat.jpg",
            'price' => 120000,
            'owner_id' => 6,
            'creator_id' => 6,
            'category_id' => 6,
        ]);

        DB::table('nft')->insert([
            'name' => "Panda NFT",
            'description' => "Almost Famous Panda NFT",
            'image' => "image/NFT/12 - Almost Famous Panda NFT.jpg",
            'price' => 130000,
            'owner_id' => 6,
            'creator_id' => 6,
            'category_id' => 6,
        ]);
    }
}
