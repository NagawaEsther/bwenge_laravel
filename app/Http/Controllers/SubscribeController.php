<?php

// app/Http/Controllers/SubscribeController.php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    // Show all subscribers
    public function index()
    {
        $subscribers = Subscribe::all();
        return view('subscribers.index', compact('subscribers'));
    }

    // Show a specific subscriber
    public function show($id)
    {
        // Find the subscriber by ID
        $subscriber = Subscribe::findOrFail($id);
        return view('subscribers.show', compact('subscriber'));
    }

    // Show form to create a new subscription
    public function create()
    {
        return view('subscribers.create');
    }

    // Store new subscription
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:subscribes,email',
        ]);

        Subscribe::create($request->all());
        return redirect()->route('subscribers.index');
    }

    // Show form to edit an existing subscription
    public function edit($id)
    {
        $subscriber = Subscribe::findOrFail($id);
        return view('subscribers.edit', compact('subscriber'));
    }

    // Update an existing subscription
    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'required|email|unique:subscribes,email,' . $id,
        ]);

        $subscriber = Subscribe::findOrFail($id);
        $subscriber->update($request->all());

        return redirect()->route('subscribers.index');
    }

    // Delete a subscription
    public function destroy($id)
    {
        $subscriber = Subscribe::findOrFail($id);
        $subscriber->delete();

        return redirect()->route('subscribers.index');
    }
}
