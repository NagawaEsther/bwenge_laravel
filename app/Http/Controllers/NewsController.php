<?php

// app/Http/Controllers/NewsController.php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    // Show all news
    public function index()
    {
        $news = News::all();
        return view('news.index', compact('news'));
    }

    // Show a specific news article
    public function show($id)
    {
        // Find the news article by ID
        $news = News::findOrFail($id);

        // Return the view to show the article
        return view('news.show', compact('news'));
    }

    // Show form to create a new news article
    public function create()
    {
        return view('news.create');
    }

    // Store new news article
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image',
            'published_at' => 'nullable|date',
            'category' => 'required|string', // Add category validation
        ]);

        // Generate excerpt from content (first 100 characters)
        $excerpt = substr($request->content, 0, 100);

        // Create the news article
        News::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $request->image,
            'published_at' => $request->published_at,
            'status' => $request->status,
            'category' => $request->category,
            'excerpt' => $excerpt, // Store the excerpt
        ]);

        return redirect()->route('news.index');
    }

    // Show form to edit an existing news article
    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('news.edit', compact('news'));
    }

    // Update an existing news article
    public function update(Request $request, $id)
    {
        // Validate the incoming request
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image',
            'published_at' => 'nullable|date',
            'category' => 'required|string', // Add category validation
        ]);

        // Find the news article by ID
        $news = News::findOrFail($id);

        // Generate excerpt from content (first 100 characters)
        $excerpt = substr($request->content, 0, 100);

        // Update the news article
        $news->update([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $request->image,
            'published_at' => $request->published_at,
            'status' => $request->status,
            'category' => $request->category,
            'excerpt' => $excerpt, // Store the updated excerpt
        ]);

        return redirect()->route('news.index');
    }

    // Delete a news article
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();
        
        return redirect()->route('news.index');
    }
}
