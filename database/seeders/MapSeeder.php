<?php

namespace Database\Seeders;

use App\Models\Maps;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Maps::insert(
            [
                [
                    'map_name' => 'Fracture',
                    'map_file' => 'fracture.png',
                ],
                [
                    'map_name' => 'Haven',
                    'map_file' => 'haven.png',
                ],
                [
                    'map_name' => 'Icebox',
                    'map_file' => 'icebox.png',
                ],
                [
                    'map_name' => 'Split',
                    'map_file' => 'split.png',
                ],
                [
                    'map_name' => 'Breeze',
                    'map_file' => 'breeze.png',
                ],
                [
                    'map_name' => 'Bind',
                    'map_file' => 'bind.png',
                ],
                [
                    'map_name' => 'Ascent',
                    'map_file' => 'ascent.png',
                ],
            ]
        );
    }
}
