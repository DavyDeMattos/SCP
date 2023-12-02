<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request){
        dd($request->all());
        // https://laravel.com/docs/10.x/mail
    }
}
