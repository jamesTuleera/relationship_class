<?php

namespace App\Http\Controllers;

use App\Models\NextOfKin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NextOfKinController extends Controller
{
    public function create(Request $request)
    {
        $field = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'relationship' => 'required',
        ]);

        $field['user_id'] = Auth::user()->id;


        NextOfKin::create($field);


    }

    public function index()
    {
        // $user = User::with('nextOfKin')->where('id', Auth::user()->id)->get();

        // return response()->json($user);


        $nok = NextOfKin::with('user')->where('user_id', Auth::user()->id)->first();

        return response()->json($nok->user->name);




//
        // return view('next_of_kin', ['user' => $user]);

    }
}
