<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Travel;

class TravelController extends Controller
{
    public function index()
    {
        $travels = Travel::all();
        return view('travel', compact('travels'));
    }
}
