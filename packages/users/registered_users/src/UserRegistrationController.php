<?php

namespace users\signup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;

class UserRegistrationController extends Controller
{
    //

    public function user_registration()
    {
           return view('register::index');
    }
}