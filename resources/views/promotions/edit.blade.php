@extends('layouts.app')

@section('title', 'Edit Promosi')

@section('content')
    <div class="max-w-2xl mx-auto bg-white p-6 rounded shadow-md">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Edit Promosi</h1>

        @if ($errors->any())
            <div class="mb-4 p-4 bg-red-100 text-red-600 rounded">
                <strong>Oops! Ada kesalahan:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('promotions.update', $promotion->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label for="title" class="block font-medium text-gray-700">Judul</label>
                <input type="text" id="title" name="title" class="w-full p-2 border border-gray-300 rounded" value="{{ old('title', $promotion->title) }}" required>
            </div>

            <div>
                <label for="description" class="block font-medium text-gray-700">Deskripsi</label>
                <textarea id="description" name="description" class="w-full p-2 border border-gray-300 rounded" required>{{ old('description', $promotion->description) }}</textarea>
            </div>

            <div>
                <label for="image" class="block font-medium text-gray-700">Gambar (opsional)</label>
                @if ($promotion->image)
                    <img src="{{ asset('storage/' . $promotion->image) }}" alt="{{ $promotion->title }}" class="w-full h-48 object-cover rounded-lg mb-2">
                @endif
                <input type="file" id="image" name="image" class="w-full p-2 border border-gray-300 rounded">
            </div>

            <div class="flex justify-between items-center">
                <button type="button" onclick="{{ route('promotions.index') }}" class="text-blue-500 hover:underline">Kembali</button>
                <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded">Update</button>
            </div>
        </form>
    </div>
@endsection
