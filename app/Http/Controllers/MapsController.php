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
        $strats = DB::table('strats')->where('map_name', 'Haven')->paginate(10);
        return view('maps.Haven', compact('strats'));
    }

    public function icebox(){
        $strats = DB::table('strats')->where('map_name', 'Icebox')->paginate(10);
        return view('maps.Icebox', compact('strats'));
    }

    public function split(){
        $strats = DB::table('strats')->where('map_name', 'Split')->paginate(10);
        return view('maps.Split', compact('strats'));
    }

    public function breeze(){
        $strats = DB::table('strats')->where('map_name', 'Breeze')->paginate(10);
        return view('maps.Breeze', compact('strats'));
    }

    public function bind(){
        $strats = DB::table('strats')->where('map_name', 'Bind')->paginate(10);
        return view('maps.Bind', compact('strats'));
    }

    public function ascent(){
        $strats = DB::table('strats')->where('map_name', 'Ascent')->paginate(10);
        return view('maps.Ascent', compact('strats'));
    }

    public function view($id){
        $strats = Strats::find($id);
        return view('maps.View', compact('strats'));
    }
}
