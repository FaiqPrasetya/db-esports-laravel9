<?php

namespace App\Http\Controllers;

use App\Models\Strats;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MapsController extends Controller
{

    public function fracture(){
        $strats = DB::table('strats')->where('map_name', 'Fracture')->paginate(10);
        return view('maps.Fracture', compact('strats'));
    }

    public function haven(){
        $strats = DB::table('strats')->where('map_name', 'haven')->paginate(10);
        return view('maps.Haven', compact('strats'));
    }

    public function icebox(){
        $strats = DB::table('strats')->where('map_name', 'icebox')->paginate(10);
        return view('maps.Icebox', compact('strats'));
    }

    public function split(){
        $strats = DB::table('strats')->where('map_name', 'split')->paginate(10);
        return view('maps.Split', compact('strats'));
    }

    public function breeze(){
        $strats = DB::table('strats')->where('map_name', 'breeze')->paginate(10);
        return view('maps.Breeze', compact('strats'));
    }

    public function bind(){
        $strats = DB::table('strats')->where('map_name', 'bind')->paginate(10);
        return view('maps.Bind', compact('strats'));
    }

    public function ascent(){
        $strats = DB::table('strats')->where('map_name', 'ascent')->paginate(10);
        return view('maps.Ascent', compact('strats'));
    }
}
