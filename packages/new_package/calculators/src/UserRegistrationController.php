<?php

namespace new_package\calculators;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;

class UserRegistrationController extends Controller
{
    //

    public function user_registration()
    {
           return view('register::index');
    }

    public function registered(Request $request)
    {
            $save_data = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->psw),
            ]);

            return redirect()->back();
    }
}