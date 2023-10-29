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

        $nerdyglazen = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin@gmail.com',
            'role' => '1'
        ]);

        $crafty = User::create([
            'name' => 'olla',
            'email' => 'olla@gmail.com',
            'password' => 'olla@gmail.com',
            'role' => '2'
        ]);

        Product::create([
            'category_id' => $moederdag->id,
            'user_id' => $crafty->id,
            'title' => 'Best Mom Ever - Gegraveerd glas',
            'slug' => 'bestmumever_engravedglass',
            'excerpt' => 'Verras je moeder met een lief gegraveerd glas en laat zien dat je van haar houdt!',
            'body' => 'Personaliseer je glas volledig naar je wensen! Laat er zonder extra kosten een naam/kleine tekst op graveren met een lettertype naar keuze (als er niks ingevuld wordt, gebruiken wij Script MT Bold). Deze tekst komt bij wijn-, thee-, champagne- en waterglazen aan de andere kant van het glas. Bij longdrink, ronde longdrink, bierglas, bierpull komt de tekst onder het patroon.',
            'extra' => 'Ook kies je zelf op wat voor glas je wilt dat het patroon komt!',
            'materials' => 'Glas',
            'price' => '12',
            'URL' => 'www.nerdyglazen.com',
            'image'=> 'image/qw2V0YLWdSM5RVS0Td3XbWEqoMbuQdD6f5NbCGeC.jpg'

        ]);

        Product::create([
            'category_id' => $vaderdag->id,
            'user_id' => $crafty->id,
            'title' => 'Best Dad Ever - Gegraveerd glas',
            'slug' => 'bestdadever_engravedglass',
            'excerpt' => 'Verras je vader met een lief gegraveerd glas en laat zien dat je van hem houdt!',
            'body' => 'Personaliseer je glas volledig naar je wensen! Laat er zonder extra kosten een naam/kleine tekst op graveren met een lettertype naar keuze (als er niks ingevuld wordt, gebruiken wij Script MT Bold). Deze tekst komt bij wijn-, thee-, champagne- en waterglazen aan de andere kant van het glas. Bij longdrink, ronde longdrink, bierglas, bierpull komt de tekst onder het patroon.',
            'extra' => 'Ook kies je zelf op wat voor glas je wilt dat het patroon komt!',
            'materials' => 'Glas',
            'price' => '14',
            'URL' => 'www.nerdyglazen.com',
             'image'=> 'image/JXAF7hAzUytRq2hinNne75o9PmEiaOynUSHtpvWu.jpg'
        ]);

        Product::create([
            'category_id' => $trouwdag->id,
            'user_id' => $nerdyglazen->id,
            'title' => '20 jaar getrouwd (2 stuks) - Gegraveerd glas',
            'slug' => '20jaargetrouwd_gegraveerdglas',
            'excerpt' => 'Verras een getrouwd stel op hun trouwdag!',
            'body' => 'Personaliseer je glas volledig naar je wensen! Laat er zonder extra kosten een naam/kleine tekst op graveren met een lettertype naar keuze (als er niks ingevuld wordt, gebruiken wij Script MT Bold). Deze tekst komt bij wijn-, thee-, champagne- en waterglazen aan de andere kant van het glas. Bij longdrink, ronde longdrink, bierglas, bierpull komt de tekst onder het patroon.',
            'extra' => 'Ook kies je zelf op wat voor glas je wilt dat het patroon komt!',
            'materials' => 'Glas',
            'price' => '25',
            'URL' => 'www.nerdyglazen.com',
             'image'=> 'image/9jWncYFFGCqu66vOd5IrKlPp1yVQxQQdBq7OB1yW.jpg'
        ]);

    }
}
