<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function formPage()
    {
        return view('request.form');
    }

    public function fileUpload(Request $request)
    {
        if ($request->hasFile('picture')) {
            dd($request->file('picture'));
        }
    }
}