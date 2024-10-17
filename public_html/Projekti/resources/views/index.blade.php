<!-- resources/views/products/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-8">
    <h1 class="text-2xl font-semibold">Product List</h1>

    @if (session('success'))
        <div class="bg-green-500 text-white p-4 rounded">
            {{ session('success') }}
        </div>
    @endif

    <table class="min-w-full border-collapse border border-gray-200">
        <thead>
            <tr>
                <th class="border border-gray-300 p-4">Product Name</th>
                <th class="border border-gray-300 p-4">Price</th>
                <th class="border border-gray-300 p-4">Image</th>
                <th class="border border-gray-300 p-4">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td class="border border-gray-300 p-4">{{ $product->name }}</td>
                    <td class="border border-gray-300 p-4">${{ number_format($product->price, 2) }}</td>
                    <td class="border border-gray-300 p-4">
                        @if ($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="h-16">
                        @endif
                    </td>
                    <td class="border border-gray-300 p-4">
                        <a href="#" class="text-blue-500 hover:underline">Edit</a>
                        <a href="#" class="text-red-500 hover:underline">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
