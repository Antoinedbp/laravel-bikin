<?php

namespace App\Http\Controllers;

use App\Models\Titre;
use Illuminate\Http\Request;

class TitreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataTitre = Titre::all();
        return view('backoffice.titres.all', compact('dataTitre'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function show(Titre $titre)
    {
        return view('backoffice.titres.show', compact('titre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function edit(Titre $titre)
    {
        return view('backoffice.titres.edit', compact('titre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Titre $titre)
    {
        $this->authorize("update", Titre::class);

        request()->validate([
            "titre1"=>["required"],
            "description1"=>["required"],
            "titre2"=>["required"],
            "description2"=>["required"],
            "titre3"=>["required"],
            "description3"=>["required"],
            "titre4"=>["required"],
            "description4"=>["required"],
            "titre5"=>["required"],
            "description5"=>["required"],
            "titre6"=>["required"],
            "description6"=>["required"],
            "titre7"=>["required"],
            "description7"=>["required"],
            "titre8"=>["required"],
            "description8"=>["required"],
        ]);
        
        $titre->titre1 = $request->titre1;
        $titre->description1 = $request->description1;
        $titre->titre2 = $request->titre2;
        $titre->description2 = $request->description2;
        $titre->titre3 = $request->titre3;
        $titre->description3 = $request->description3;
        $titre->titre4 = $request->titre4;
        $titre->description4 = $request->description4;
        $titre->titre5 = $request->titre5;
        $titre->description5 = $request->description5;
        $titre->titre6 = $request->titre6;
        $titre->description6 = $request->description6;
        $titre->titre7 = $request->titre7;
        $titre->description7 = $request->description7;
        $titre->titre8 = $request->titre8;
        $titre->description8 = $request->description8;
        $titre->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Titre  $titre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Titre $titre)
    {
        $this->authorize("delete", Titre::class);

        $titre->delete();
        return redirect()->back();
    }
}
