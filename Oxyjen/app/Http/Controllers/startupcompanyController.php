<?php

namespace App\Http\Controllers;
use App\Models\StartupApply;
use Illuminate\Http\Request;

class startupcompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $startup = StartupApply::all();
        return view('applications.startupApp', compact('startup'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('startup.index');

        

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
        $input = $request->all();
        StartupApply::create($input);
        return redirect('/startupApp')->with('flash_message', 'Startup Submited Successfully!');  
        // $startup_applies = new StartupApply();
        // $startup_applies->companyName = $request->companyName;
        // $startup_applies->location = $request->location;
        // $startup_applies->description = $request->description;
        // $startup_applies->ceoName = $request->ceoName;
        // $startup_applies->ceoPhone = $request->ceoPhone;
        // $startup_applies->ceoEmail = $request->ceoEmail;
        
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('Image/StartupImage'), $filename);
            $request->image = "$filename";
        }
        $request->save();
      


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
