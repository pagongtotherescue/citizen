<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Http\Controllers\BookingController;

class bookingcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('show_bookings', [
            'bookings' => Booking::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('bookform');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $booking = new Booking;
    $booking->property_name = $request->property_name;
    $booking->property_email = $request->property_email;
    $booking->property_number = $request->property_number;
    $booking->property_date = $request->property_date;
    $booking->property_time = $request->property_time;
    $booking->property_service = $request->property_service;
    $booking->property_message = $request->property_message;

    $booking->save();

    return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $booking = booking::find($id);
        return view('bookform', compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = booking::find($id);  
        return view('editbook', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $booking = Booking::find($id);
        $booking->property_name = $request->property_name;
    $booking->property_email = $request->property_email;
    $booking->property_number = $request->property_number;
    $booking->property_date = $request->property_date;
    $booking->property_time = $request->property_time;
    $booking->property_service = $request->property_service;
    $booking->property_message = $request->property_message;

        $booking->save();

    return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $booking = booking::find($id);
        $booking->delete();
    return redirect()->back();
    }
}
