<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class ContactController extends Controller
{
    //

    public function store(Request $request){

        $fields = $request->validate([
            'phone' => 'required',
            'address' => 'required',
        ]);

        $fields['user_id'] = Auth::id();

        Contact::create($fields);



        return redirect()->route('contact');

    }

    public function get(){
        $users = User::with('contact')->get();

        // dd($users);
        return  Inertia::render('Admin', ['users' => $users]);
    }


    public function delete($id){
        // sleep(1);
        Contact::findOrFail($id)->delete();
        return back()->with('successfully deleted');
    }
}
