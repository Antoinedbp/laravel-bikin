<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataFooter = Footer::all();
        return view('backoffice.footer.all', compact('dataFooter'));
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
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function show(Footer $footer)
    {
        return view('backoffice.footer.show', compact('footer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function edit(Footer $footer)
    {
        return view('backoffice.footer.edit', compact('footer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Footer $footer)
    {
        $this->authorize("update", Footer::class);

        request()->validate([
            "adresse"=>["required"],
            "phone"=>["required"],
            "email"=>["required"],
            "linkTitre1"=>["required"],
            "link1"=>["required"],
            "link2"=>["required"],
            "link3"=>["required"],
            "link4"=>["required"],
            "link5"=>["required"],
            "linkTitre2"=>["required"],
            "link6"=>["required"],
            "link7"=>["required"],
            "link8"=>["required"],
            "link9"=>["required"],
            "link10"=>["required"],
            "titre"=>["required"],
            "description"=>["required"],
        ]);
        
        $footer->adresse = $request->adresse;
        $footer->phone = $request->phone;
        $footer->email = $request->email;
        $footer->linkTitre1 = $request->linkTitre1;
        $footer->link1 = $request->link1;
        $footer->link2 = $request->link2;
        $footer->link3 = $request->link3;
        $footer->link4 = $request->link4;
        $footer->link5 = $request->link5;
        $footer->linkTitre2 = $request->linkTitre2;
        $footer->link6 = $request->link6;
        $footer->link7 = $request->link7;
        $footer->link8 = $request->link8;
        $footer->link9 = $request->link9;
        $footer->link10 = $request->link10;
        $footer->titre = $request->titre;
        $footer->description = $request->description;
        $footer->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Footer $footer)
    {
        $this->authorize("delete", Footer::class);

        $footer->delete();
        return redirect()->back();
    }
}
