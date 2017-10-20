<?php

namespace App\Http\Controllers;

use App\Game;
use App\Station;
use Illuminate\Http\Request;

class StationsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('stations.index', ['stations' => Station::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stations.create', ['games' => Game::pluck('name', 'id')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate($this->validationRules());

        $station = Station::create($data);

        $station->games()->sync($request->game_ids);

        flash("Station {$station->name} created!")->success();

        return redirect(route('stations.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Station  $station
     * @return \Illuminate\Http\Response
     */
    public function show(Station $station)
    {
        return view('stations.show', ['station' => $station->load('games')]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Station  $station
     * @return \Illuminate\Http\Response
     */
    public function edit(Station $station)
    {
        return view('stations.edit', [
            'station' => $station,
            'games' => Game::pluck('name', 'id'),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Station  $station
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Station $station)
    {
        $data = $request->validate($this->validationRules());

        $station->update($data);

        $station->games()->sync($request->game_ids);

        flash("Station {$station->name} updated!")->info();

        return redirect(route('stations.show', ['station' => $station->id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Station  $station
     * @return \Illuminate\Http\Response
     */
    public function destroy(Station $station)
    {
        $station->delete();

        flash("Station deleted!")->info();

        return redirect(route('stations.index'));
    }

    protected function validationRules()
    {
        return [
            'name' => 'required|string|max:20'
        ];
    }
}
