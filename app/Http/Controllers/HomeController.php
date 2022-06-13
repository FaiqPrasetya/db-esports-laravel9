<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maps;

class HomeController extends Controller
{
    public function index() {
        $maps = Maps::all();

        return view('menu.main-menu.home', compact('maps'));
    }
}
