<?php

namespace App\Http\Controllers;

use App\Ngo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class NgosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ngos = Ngo::all();
        return $ngos;
    }

    // Show all ngos in Admin Dashboard.

    public function dashboard()
    {
        return view('admin.dashboard');

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
            'ngo_name' => ['required'],
            'description' => ['required'],            
            'phone' => ['required'],
            'email' => ['required', 'email', 'unique:ngos'],
            'password' => ['required', 'min:8'],
            'postalcode' => ['required'],
            'city' => ['required']
        ]);

        $ngo = Ngo::create([
            'ngo_name' => $request->ngo_name,
            'description' => $request->description,            
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'postalcode' => $request->postalcode,
            'city' => $request->city
        ]);
        //return response()->json($ngo);
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
    
        $ngo = Ngo::where('email', $request->email)->first();
    
        if (!$ngo || !Hash::check($request->password, $ngo->password)) {
            return response([
                'message' => ['These credentials do not match our records.']
            ], 404);
        } else {
            return response([
                'message' => ['registration successful']
            ], 200);
            
        }
    
        $token = $ngo->createToken('my-app-token')->plainTextToken;
    
        $response = [
            'ngo' => $ngo,
            'token' => $token
        ];
    
        return response($response, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Ngo::find($id);
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
        Ngo::find($id);
        $request->validate([
            'ngo_name' => ['required'],
            'description' => ['required'],            
            'phone' => ['required'],
            'email' => ['required', 'email', 'unique:ngos'],
            'password' => ['required', 'min:8'],
            'postalcode' => ['required'],
            'city' => ['required']
        ]);

        $ngo = Ngo::create([
            'ngo_name' => $request->ngo_name,
            'description' => $requestion->description,            
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
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
        $ngo = Ngo::find($id);
        ngo::delete();
    }
}
