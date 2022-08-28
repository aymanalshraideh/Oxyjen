<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartupApplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $startup = Startup::all();
        return view('admin.applications.startupApplication', compact('startup'));
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
     * @param  \App\Models\SatrtupApply  $satrtupApply
     * @return \Illuminate\Http\Response
     */
    public function show(SatrtupApply $satrtupApply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SatrtupApply  $satrtupApply
     * @return \Illuminate\Http\Response
     */
    public function edit(SatrtupApply $satrtupApply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SatrtupApply  $satrtupApply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $startup = Startup::find($id);
        $startup->status = $request->status;
        $startup->save();
        return redirect()->route('startup.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SatrtupApply  $satrtupApply
     * @return \Illuminate\Http\Response
     */
    public function destroy(SatrtupApply $satrtupApply)
    {
        //
    }
}
