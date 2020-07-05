<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErdController extends Controller
{
    //
    public function showimage() {
        return view('content.erd');
    }
}
