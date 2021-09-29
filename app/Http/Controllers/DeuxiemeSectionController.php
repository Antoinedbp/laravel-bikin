<?php

namespace App\Http\Controllers;

use App\Models\DeuxiemeSection;
use Illuminate\Http\Request;

class DeuxiemeSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataAbout = DeuxiemeSection::all();
        return view('backoffice.about.all', compact('dataAbout'));
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
     * @param  \App\Models\DeuxiemeSection  $deuxiemeSection
     * @return \Illuminate\Http\Response
     */
    public function show(DeuxiemeSection $deuxiemeSection)
    {
        $about = $deuxiemeSection;
        return view('backoffice.about.show', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DeuxiemeSection  $deuxiemeSection
     * @return \Illuminate\Http\Response
     */
    public function edit(DeuxiemeSection $deuxiemeSection)
    {
        $about = $deuxiemeSection;
        return view('backoffice.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DeuxiemeSection  $deuxiemeSection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DeuxiemeSection $deuxiemeSection)
    {
        $this->authorize("update", DeuxiemeSection::class);

        request()->validate([
            "titre"=>["required"],
            "description1"=>["required"],
            "description2"=>["required"]
        ]);
        
        $abou = new DeuxiemeSection();
        $abou->titre = $request->titre;
        $abou->description1 = $request->description1;
        $abou->description2 = $request->description2;
        $abou->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DeuxiemeSection  $deuxiemeSection
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeuxiemeSection $deuxiemeSection)
    {
        $this->authorize("delete", DeuxiemeSection::class);

        $about = $deuxiemeSection;
        $about->delete();
        return redirect()->back();
    }
}
