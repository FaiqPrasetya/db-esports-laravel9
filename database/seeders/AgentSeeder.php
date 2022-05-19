<?php

namespace Database\Seeders;

use App\Models\Agents;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Agents::insert(
            [
                [
                    'name' => 'Brimstone',
                    'type' => 'Controller',
                ],
                [

                ]
            ]
        );
    }
}
