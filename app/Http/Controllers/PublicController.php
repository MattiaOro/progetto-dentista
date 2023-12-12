<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller

// **rotta homepage

{
    public function welcome() {
        return view('welcome');
}

// **rotta contattaci


    public function contatti() {
        return view('contatti');
}

// ** rotta di raccolta info mail

public function submit(Request $request) {
    $name = $request->input('username');
    $mail = $request->input('email');
    $description = $request->input('description');

    Mail::to('hack99email.it')->send(new contatti($username,$email,$description));
}

}


