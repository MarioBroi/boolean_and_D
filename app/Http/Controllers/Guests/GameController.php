<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\GameModel;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('guest.welcome');
    }

    public function decodeJson()
    {

        $items = '[
            {
              "name": "Club",
              "slug": "club",
              "type": "Weapons",
              "category": "Simple Melee Weapons",
              "weight": "2 lb.",
              "cost": "1 sp",
              "damage_dice": "1d4"
            },
            {
              "name": "Dagger",
              "slug": "dagger",
              "type": "Weapons",
              "category": "Simple Melee Weapons",
              "weight": "1 lb.",
              "cost": "2 gp",
              "damage_dice": "1d4"
            },
            {
              "name": "Greatclub",
              "slug": "greatclub",
              "type": "Weapons",
              "category": "Simple Melee Weapons",
              "weight": "10 lb.",
              "cost": "2 sp",
              "damage_dice": "1d8"
            },
            {
              "name": "Handaxe",
              "slug": "handaxe",
              "type": "Weapons",
              "category": "Simple Melee Weapons",
              "weight": "2 lb.",
              "cost": "5 gp",
              "damage_dice": "1d6"
            },
            {
              "name": "Javelin",
              "slug": "javelin",
              "type": "Weapons",
              "category": "Simple Melee Weapons",
              "weight": "2 lb.",
              "cost": "5 sp",
              "damage_dice": "1d6"
            },
            {
              "name": "Light hammer",
              "slug": "light-hammer",
              "type": "Weapons",
              "category": "Simple Melee Weapons",
              "weight": "2 lb.",
              "cost": "2 gp",
              "damage_dice": "1d4"
            },
            {
              "name": "Mace",
              "slug": "mace",
              "type": "Weapons",
              "category": "Simple Melee Weapons",
              "weight": "4 lb.",
              "cost": "5 gp",
              "damage_dice": "1d6"
            },
            {
              "name": "Quarterstaff",
              "slug": "quarterstaff",
              "type": "Weapons",
              "category": "Simple Melee Weapons",
              "weight": "4 lb.",
              "cost": "2 sp",
              "damage_dice": "1d6"
            },
            {
              "name": "Sickle",
              "slug": "sickle",
              "type": "Weapons",
              "category": "Simple Melee Weapons",
              "weight": "2 lb.",
              "cost": "1 gp",
              "damage_dice": "1d4"
            },
            {
              "name": "Spear",
              "slug": "spear",
              "type": "Weapons",
              "category": "Simple Melee Weapons",
              "weight": "3 lb.",
              "cost": "1 gp",
              "damage_dice": "1d6"
            },
            {
              "name": "Crossbow, light",
              "slug": "crossbow-light",
              "type": "Weapons",
              "category": "Simple Ranged Weapons",
              "weight": "5 lb.",
              "cost": "25 gp",
              "damage_dice": "1d8"
            },
            {
              "name": "Dart",
              "slug": "dart",
              "type": "Weapons",
              "category": "Simple Ranged Weapons",
              "weight": "1/4 lb.",
              "cost": "5 cp",
              "damage_dice": "1d4"
            },
            {
              "name": "Shortbow",
              "slug": "shortbow",
              "type": "Weapons",
              "category": "Simple Ranged Weapons",
              "weight": "2 lb.",
              "cost": "25 gp",
              "damage_dice": "1d6"
            },
            {
              "name": "Sling",
              "slug": "sling",
              "type": "Weapons",
              "category": "Simple Ranged Weapons",
              "weight": "0 lb.",
              "cost": "1 sp",
              "damage_dice": "1d4"
            },
            {
              "name": "Battleaxe",
              "slug": "battleaxe",
              "type": "Weapons",
              "category": "Martial Melee Weapons",
              "weight": "4 lb.",
              "cost": "10 gp",
              "damage_dice": "1d8"
            },
            {
              "name": "Flail",
              "slug": "flail",
              "type": "Weapons",
              "category": "Martial Melee Weapons",
              "weight": "2 lb.",
              "cost": "10 gp",
              "damage_dice": "1d8"
            },
            {
              "name": "Glaive",
              "slug": "glaive",
              "type": "Weapons",
              "category": "Martial Melee Weapons",
              "weight": "6 lb.",
              "cost": "20 gp",
              "damage_dice": "1d10"
            },
            {
              "name": "Greataxe",
              "slug": "greataxe",
              "type": "Weapons",
              "category": "Martial Melee Weapons",
              "weight": "7 lb.",
              "cost": "30 gp",
              "damage_dice": "1d12"
            },
            {
              "name": "Greatsword",
              "slug": "greatsword",
              "type": "Weapons",
              "category": "Martial Melee Weapons",
              "weight": "6 lb.",
              "cost": "50 gp",
              "damage_dice": "2d6"
            },
            {
              "name": "Halberd",
              "slug": "halberd",
              "type": "Weapons",
              "category": "Martial Melee Weapons",
              "weight": "6 lb.",
              "cost": "20 gp",
              "damage_dice": "1d10"
            },
            {
              "name": "Lance",
              "slug": "lance",
              "type": "Weapons",
              "category": "Martial Melee Weapons",
              "weight": "6 lb.",
              "cost": "10 gp",
              "damage_dice": "1d12"
            },
            {
              "name": "Longsword",
              "slug": "longsword",
              "type": "Weapons",
              "category": "Martial Melee Weapons",
              "weight": "3 lb.",
              "cost": "15 gp",
              "damage_dice": "1d8"
            },
            {
              "name": "Maul",
              "slug": "maul",
              "type": "Weapons",
              "category": "Martial Melee Weapons",
              "weight": "10 lb.",
              "cost": "10 gp",
              "damage_dice": "2d6"
            },
            {
              "name": "Morningstar",
              "slug": "morningstar",
              "type": "Weapons",
              "category": "Martial Melee Weapons",
              "weight": "4 lb.",
              "cost": "15 gp",
              "damage_dice": "1d8"
            },
            {
              "name": "Pike",
              "slug": "pike",
              "type": "Weapons",
              "category": "Martial Melee Weapons",
              "weight": "18 lb.",
              "cost": "5 gp",
              "damage_dice": "1d10"
            },
            {
              "name": "Rapier",
              "slug": "rapier",
              "type": "Weapons",
              "category": "Martial Melee Weapons",
              "weight": "2 lb.",
              "cost": "25 gp",
              "damage_dice": "1d8"
            },
            {
              "name": "Scimitar",
              "slug": "scimitar",
              "type": "Weapons",
              "category": "Martial Melee Weapons",
              "weight": "3 lb.",
              "cost": "25 gp",
              "damage_dice": "1d6"
            },
            {
              "name": "Shortsword",
              "slug": "shortsword",
              "type": "Weapons",
              "category": "Martial Melee Weapons",
              "weight": "2 lb.",
              "cost": "10 gp",
              "damage_dice": "1d6"
            },
            {
              "name": "Trident",
              "slug": "trident",
              "type": "Weapons",
              "category": "Martial Melee Weapons",
              "weight": "4 lb.",
              "cost": "5 gp",
              "damage_dice": "1d6"
            },
            {
              "name": "War pick",
              "slug": "war-pick",
              "type": "Weapons",
              "category": "Martial Melee Weapons",
              "weight": "2 lb.",
              "cost": "5 gp",
              "damage_dice": "1d8"
            },
            {
              "name": "Warhammer",
              "slug": "warhammer",
              "type": "Weapons",
              "category": "Martial Melee Weapons",
              "weight": "2 lb.",
              "cost": "15 gp",
              "damage_dice": "1d8"
            },
            {
              "name": "Whip",
              "slug": "whip",
              "type": "Weapons",
              "category": "Martial Melee Weapons",
              "weight": "3 lb.",
              "cost": "2 gp",
              "damage_dice": "1d4"
            },
            {
              "name": "Blowgun",
              "slug": "blowgun",
              "type": "Weapons",
              "category": "Martial Ranged Weapons",
              "weight": "1 lb.",
              "cost": "10 gp",
              "damage_dice": "1"
            },
            {
              "name": "Crossbow, hand",
              "slug": "crossbow-hand",
              "type": "Weapons",
              "category": "Martial Ranged Weapons",
              "weight": "3 lb.",
              "cost": "75 gp",
              "damage_dice": "1d6"
            },
            {
              "name": "Crossbow, heavy",
              "slug": "crossbow-heavy",
              "type": "Weapons",
              "category": "Martial Ranged Weapons",
              "weight": "18 lb.",
              "cost": "50 gp",
              "damage_dice": "1d10"
            },
            {
              "name": "Longbow",
              "slug": "longbow",
              "type": "Weapons",
              "category": "Martial Ranged Weapons",
              "weight": "2 lb.",
              "cost": "50 gp",
              "damage_dice": "1d8"
            },
            {
              "name": "Net",
              "slug": "net",
              "type": "Weapons",
              "category": "Martial Ranged Weapons",
              "weight": "3 lb.",
              "cost": "1 gp",
              "damage_dice": "0"
            }
          ]
          ';


        $itemsData = json_decode($items, true);


        return view('guest.data', compact('itemsData'));

    }

    /**
     * Display the specified resource.
     */
    public function show(GameModel $gameModel)
    {
        /* TODO: Insert a View */
    }
}
