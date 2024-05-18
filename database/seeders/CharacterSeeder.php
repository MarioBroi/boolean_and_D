<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Character;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $characters = config('characters.characters');

        foreach ($characters as $character) {
            $char = new Character();
            $char->full_name = $character['full_name'];
            $char->race = $character['race'];
            $char->sex = $character['sex'];
            $char->age = $character['age'];
            $char->alignment = $character['alignment'];
            $char->health_points = $character['health_points'];
            $char->class = $character['class'];
            $char->sub_class = $character['sub_class'];
            $char->level = $character['level'];
            $char->armour_class = $character['armour_class'];
            $char->cd = $character['cd'];
            $char->backstory = $character['backstory'];
            $char->save();
        }
    }
}
