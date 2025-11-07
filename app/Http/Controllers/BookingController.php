<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceRequest;
use App\Models\Booking;
use App\Models\Service;
use Illuminate\Http\Request;

class BookingController extends Controller
{
   
    public function index()
    {
        $bookings = Booking::with('service')->latest()->get();
        return view('bookings.index', compact('bookings'));
    }

    
    public function create()
    {
        $services = Service::all();
        return view('bookings.create', compact('services'));
    }

    
    public function store(Request $request)
    {
        $validated = $request->validate();

        Booking::create($validated);

        return redirect()->route('bookings.index')->with('success', 'Réservation créée avec succès !');
    }

   
    public function show(Booking $booking)
    {
        return view('bookings.show', compact('booking'));
    }

   
    public function edit(Booking $booking)
    {
        $services = Service::all();
        return view('bookings.edit', compact('booking', 'services'));
    }

   
    public function update(StoreServiceRequest $request, Booking $booking)
{
    $validated = $request->validated();

    $booking->update($validated);

    return redirect()->route('bookings.index')->with('success', 'Réservation mise à jour avec succès !');
}


  
}
