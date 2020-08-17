<?php

namespace App\Http\Controllers;

use App\Mission;
use Illuminate\Http\Request;

class MissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $missions = Mission::all();
        return $missions;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'description' => ['required'],            
            'skills' => ['required'],
            'availability' => ['required'],
            'date_time' => ['required'],
            'postalcode' => ['required'],
            'city' => ['required']
        ]);

        $mission = Mission::create([
            'title' => $request->title,
            'description' => $request->description,            
            'skills' => $request->skills,
            'availability' => $request->availability,
            'date_time' => $request->date_time,
            'postalcode' => $request->postalcode,
            'city' => $request->city
        ]);
        //return response()->json($mission);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Mission::find($id);
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
        Mission::find($id);
        $request->validate([
            'title' => ['required'],
            'description' => ['required'],            
            'skills' => ['required'],
            'availability' => ['required'],
            'date_time' => ['required'],
            'postalcode' => ['required'],
            'city' => ['required']
        ]);

        $mission = Mission::create([
            'title' => $request->title,
            'description' => $request->description,            
            'skills' => $request->skills,
            'availability' => $request->availability,
            'date_time' => $request->date_time,
            'postalcode' => $request->postalcode,
            'city' => $request->city
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mission = Mission::find($id);
        mission::delete();
    }
}
