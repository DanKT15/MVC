<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerName extends Controller
{

    public function show()
    {
        return view('form');
    }

    public function post(Request $request)
    {
        $ten = $request->input('username');
        $pass = $request->input('password');
        return view('showform', compact('ten', 'pass'));
    }

}

?>