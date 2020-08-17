<?php

namespace App\Http\Controllers;

use App\Application;
use Illuminate\Http\Request;

class ApplicationsController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applications = Application::all();
        return $applications;
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
            'my_interest' => ['required'],
            'my_skills' => ['required'],
            'my_availability' => ['required']
        ]);

        $application = Application::create([
            'my_interest' => $request->my_interest,
            'my_skills' => $request->my_skills,
            'my_availability' => $request->my_availability,
        ]);
        //return response()->json($application);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Application::find($id);
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
        Application::find($id);
        $request->validate([
            'my_interest' => ['required'],
            'my_skills' => ['required'],
            'my_availability' => ['required']
        ]);

        $application = Application::create([
            'my_interest' => $request->my_interest,
            'my_skills' => $request->my_skills,
            'my_availability' => $request->my_availability,
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
        $application = Application::find($id);
        application::delete();
    }
}
