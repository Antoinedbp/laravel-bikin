<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataService = Service::all();
        return view('backoffice.services.all', compact('dataService'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize("create", Service::class);

        request()->validate([
            "logo1"=>["required"],
            "titre1"=>["required"],
            "description1"=>["required"],
            "logo2"=>["required"],
            "titre2"=>["required"],
            "description2"=>["required"],
            "logo3"=>["required"],
            "titre3"=>["required"],
            "description3"=>["required"],
            "logo4"=>["required"],
            "titre4"=>["required"],
            "description4"=>["required"]
        ]);
        
        $service = new Service();
        $service->logo1 = $request->logo1;
        $service->titre1 = $request->titre1;
        $service->description1 = $request->description1;
        $service->logo2 = $request->logo2;
        $service->titre2 = $request->titre2;
        $service->description2 = $request->description2;
        $service->logo3 = $request->logo3;
        $service->titre3 = $request->titre3;
        $service->description3 = $request->description3;
        $service->logo4 = $request->logo4;
        $service->titre4 = $request->titre4;
        $service->description4 = $request->description4;
        $service->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view('backoffice.services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('backoffice.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $this->authorize("update", Service::class);

        request()->validate([
            "logo1"=>["required"],
            "titre1"=>["required"],
            "description1"=>["required"],
            "logo2"=>["required"],
            "titre2"=>["required"],
            "description2"=>["required"],
            "logo3"=>["required"],
            "titre3"=>["required"],
            "description3"=>["required"],
            "logo4"=>["required"],
            "titre4"=>["required"],
            "description4"=>["required"]
        ]);
        
        $service->logo1 = $request->logo1;
        $service->titre1 = $request->titre1;
        $service->description1 = $request->description1;
        $service->logo2 = $request->logo2;
        $service->titre2 = $request->titre2;
        $service->description2 = $request->description2;
        $service->logo3 = $request->logo3;
        $service->titre3 = $request->titre3;
        $service->description3 = $request->description3;
        $service->logo4 = $request->logo4;
        $service->titre4 = $request->titre4;
        $service->description4 = $request->description4;
        $service->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $this->authorize("delete", Service::class);

        $service->delete();
        return redirect()->back();
    }
}
