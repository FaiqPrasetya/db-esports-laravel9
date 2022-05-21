<?php

namespace App\Http\Controllers;
use App\Models\Maps;
use App\Models\Agents;
use App\Models\Strats;
use Illuminate\Http\Request;

class StratsController extends Controller
{
    public function index()
    {
        $strats = Strats::all();
        return view('strats.index', compact('strats'));
    }

    public function create()
    {
        $maps = Maps::all();
        return view('strats.create', compact('maps'));
    }

    public function store(Request $request)
    {
        $strats = new Strats;

        $strats->map_name = $request->input('map_name');
        $strats->strats_desc = $request->input('strats_desc');
        $strats->agent_one = $request->input('agent_one');
        $strats->agent_one_desc = $request->input('agent_one_desc');
        $strats->agent_two = $request->input('agent_two');
        $strats->agent_two_desc = $request->input('agent_two_desc');
        $strats->agent_three = $request->input('agent_three');
        $strats->agent_three_desc = $request->input('agent_three_desc');
        $strats->agent_four = $request->input('agent_four');
        $strats->agent_four_desc = $request->input('agent_four_desc');
        $strats->agent_five = $request->input('agent_five');
        $strats->agent_five_desc = $request->input('agent_five_desc');

        if($request->hasFile('strats_image'))
        {
            $file       = $request->file('strats_image');
            $extention  = $file->getClientOriginalExtension();
            $filename   = time().'.'.$extention;
            $file      -> move('public/assets/img/', $filename);
            $strats    -> strats_image = $filename;
        }
        $strats->save();
        return redirect()->route('strats.create')
            ->with('status', 'Strats Added Successfully');
    }

    public function edit($id)
    {
        $strats = Strats::find($id);
        return view('strats.edit', compact('strats'));
    }

    public function update(Request $request, $id)
    {
        $strats = Strats::find($id);

        $strats->map_name = $request->input('map_name');
        $strats->strats_desc = $request->input('strats_desc');
        $strats->agent_one = $request->input('agent_one');
        $strats->agent_one_desc = $request->input('agent_one_desc');
        $strats->agent_two = $request->input('agent_two');
        $strats->agent_two_desc = $request->input('agent_two_desc');
        $strats->agent_three = $request->input('agent_three');
        $strats->agent_three_desc = $request->input('agent_three_desc');
        $strats->agent_four = $request->input('agent_four');
        $strats->agent_four_desc = $request->input('agent_four_desc');
        $strats->agent_five = $request->input('agent_five');
        $strats->agent_five_desc = $request->input('agent_five_desc');

        $strats->update();

        return redirect()->route('strats.index')
            ->with('success', 'Strats Successfully Update');
    }

    public function destroy($id)
    {
        $strats = Strats::where('id', $id)->delete();
        return redirect()->route('strats.index')
            ->with('success', 'Strats Successfully Deleted');
    }

    public function amaps()
    {
        $agents = Agents::all();
        $maps   = Maps::all();

        return view('strats.create', compact(['agents', 'maps']));
    }
}
