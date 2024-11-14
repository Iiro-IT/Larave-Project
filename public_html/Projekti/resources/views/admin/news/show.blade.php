<!-- resources/views/admin/news/show.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View News - {{ $news->title }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-4">{{ $news->title }}</h1>
        <p class="text-gray-600 mb-4">Posted on: {{ $news->created_at->format('F j, Y') }}</p>

        <!-- News image if available -->
        @if ($news->image)
            <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" class="w-full h-64 object-cover mb-4">
        @endif

        <div class="text-lg text-gray-800 mb-6">
            <p>{{ $news->description }}</p>
        </div>

        <!-- Back to News List -->
        <a href="{{ route('admin.news.index') }}" class="text-blue-500">Back to News List</a>
    </div>
</body>

</html>
