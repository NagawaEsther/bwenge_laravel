<?php

// app/Http/Controllers/AdvertController.php

namespace App\Http\Controllers;

use App\Models\Advert;
use Illuminate\Http\Request;

class AdvertController extends Controller
{
    // Show all adverts (You can create a view for this if needed)
    public function index()
    {
        $adverts = Advert::all(); // Fetch all adverts
        return view('adverts.index', compact('adverts'));
    }

    // Show a single advert
    public function show($id)
    {
        // Find the advert by ID or fail with 404
        $advert = Advert::findOrFail($id);

        // Return a view with the advert data
        return view('adverts.show', compact('advert'));
    }

    // Show form to create a new advert
    public function create()
    {
        return view('adverts.create');
    }

    // Store a new advert
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'status' => 'required|in:active,inactive',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
        ]);

        $advert = new Advert();
        $advert->title = $request->title;
        $advert->status = $request->status;
        $advert->start_date = $request->start_date;
        $advert->end_date = $request->end_date;

        // Handle file upload for image
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('adverts', 'public');
            $advert->image = $imagePath;
        }

        $advert->save();

        return redirect()->route('adverts.index')->with('success', 'Advert created successfully!');
    }

    // Show form to edit an existing advert
    public function edit($id)
    {
        $advert = Advert::findOrFail($id);
        return view('adverts.edit', compact('advert'));
    }

    // Update an existing advert
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'status' => 'required|in:active,inactive',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
        ]);

        $advert = Advert::findOrFail($id);
        $advert->title = $request->title;
        $advert->status = $request->status;
        $advert->start_date = $request->start_date;
        $advert->end_date = $request->end_date;

        // Handle file upload for image
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('adverts', 'public');
            $advert->image = $imagePath;
        }

        $advert->save();

        return redirect()->route('adverts.index')->with('success', 'Advert updated successfully!');
    }

    // Delete an advert
    public function destroy($id)
    {
        $advert = Advert::findOrFail($id);
        $advert->delete();

        return redirect()->route('adverts.index')->with('success', 'Advert deleted successfully!');
    }
}
