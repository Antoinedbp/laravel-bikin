<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
// use Illuminate\Routing\Controller;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataPort = Portfolio::all(); 
        return view('backoffice.portfolio.all', compact('dataPort'));
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
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        $this->authorize('edit');
        return view('backoffice.portfolio.show', compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        $this->authorize('edit');
        return view('backoffice.portfolio.show', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $this->authorize("update", Portfolio::class);

        $request->validate([
            "image" => ["required"],
            "photo_id" => ["required"]
        ]);

        if ($request->file('img') !== null) {
            Storage::disk("public")->delete("img/" . $portfolio->photo);
            $portfolio->photo= $request->file("img")->hashName();
            $request->file("img")->storePublicly("img", "public");
        }
        $portfolio->photo_id = $request->photo_id;
        $portfolio->save();
        return redirect()->route('portfolios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        //
    }
}
