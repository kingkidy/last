<?php

namespace App\Http\Controllers;
use App\Models\bookings;

use Illuminate\Http\Request;

class BookingsController extends Controller
{
    public function index()
{
    $data = bookings::all();
    return view('dashboard', compact('data'));
}

}
