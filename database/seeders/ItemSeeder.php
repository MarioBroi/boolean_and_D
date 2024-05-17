<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = config('items.items');

        foreach ($products as $product) {
            $item = new Item();
            $item->name = $product['name'];
            $item->slug = $product['slug'];
            $item->type = $product['type'];
            $item->category = $product['category'];
            $item->weight = $product['weight'];
            $item->cost = $product['cost'];
            $item->damage_dice = $product['damage_dice'];
            $item->save();
        }
    }
}
