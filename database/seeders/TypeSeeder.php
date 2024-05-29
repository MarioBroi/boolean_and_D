<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataArray = file_get_contents(config_path('types.json'));

        $types = json_decode($dataArray, true);

        foreach($types as $type){
            $newType = new Type();
            $newType->name = $type['name'];
            $newType->desc = $type['desc'];
            $newType->save();
            
        }
    }
}
