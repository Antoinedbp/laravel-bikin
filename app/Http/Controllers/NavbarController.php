<?php

namespace App\Http\Controllers;

use App\Models\Navbar;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class NavbarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataNav = Navbar::all();
        return view('backoffice.header.all', compact('dataNav'));
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
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function show(Navbar $navbar)
    {
        return view('backoffice.header.show', compact('navbar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function edit(Navbar $navbar)
    {
        return view('backoffice.header.edit', compact('navbar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Navbar $navbar)
    {
        $this->authorize("update", Navbar::class);

        request()->validate([
            "chemin"=>["required"]
        ]);
        
        $navbar->chemin = $request->chemin;
        $navbar->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Navbar  $navbar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Navbar $navbar)
    {
        $this->authorize("delete", Navbar::class);

        $navbar->delete();
        return redirect()->back();
    }
}
