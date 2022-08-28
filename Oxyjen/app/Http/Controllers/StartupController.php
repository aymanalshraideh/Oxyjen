<?php

namespace App\Http\Controllers;

use App\Models\Startup;
use Illuminate\Http\Request;

class StartupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $startup = Startup::all();
        return view('admin.startup.startupView', compact('startup'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.startup.startupCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $startup = new Startup();
        $startup->companyName = $request->companyName;
        $startup->description = $request->description;

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('Image/startup'), $filename);
            $startup->image = "$filename";
        }
        $startup->save();
        return redirect()->route('startup')->with('status', 'Startup Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\startup  $startup
     * @return \Illuminate\Http\Response
     */
    public function show(Startup $startup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\startup  $startup
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $startup = Startup::find($id);
        return view('admin.startup.startupEdit', compact('startup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\startup  $startup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $startup = Startup::find($id);
        $startup->companyName = $request->companyName;
        $startup->description = $request->description;
        if ($request->file('image')) {
            $destinationPath = public_path('Image/startup');
            if (exist($startup->image)) {
                delete($destinationPath . $startup->image);
            }
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('Image/startup'), $filename);
            $startup->image = "$filename";
        }
        $startup->save();
        return redirect()->route('startup')->with('status', 'Startup Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\startup  $startup
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $startup = Startup::find($id);
        $startup->delete();
        return redirect()->route('startup')->with('status', 'Startup Deleted Successfully');
    }
}
