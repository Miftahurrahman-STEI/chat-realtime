<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FCMController extends Controller
{
    public function index()
    {
        return response()->json(['data' => 'Hello World!']);
    }
}
