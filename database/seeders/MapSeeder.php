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
                    'map_file' => 'fracture.jpg',
                ],
                [
                    'map_name' => 'haven',
                    'map_file' => 'haven.jpeg',
                ],
                [
                    'map_name' => 'icebox',
                    'map_file' => 'icebox.jpg',
                ],
                [
                    'map_name' => 'split',
                    'map_file' => 'split.jpeg',
                ],
                [
                    'map_name' => 'breeze',
                    'map_file' => 'breeze.jpg',
                ],
                [
                    'map_name' => 'bind',
                    'map_file' => 'bind.jpeg',
                ],
                [
                    'map_name' => 'ascent',
                    'map_file' => 'ascent.jpeg',
                ],
            ]
        );
    }
}
