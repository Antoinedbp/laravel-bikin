<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\DeuxiemeSection;
use App\Models\Feature;
use App\Models\Footer;
use App\Models\Navbar;
use App\Models\Portfolio;
use App\Models\PremiereSection;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\Titre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titres = Titre::all();
        $headers = Navbar::all();
        $heros = PremiereSection::all();
        $abouts = DeuxiemeSection::all();
        $features = Feature::all();
        $services = Service::all();
        $portfolios = Portfolio::all();
        $testimonials = Testimonial::all();
        $teams = Team::all();
        $contacts = Contact::all();
        $footers = Footer::all();
        return view('pages.mainBO', compact('titres', 'headers', 'heros', 'abouts', 'features', 'services', 'portfolios', 'testimonials', 'teams', 'contacts', 'footers'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->authorize('edit');
        
        $var = $id;
        return view('pages.mainBO', compact('var'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
