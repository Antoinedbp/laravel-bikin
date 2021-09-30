<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataTeam = Team::all();
        return view('backoffice.team.all', compact('dataTeam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize("update", Team::class);

        request()->validate([
            "photo"=>["required"],
            "nom"=>["required"],
            "statut"=>["required"]
        ]);
        
        $team = new Team();
        $team->photo = $request->file('img')->hashName();
        $request->file('img')->storePublicly('img', 'public');
        $team->nom = $request->nom;
        $team->statut = $request->statut;
        $team->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        return view('backoffice.team.show', compact('team'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('backoffice.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $this->authorize("update", Team::class);

        request()->validate([
            "photo"=>["required"],
            "nom"=>["required"],
            "statut"=>["required"]
        ]);
        
        if ($request->file('img') !== null) {
            Storage::disk("public")->delete("img/" . $team->photo);
            $team->photo= $request->file("img")->hashName();
            $request->file("img")->storePublicly("img", "public");
        }
        $team->nom = $request->nom;
        $team->statut = $request->statut;
        $team->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $this->authorize("delete", Team::class);

        $team->delete();
        return redirect()->back();
    }
}
