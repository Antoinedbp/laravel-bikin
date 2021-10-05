<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataTest = Testimonial::all();
        return view('backoffice.testimonials.all', compact('dataTest'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('edit', Testimonial::class);
        return view('backoffice.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->authorize("create", Testimonial::class);

        $request->validate([
            "description" => ["required"],
            "photo" => ["required"],
            "nom" => ["required"],
            "statut" => ["required"]
        ]);

        $testimonial = new Testimonial;
        $testimonial->description = $request->description;
        $testimonial->photo = $request->file("photo")->hashName();
        $testimonial->nom = $request->nom;
        $testimonial->statut = $request->statut;
        $request->file("photo")->storePublicly("img", "public");
        $testimonial->save();
        return redirect()->route('testimonials.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        $this->authorize('edit');
        return view('backoffice.testimonials.show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        $this->authorize('edit');
        return view('backoffice.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $this->authorize("update", Testimonial::class);

        $request->validate([
            "description" => ["required"],
            "photo" => ["required"],
            "nom" => ["required"],
            "statut" => ["required"]
        ]);

        Storage::disk("public")->delete("img/" . $testimonial->photo);
        $testimonial->description = $request->description;
        $testimonial->photo= $request->file("photo")->hashName();
        $testimonial->nom = $request->nom;
        $testimonial->statut = $request->statut;
        $request->file("photo")->storePublicly("img", "public");
        $testimonial->save();
        return redirect()->route('testimonials.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        $this->authorize("delete", Testimonial::class);

        Storage::disk("public")->delete("img/" .$testimonial->photo);
        $testimonial->delete();
        return redirect()->route('testimonials.index');
    }
}
