<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $program = Program::all();
        return view('admin.program.programView', compact('program'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.program.programCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $program = new Program();
        $program->program = $request->program;
        if ($request->hasFile('image1')) {
            $file = $request->file('image1');
            $extension = $file->getCLientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('Image/program/', $filename);
            $program->image1 = "$filename";
        }
        if ($request->hasFile('image2')) {
            $file = $request->file('image2');
            $extension = $file->getCLientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('Image/program/', $filename);
            $program->image2 = "$filename";
        }
        $program->save();
        return redirect()->route('program')->with('status', 'Program Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function show(Program $program)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $program = Program::find($id);
        return view('admin.program.programEdit', compact('program'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $program = Program::find($id);
        $program->program = $request->program;
        if ($request->file('image1')) {
            $distenation = 'Image/program/' . $program->image1;
            if (File::exists($distenation)) {
                File::delete($distenation);
            }
            $file = $request->file('image1');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('Image/program'), $filename);
            $program['image1'] = "$filename";

        }
        if ($request->file('image2')) {
            $distenation = 'Image/program/' . $program->image2;
            if (File::exists($distenation)) {
                File::delete($distenation);
            }
            $file = $request->file('image2');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('Image/program'), $filename);
            $program['image2'] = "$filename";

        }

        $program->save();
        return redirect()->route('program');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $program = Program::find($id);
        $program->delete();
        return redirect()->route('program')->with('status', 'Program Deleted Successfully');
    }
}
