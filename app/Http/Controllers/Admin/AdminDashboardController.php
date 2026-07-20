<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_rooms' => Room::count(),
            'available_rooms' => Room::where('status', 'active')->count(),
            'booked_rooms' => Room::where('status', 'maintenance')->count(),
            'total_categories' => Category::count(),
        ];
        return view('admin.dashboard', compact('stats'));
    }

    public function rooms()
    {
        $rooms = Room::with('category')->get();
        return view('admin.rooms.index', compact('rooms'));
    }

    public function createRoom()
    {
        $categories = Category::all();
        return view('admin.rooms.create', compact('categories'));
    }

    public function storeRoom(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'price_per_night' => 'required|numeric|min:0',
            'status' => 'required|in:active,inactive,maintenance',
            'short_description' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'size_sqm' => 'nullable|numeric|min:0',
            'size_sqft' => 'nullable|numeric|min:0',
            'max_guests' => 'nullable|integer|min:1',
            'bed_type' => 'nullable|string|max:255',
            'view_type' => 'nullable|string|max:255',
            'badge' => 'nullable|string|max:255',
            'is_featured' => 'nullable|boolean',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $validated['slug'] = $this->uniqueSlug($validated['title']);
        $validated['is_featured'] = $request->boolean('is_featured');

        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail'] = $request->file('thumbnail')->store('rooms', 'public');
        }

        Room::create($validated);
        return redirect()->route('admin.rooms')->with('success', 'Room created successfully!');
    }

    public function editRoom(Room $room)
    {
        $categories = Category::all();
        return view('admin.rooms.edit', compact('room', 'categories'));
    }

    public function updateRoom(Request $request, Room $room)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'price_per_night' => 'required|numeric|min:0',
            'status' => 'required|in:active,inactive,maintenance',
            'short_description' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'size_sqm' => 'nullable|numeric|min:0',
            'size_sqft' => 'nullable|numeric|min:0',
            'max_guests' => 'nullable|integer|min:1',
            'bed_type' => 'nullable|string|max:255',
            'view_type' => 'nullable|string|max:255',
            'badge' => 'nullable|string|max:255',
            'is_featured' => 'nullable|boolean',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $validated['is_featured'] = $request->boolean('is_featured');

        // Only regenerate the slug if the title actually changed.
        if ($validated['title'] !== $room->title) {
            $validated['slug'] = $this->uniqueSlug($validated['title'], $room->id);
        }

        if ($request->hasFile('thumbnail')) {
            if ($room->thumbnail) {
                Storage::disk('public')->delete($room->thumbnail);
            }
            $validated['thumbnail'] = $request->file('thumbnail')->store('rooms', 'public');
        }

        $room->update($validated);
        return redirect()->route('admin.rooms')->with('success', 'Room updated successfully!');
    }

    public function deleteRoom(Room $room)
    {
        if ($room->thumbnail) {
            Storage::disk('public')->delete($room->thumbnail);
        }
        $room->delete();
        return redirect()->route('admin.rooms')->with('success', 'Room deleted successfully!');
    }

    public function categories()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function storeCategory(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:categories',
            'description' => 'nullable|string',
        ]);

        $validated['slug'] = $this->uniqueCategorySlug($validated['name']);

        Category::create($validated);
        return redirect()->route('admin.categories')->with('success', 'Category created!');
    }

    public function updateCategory(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name,' . $category->id,
            'description' => 'nullable|string',
        ]);

        if ($validated['name'] !== $category->name) {
            $validated['slug'] = $this->uniqueCategorySlug($validated['name'], $category->id);
        }

        $category->update($validated);
        return redirect()->route('admin.categories')->with('success', 'Category updated!');
    }

    public function deleteCategory(Category $category)
    {
        if ($category->rooms()->count() > 0) {
            return redirect()->route('admin.categories')->with('error', 'Cannot delete category with rooms.');
        }
        $category->delete();
        return redirect()->route('admin.categories')->with('success', 'Category deleted!');
    }

    /**
     * Generate a unique slug for a room, ignoring the room's own id on update.
     */
    private function uniqueSlug(string $title, ?int $ignoreId = null): string
    {
        $slug = Str::slug($title);
        $original = $slug;
        $i = 1;

        while (
            Room::where('slug', $slug)
                ->when($ignoreId, fn ($query) => $query->where('id', '!=', $ignoreId))
                ->exists()
        ) {
            $slug = "{$original}-{$i}";
            $i++;
        }

        return $slug;
    }

    /**
     * Generate a unique slug for a category, ignoring the category's own id on update.
     */
    private function uniqueCategorySlug(string $name, ?int $ignoreId = null): string
    {
        $slug = Str::slug($name);
        $original = $slug;
        $i = 1;

        while (
            Category::where('slug', $slug)
                ->when($ignoreId, fn ($query) => $query->where('id', '!=', $ignoreId))
                ->exists()
        ) {
            $slug = "{$original}-{$i}";
            $i++;
        }

        return $slug;
    }
}
