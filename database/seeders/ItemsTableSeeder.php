<?php

namespace Database\Seeders;

use App\Models\Items;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = config('items.items');

        foreach ($items as $item) {
            $item = new Items();
            $item->name = $item['name'];
            $item->slug = $item['slug'];
            $item->type = $item['type'];
            $item->category = $item['category'];
            $item->weight = $item['weight'];
            $item->cost = $item['cost'];
            $item->damage_dice = $item['damage_dice'];
            $item->save();
        }
    }
}
