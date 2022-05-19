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
                    'name' => 'Viper',
                    'type' => 'Controller',
                ],
                [
                    'name' => 'Omen',
                    'type' => 'Controller',
                ],
                [
                    'name' => 'Astra',
                    'type' => 'Controller',
                ],
                [
                    'name' => 'Killjoy',
                    'type' => 'Sentinel',
                ],
                [
                    'name' => 'Cypher',
                    'type' => 'Sentinel',
                ],
                [
                    'name' => 'Sage',
                    'type' => 'Sentinel',
                ],
                [
                    'name' => 'Chamber',
                    'type' => 'Sentinel',
                ],
                [
                    'name' => 'Phoenix',
                    'type' => 'Duelist',
                ],
                [
                    'name' => 'Jett',
                    'type' => 'Duelist',
                ],
                [
                    'name' => 'Reyna',
                    'type' => 'Duelist',
                ],
                [
                    'name' => 'Raze',
                    'type' => 'Duelist',
                ],
                [
                    'name' => 'Yoru',
                    'type' => 'Duelist',
                ],
                [
                    'name' => 'Sova',
                    'type' => 'Initiator',
                ],
                [
                    'name' => 'Skye',
                    'type' => 'Initiator',
                ],
                [
                    'name' => 'KAY/O',
                    'type' => 'Initiator',
                ],
                [
                    'name' => 'Fade',
                    'type' => 'Initiator',
                ],
            ]
        );
    }
}
