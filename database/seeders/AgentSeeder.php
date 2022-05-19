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
                    'agent_name' => 'Brimstone',
                    'agent_type' => 'Controller',
                ],
                [
                    'agent_name' => 'Viper',
                    'agent_type' => 'Controller',
                ],
                [
                    'agent_name' => 'Omen',
                    'agent_type' => 'Controller',
                ],
                [
                    'agent_name' => 'Astra',
                    'agent_type' => 'Controller',
                ],
                [
                    'agent_name' => 'Killjoy',
                    'agent_type' => 'Sentinel',
                ],
                [
                    'agent_name' => 'Cypher',
                    'agent_type' => 'Sentinel',
                ],
                [
                    'agent_name' => 'Sage',
                    'agent_type' => 'Sentinel',
                ],
                [
                    'agent_name' => 'Chamber',
                    'agent_type' => 'Sentinel',
                ],
                [
                    'agent_name' => 'Phoenix',
                    'agent_type' => 'Duelist',
                ],
                [
                    'agent_name' => 'Jett',
                    'agent_type' => 'Duelist',
                ],
                [
                    'agent_name' => 'Reyna',
                    'agent_type' => 'Duelist',
                ],
                [
                    'agent_name' => 'Raze',
                    'agent_type' => 'Duelist',
                ],
                [
                    'agent_name' => 'Yoru',
                    'agent_type' => 'Duelist',
                ],
                [
                    'agent_name' => 'Sova',
                    'agent_type' => 'Initiator',
                ],
                [
                    'agent_name' => 'Skye',
                    'agent_type' => 'Initiator',
                ],
                [
                    'agent_name' => 'KAY/O',
                    'agent_type' => 'Initiator',
                ],
                [
                    'agent_name' => 'Fade',
                    'agent_type' => 'Initiator',
                ],
            ]
        );
    }
}
