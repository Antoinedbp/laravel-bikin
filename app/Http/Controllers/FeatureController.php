<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataFeat = Feature::all();
        return view('backoffice.features.all', compact('dataFeat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.features.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize("create", Feature::class);

        request()->validate([
            "image"=>["required"],
            "titre"=>["required"],
            "sous-titre"=>["required"],
            "description1"=>["required"],
            "description2"=>["required"],
            "description3"=>["required"]
        ]);

        $feature = new Feature();
        $feature->image = $request->image;
        $feature->titre = $request->titre;
        $feature->sous_titre = $request->sous_titre;
        $feature->description1 = $request->description1;
        $feature->description2 = $request->description2;
        $feature->description3 = $request->description3;
        $feature->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function show(Feature $feature)
    {
        $this->authorize('edit');

        return view('backoffice.features.show', compact('feature'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function edit(Feature $feature)
    {
        $this->authorize('edit');
        
        return view('backoffice.features.edit', compact('feature'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feature $feature)
    {
        $this->authorize("update", Feature::class);


        Storage::disk('public')->delete("assets/img/".$feature->image);
      
        $feature->image = $request->file("image");





        request()->validate([
            "image"=>["required"],
            "titre"=>["required"],
            "sous-titre"=>["required"],
            "description1"=>["required"],
            "description2"=>["required"],
            "description3"=>["required"]
        ]);

        
        $feature->titre = $request->titre;
        $feature->sous_titre = $request->sous_titre;
        $feature->description1 = $request->description1;
        $feature->description2 = $request->description2;
        $feature->description3 = $request->description3;
        $feature->save();
        $request->file("image")->storePublicly("img", "public");
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feature $feature)
    {
        $this->authorize("delete", Feature::class);

        $feature->delete();
        return redirect()->back();
    }
}
