<?php

namespace App\Http\Controllers;

use App\Models\TeamsMember;
use Illuminate\Http\Request;

class TeamsMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = TeamsMember::all();
        return view('admin.teamMembers.teamView', compact('team'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teamMembers.teamCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $team = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('Image/team'), $filename);
            $team['image'] = "$filename";

        }
        TeamsMember::create($team);
        return redirect()->route('team')->with('status', 'Team Member Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TeamsMember  $teamsMember
     * @return \Illuminate\Http\Response
     */
    public function show(TeamsMember $teamsMember)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TeamsMember  $teamsMember
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = TeamsMember::find($id);
        return view('admin.teamMembers.teamEdit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TeamsMember  $teamsMember
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $team = TeamsMember::find($id);
        $team->name = $request->name;
        $team->facebook = $request->facebook;
        $team->twitter = $request->twitter;
        $team->linkedin = $request->linkedin;
        $team->email = $request->email;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('Image/team'), $filename);
            $team['image'] = "$filename";

        }
        $team->save();
        return redirect()->route('team')->with('status', 'Team Member Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TeamsMember  $teamsMember
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $team = TeamsMember::find($id);
        $team->delete();
        return redirect()->route('team')->with('status', 'Team Member Deleted Successfully');
    }
}
