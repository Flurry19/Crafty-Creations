<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Product;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Category::truncate();
        Shop::truncate();

        $user =  \App\Models\User::factory(20)->create();

   $vaderdag = Category::create([
    'name' => 'Vaderdag',
        'slug' => 'vaderdag'
    ]);

        $moederdag = Category::create([
            'name' => 'Moederdag',
            'slug' => 'moederdag'
        ]);

        $trouwdag = Category::create([
            'name' => 'Trouwdag',
            'slug' => 'trouwdag'
        ]);

        $nerdyglazen = Shop::create([
            'name' => 'Nerdy Glazen',
            'slug' => 'nerdy_glazen',
            'user_id' => $user->first()->id
        ]);

        $crafty = Shop::create([
            'name' => 'Crafty',
            'slug' => 'crafty',
            'user_id' => $user->last()->id
        ]);

        Product::create([
            'category_id' => $moederdag->id,
            'shop_id' => $crafty->id,
            'title' => 'Engraved',
            'slug' => 'engraved',
            'excerpt' => 'OLALLALALA',
            'body' => 'qergqergqergreggrregqrgeqrgreqgregeqrgqrgeqrgeqgregqre',
            'price' => '12',

        ]);

        Product::create([
            'category_id' => $vaderdag->id,
            'shop_id' => $crafty->id,
            'title' => 'Handmade',
            'slug' => 'handmade',
            'excerpt' => 'OLALLALALA',
            'body' => 'qergqergqergreggrregqrgeqrgreqgregeqrgqrgeqrgeqgregqre',
            'price' => '100',
        ]);

        Product::create([
            'category_id' => $trouwdag->id,
            'shop_id' => $nerdyglazen->id,
            'title' => 'Soap',
            'slug' => 'soap',
            'excerpt' => 'OLALLALALA',
            'body' => 'qergqergqergreggrregqrgeqrgreqgregeqrgqrgeqrgeqgregqre',
            'price' => '8',
        ]);

    }
}
