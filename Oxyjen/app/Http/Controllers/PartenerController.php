<?php

namespace App\Http\Controllers;

use App\Models\Partener;
use Illuminate\Http\Request;

class PartenerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partener = Partener::all();
        return view('admin.applications.partinersApplication', compact('partener'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
     * @param  \App\Models\Partener  $partener
     * @return \Illuminate\Http\Response
     */
    public function show(Partener $partener)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partener  $partener
     * @return \Illuminate\Http\Response
     */
    public function edit(Partener $partener)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partener  $partener
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partener  $partener
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partener $partener)
    {
        $partener = Partener::find($partener->id);
        $partener->delete();
        return redirect()->route('partener');
    }
    public function cancel($id)
    {
        $partener = Partener::find($id);
        $partener->status=2;
        $partener->save();
        return redirect()->route('partener');
    }
    public function pending($id)
    {
        $partener = Partener::find($id);
        $partener->status=0;
        $partener->save();
        return redirect()->route('partener');
    }
    public function confirm($id)
    {
        $partener = Partener::find($id);
        $partener->status=1;
        $partener->save();
        return redirect()->route('partener');
    }
}
