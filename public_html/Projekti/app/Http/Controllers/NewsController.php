<?php

// app/Http/Controllers/NewsController.php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    // Show the list of news articles in the admin panel
    public function index()
    {
        $newsArticles = News::orderBy('created_at', 'desc')->get();
        return view('admin.news.index', compact('newsArticles'));
    }

    // Show the form to create a new news article
    public function create()
    {
        return view('admin.news.create');
    }

    // Store a newly created news article
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $news = new News();
        $news->title = $request->title;
        $news->description = $request->description;

        if ($request->hasFile('image')) {
            $news->image = $request->file('image')->store('news_images', 'public');
        }

        $news->save();
        return redirect()->route('admin.news.index')->with('success', 'News article created successfully!');
    }

    // Show the form to edit a news article
    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('admin.news.edit', compact('news'));
    }

    // Update an existing news article
    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);
    
        // Validate the input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);
    
        // Update the news article
        $news->title = $request->title;
        $news->description = $request->description;
    
        // Handle image upload if provided
        if ($request->hasFile('image')) {
            $news->image = $request->file('image')->store('news_images', 'public');
        }
    
        // Save the changes
        $news->save();
    
        return redirect()->route('admin.news.index')->with('success', 'News article updated successfully!');
    }
    

    // Show a single news article on the front-end
    public function show($id)
    {
        $news = News::findOrFail($id);
        return view('news.show', compact('news'));
    }

    // Delete a news article
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        // Optionally delete the image if it exists
        if ($news->image) {
            \Storage::delete('public/' . $news->image);
        }

        return redirect()->route('admin.news.index')->with('success', 'News article deleted successfully!');
    }
}
