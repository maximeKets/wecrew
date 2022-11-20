<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreateProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function show1()
        {
            $user = Auth::user();

            return view('createprofile.step1', compact('user'));
        }

        public function store1(Request $request)
        {
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
                'password_confirmation' => 'required',
            ]);

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();

            return redirect()->route('createprofile.step2');
        }

        public function show2()
        {
            return view('createprofile.step2');
        }

        public function store2(Request $request)
        {
        }

        public function show3()
        {
            return view('createprofile.step3');
        }

        public function store3(Request $request)
        {
        }

}
