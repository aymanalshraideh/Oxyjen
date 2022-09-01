<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = Booking::all();
        return view('admin.applications.booking', compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.applications.booking');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $book = Booking::find($id);
        $book->delete();
        return redirect()->route('booking')->with('status', 'Booking deleted successfully');
    }
   

    public function pending($id)
    {
        $book = Booking::find($id);
        $book->status = 0;
        $book->save();
        return redirect()->route('booking')->with('status', 'Booking confirmed successfully');
    }

    public function confirm($id)
    {
        $book = Booking::find($id);
        $book->status = 1;
        $book->save();
        return redirect()->route('booking')->with('status', 'Booking confirmed successfully');
    }
     public function cancel($id)
    {
        $book = Booking::find($id);
        $book->status = 2;
        $book->save();
        return redirect()->route('booking')->with('status', 'Booking canceled successfully');
    }
}
