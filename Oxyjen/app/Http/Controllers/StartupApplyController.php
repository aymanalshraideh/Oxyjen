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
     * @param  \App\Models\StartupApply  $StartupApply
     * @return \Illuminate\Http\Response
     */
    public function show(StartupApply $StartupApply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StartupApply  $StartupApply
     * @return \Illuminate\Http\Response
     */
    public function edit(StartupApply $StartupApply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StartupApply  $StartupApply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $startup = Startup::find($id);
        $startup->status = $request->status;
        $startup->save();
        return redirect()->route('StartupApply')->with('success', 'Status updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StartupApply  $StartupApply
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $startup = Startup::find($id);
        $startup->delete();
        return redirect()->route('StartupApply')->with('success', 'Startup Application Deleted Successfully');
    }
}
