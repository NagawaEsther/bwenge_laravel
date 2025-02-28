<?php

namespace App\Http\Controllers;

use App\Models\Advert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;


class AdvertController extends Controller
{
    public function index()
    {
        $adverts = Advert::all();
        return view('adverts.index', compact('adverts'));
    }

    public function show($id)
    {
        $advert = Advert::findOrFail($id);
        return view('adverts.show', compact('advert'));
    }

    public function create()
    {
        return view('adverts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:active,inactive',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
        ]);

        $advert = new Advert();
        $advert->title = $request->title;
        $advert->status = $request->status;

        $advert->start_date = $request->start_date;
        $advert->end_date = $request->end_date;

       
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/adverts');
            $advert->image = str_replace('public/', '', $imagePath);
        }

        $advert->save();

        return redirect()->route('adverts.index')->with('success', 'Advert created successfully!');
    }

    public function edit($id)
    {
        $advert = Advert::findOrFail($id);
        return view('adverts.edit', compact('advert'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:active,inactive',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
        ]);

        $advert = Advert::findOrFail($id);
        $advert->title = $request->title;
        $advert->status = $request->status;

        $advert->start_date = $request->start_date;
        $advert->end_date = $request->end_date;

        
        if ($request->hasFile('image')) {
            if ($advert->image) {
                Storage::delete('public/' . $advert->image);
            }
            $imagePath = $request->file('image')->store('public/adverts');
            $advert->image = str_replace('public/', '', $imagePath);
        }

        $advert->save();

        return redirect()->route('adverts.index')->with('success', 'Advert updated successfully!');
    }

    public function destroy($id)
    {
        $advert = Advert::findOrFail($id);
        if ($advert->image) {
            Storage::delete('public/' . $advert->image);
        }
        $advert->delete();

        return redirect()->route('adverts.index')->with('success', 'Advert deleted successfully!');
    }
}
