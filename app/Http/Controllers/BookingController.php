<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Package;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'customer_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'contact_number' => 'nullable|string|max:50',
            'event_type' => 'nullable|string|max:255',
            'message' => 'nullable|string',
            'package_id' => 'nullable|exists:packages,id',
        ]);

        Booking::create($data);

        return view('bookings.thankyou');
    }
}
