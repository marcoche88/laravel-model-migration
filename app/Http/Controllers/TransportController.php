<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transport;

class TransportController extends Controller
{
    public function index()
    {
        $transports = Transport::all();
        return view('transport', compact('transports'));
    }
}
