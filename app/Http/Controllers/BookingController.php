<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function create(Request $request, Room $room)
    {
        $request->validate([
        'check_in'  => 'required|date|after_or_equal:today',
        'check_out' => 'required|date|after:check_in',
    ]);

    

        $checkIn  = $request->query('check_in');
        $checkOut = $request->query('check_out');
        $guests   = $request->query('guests', 1);

        $nights = (int) \Carbon\Carbon::parse($checkIn)->diffInDays(\Carbon\Carbon::parse($checkOut));
        $basePrice  = $room->price_per_night * $nights;
        $serviceFee = 50;
        $taxAmount  = round($basePrice * 0.06, 2);
        $totalPrice = $basePrice + $serviceFee + $taxAmount;

        return view('booking', compact(
            'room', 'checkIn', 'checkOut', 'guests', 'nights',
            'basePrice', 'serviceFee', 'taxAmount', 'totalPrice'
        ));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'room_id'      => 'required|exists:rooms,id',
            'first_name'   => 'required|string|max:255',
            'last_name'    => 'required|string|max:255',
            'email'        => 'required|email',
            'phone'        => 'required|string|max:20',
            'check_in'     => 'required|date',
            'check_out'    => 'required|date|after:check_in',
            'guests_count' => 'required|integer|min:1',
            'nights'       => 'required|integer|min:1',
            'base_price'   => 'required|numeric',
            'service_fee'  => 'required|numeric',
            'tax_amount'   => 'required|numeric',
            'total_price'  => 'required|numeric',
        ]);

        $booking = Booking::create([
            ...$validated,
            'user_id' => auth()->id(),
            'status'  => 'confirmed',
        ]);

        $booking->room->update(['status' => 'booked']);

        return redirect()->route('booking.confirmation', $booking);
    }


    public function confirmation(Booking $booking)
    {
        abort_unless($booking->user_id === auth()->id(), 403);
        return view('booking_confirmation', compact('booking'));
    }

    public function dashboard()
    {
        $bookings = auth()->user()->bookings()->with('room')->latest()->get();
        $upcoming = $bookings->where('status', 'confirmed')
            ->where('check_in', '>=', now())
            ->first();

        return view('dashboard.dashboard', compact('bookings', 'upcoming'));
    }

    public function cancel(Booking $booking)
    {
        abort_unless($booking->user_id === auth()->id(), 403);

        $booking->update(['status' => 'cancelled']);
        $booking->room->update(['status' => 'available']);

        return back()->with('success', 'Booking cancelled.');
    }
}
