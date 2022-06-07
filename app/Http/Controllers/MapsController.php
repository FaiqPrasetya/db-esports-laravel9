<?php

namespace App\Http\Controllers;

use App\Models\Maps;
use App\Models\Strats;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MapsController extends Controller
{
    public function call($mapname) {
        $strats = DB::table('strats')
        ->where('map_name', $mapname)->paginate(25);

        return view('maps.list', compact('strats'));
    }

    public function view($id){
        $strats = Strats::find($id);
        return view('maps.View', compact('strats'));
    }

}
