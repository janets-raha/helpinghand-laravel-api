<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function user(Request $request)
    {
        return $request->user();
    }

     
    public function show($id)
    {
        return User::find($id);
    }

}
