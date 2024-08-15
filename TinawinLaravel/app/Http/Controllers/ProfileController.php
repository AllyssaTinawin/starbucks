<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function index() 
    {
        $email = "tinawinallyssa@gmail.com";
        $name ="Ally";
        return view('user.profile')
            ->with("email", $email)
            ->with("name", $name);
    }
}
