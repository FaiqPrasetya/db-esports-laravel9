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
                    'map_name' => 'fracture',
                    'map_file' => 'fracture.png',
                ],
                [
                    'map_name' => 'haven',
                    'map_file' => 'haven.png',
                ],
                [
                    'map_name' => 'icebox',
                    'map_file' => 'icebox.png',
                ],
                [
                    'map_name' => 'split',
                    'map_file' => 'split.png',
                ],
                [
                    'map_name' => 'breeze',
                    'map_file' => 'breeze.png',
                ],
                [
                    'map_name' => 'bind',
                    'map_file' => 'bind.png',
                ],
                [
                    'map_name' => 'ascent',
                    'map_file' => 'ascent.png',
                ],
            ]
        );
    }
}
