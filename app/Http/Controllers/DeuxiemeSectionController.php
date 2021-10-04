<?php

namespace App\Http\Controllers;

use App\Models\DeuxiemeSection;
use App\Models\Titre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeuxiemeSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titres = Titre::all();
        $dataAbout = DeuxiemeSection::all();
        return view('backoffice.about.all', compact('dataAbout', 'titres'));
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
    public function show($id)
    {

        $this->authorize('edit');
        $about = DeuxiemeSection::find($id);
        return view('backoffice.about.show', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DeuxiemeSection  $deuxiemeSection
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('edit');

        $about = DeuxiemeSection::find($id);
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
            "chemin"=>["required"],
            "logo"=>["required"],
            "titre"=>["required"],
            "description"=>["required"]
        ]);
        
        $deuxiemeSection->chemin = $request->chemin;
        $deuxiemeSection->logo = $request->logo;
        $deuxiemeSection->titre = $request->titre;
        $deuxiemeSection->description = $request->description;
        $deuxiemeSection->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DeuxiemeSection  $deuxiemeSection
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize("delete", DeuxiemeSection::class);

        $about = DeuxiemeSection::find($id);
        $about->delete();
        return redirect()->back();
    }
}
