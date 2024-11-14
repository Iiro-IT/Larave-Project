<!-- resources/views/admin/news/create.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create News Article</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container mx-auto p-6">
        <h1 class="text-center text-2xl font-bold mb-4">Create New News Article</h1>

        <!-- Display validation errors -->
        @if ($errors->any())
            <div class="bg-red-500 text-white p-4 mb-4 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Create News Form -->
        <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-lg">Title</label>
                <input type="text" name="title" id="title" class="w-full p-2 border border-gray-300 rounded" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-lg">Description</label>
                <textarea name="description" id="description" class="w-full p-2 border border-gray-300 rounded" rows="5" required></textarea>
            </div>

            <div class="mb-4">
                <label for="image" class="block text-lg">Image (optional)</label>
                <input type="file" name="image" id="image" class="w-full p-2 border border-gray-300 rounded">
            </div>

            <div class="mb-4">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Create News Article</button>
            </div>
        </form>
    </div>
</body>

</html>
