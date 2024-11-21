<!-- resources/views/admin/news/index.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - News List</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container mx-auto p-6">
        <h1 class="text-center text-2xl font-bold mb-4">News Articles</h1>

        <!-- Display success message after news is created -->
        @if (session('success'))
            <div class="bg-green-500 text-white p-4 mb-4 rounded">
                {{ session('success') }}
            </div>
        @endif

        <!-- Button to create new news -->
        <div class="mb-4 text-right">
            <a href="{{ route('admin.news.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded">Create New News</a>
        </div>

        <!-- News Table -->
        <table class="table-auto w-full border-collapse">
            <thead>
                <tr>
                    <th class="border-b px-4 py-2 text-left">Title</th>
                    <th class="border-b px-4 py-2 text-left">Description</th>
                    <th class="border-b px-4 py-2 text-left">Created At</th>
                    <th class="border-b px-4 py-2 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($newsArticles as $news)
                    <tr>
                        <td class="border-b px-4 py-2">{{ $news->title }}</td>
                        <td class="border-b px-4 py-2">{{ Str::limit($news->description, 100) }}</td>
                        <td class="border-b px-4 py-2">{{ $news->created_at->format('F j, Y') }}</td>
                        <td class="border-b px-4 py-2">
                            <!-- Edit and Delete actions (use routes you define) -->
                            <a href="{{ route('admin.news.show', $news->id) }}" class="text-blue-500">View</a> |
                            <a href="{{ route('admin.news.edit', $news->id) }}" class="text-yellow-500">Edit</a> |
                            <form action="{{ route('admin.news.destroy', $news->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- No news available message -->
        @if ($newsArticles->isEmpty())
            <p class="text-center mt-4">No news articles available.</p>
        @endif
    </div>
</body>

</html>
