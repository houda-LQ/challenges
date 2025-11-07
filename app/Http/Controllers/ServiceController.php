<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("services.index", ["services"=>Service::all()] );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
               return view("services.create");

    }

    
    public function store(StoreServiceRequest $request)
{
    $validated = $request->validated();

    if ($request->hasFile('image')) {
        $validated['image'] = $request->file('image')->store('services', 'public');
    }

    $service = Service::create($validated);

    return redirect()->route('services.index')->with('success', 'Service créé avec succès !');
}


    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
      
        return view("services.show", ["service"=>$service] );
       }

        public function __construct()
    {
        // protège toutes les routes du controller (utilisateur connecté)
        $this->middleware('auth');
    }



    public function update(Request $request, Service $service)
    {
        $this->authorize('update', $service);

        $data = $request->validate();

        $service->update($data);

        return redirect()->route('services.show', $service)->with('success', 'Service mis à jour');
    }
     
      
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit()
    // {
    //      return view("edit");

    // }

    
