<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
   public function index(Request $request)
    {
        $categories = Category::all();   // <-- check this line exists

        $rooms = Room::with('category')
            ->where('status', 'available')
            ->when($request->search, fn($q) => $q->where('title', 'like', "%{$request->search}%"))
            ->when($request->filled('category'), fn($q) => $q->whereIn('category_id', $request->category))
            ->paginate(6)
            ->withQueryString();

        return view('rooms', compact('rooms', 'categories'));
    }
    public function show(Room $room)
    {
        return view('room-details', compact('room'));
    }
}
