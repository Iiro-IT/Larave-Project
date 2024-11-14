<?php

// app/Http/Controllers/NewsController.php
namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the news articles.
     */
    public function index()
    {
        // Get all news articles ordered by latest first
        $newsArticles = News::orderBy('created_at', 'desc')->get();

        // Return a view with the news articles
        return view('news.index', compact('newsArticles'));
    }

    /**
     * Show the form for creating a new news article.
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created news article in storage.
     */
    public function store(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|max:2048', // Optional image upload
        ]);

        // Store the news article
        $news = new News();
        $news->title = $request->title;
        $news->description = $request->description;

        // Handle image upload
        if ($request->hasFile('image')) {
            $news->image = $request->file('image')->store('news_images', 'public');
        }

        $news->save();

        return redirect()->route('news.index')->with('success', 'News article created successfully!');
    }

    /**
     * Display the specified news article.
     */
    public function show(News $news)
    {
        return view('news.show', compact('news'));
    }
}

