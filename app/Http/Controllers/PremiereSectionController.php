<?php

namespace App\Http\Controllers;

use App\Models\PremiereSection;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PremiereSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataHero = PremiereSection::all();
        return view('backoffice.hero.all', compact('dataHero'));
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
     * @param  \App\Models\PremiereSection  $premiereSection
     * @return \Illuminate\Http\Response
     */
    public function show(PremiereSection $premiereSection)
    {
        $hero = $premiereSection;
        return view('backoffice.hero.show', compact('hero'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PremiereSection  $premiereSection
     * @return \Illuminate\Http\Response
     */
    public function edit(PremiereSection $premiereSection)
    {
        $hero = $premiereSection;
   
        return view('backoffice.hero.edit', compact('hero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PremiereSection  $premiereSection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PremiereSection $premiereSection)
    {
        $this->authorize("update", PremiereSection::class);

        request()->validate([
            "chemin"=>["required"]
        ]);
        
        $premiereSection->chemin = $request->chemin;
        $premiereSection->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PremiereSection  $premiereSection
     * @return \Illuminate\Http\Response
     */
    public function destroy(PremiereSection $premiereSection)
    {
        // $this->authorize("delete", PremiereSection::class);
        dd($premiereSection);
        $hero = $premiereSection;
        $hero->delete();
        return redirect()->back();
    }
}
