@extends('layouts.app')  <!-- Assuming you are extending a base layout -->

@section('content')
<div class="max-w-7xl mx-auto py-12">
    <h1 class="text-center text-4xl font-bold mb-8">News</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($newsArticles as $news)
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <!-- Display news image if available -->
                @if($news->image)
                    <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" class="w-full h-48 object-cover">
                @else
                    <!-- Placeholder image if no image is provided -->
                    <img src="https://via.placeholder.com/600x400" alt="{{ $news->title }}" class="w-full h-48 object-cover">
                @endif

                <div class="p-6">
                    <!-- Display publication date -->
                    <p class="text-gray-600 text-sm mb-1">Posted on: {{ $news->created_at->format('F j, Y') }}</p>
                    
                    <!-- Title and description -->
                    <h2 class="text-xl font-bold text-gray-800 mb-2">{{ $news->title }}</h2>
                    <p class="text-gray-700">{{ Str::limit($news->description, 100) }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
