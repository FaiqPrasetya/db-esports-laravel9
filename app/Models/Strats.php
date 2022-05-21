<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Strats extends Model
{
    use HasFactory;
    protected $fillable = ['map_name', 'strats_image', 'strats_name', 'strats_desc', 'agent_one',
                            'agent_one_desc', 'agent_two', 'agent_two_desc', 'agent_three',
                            'agent_three_desc', 'agent_four', 'agent_four_desc', 'agent_five', 'agent_five_desc'];
}
