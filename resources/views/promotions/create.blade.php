@extends('layouts.app')

@section('title', 'Tambah Promosi')

@section('content')
    <div class="max-w-2xl mx-auto bg-white p-6 rounded shadow-md">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Tambah Promosi</h1>

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

        <form action="{{ route('promotions.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf

            <div>
                <label for="title" class="block font-medium text-gray-700">Judul</label>
                <input type="text" id="title" name="title" class="w-full p-2 border border-gray-300 rounded" value="{{ old('title') }}" required>
            </div>

            <div>
                <label for="description" class="block font-medium text-gray-700">Deskripsi</label>
                <textarea id="description" name="description" class="w-full p-2 border border-gray-300 rounded" required>{{ old('description') }}</textarea>
            </div>

            <div>
                <label for="image" class="block font-medium text-gray-700">Gambar (opsional)</label>
                <input type="file" id="image" name="image" class="w-full p-2 border border-gray-300 rounded">
            </div>

            <div class="flex justify-between items-center">
                <a href="{{ route('promotions.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 text-decoration-none">Kembali</a>
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Simpan</button>
            </div>
        </form>
    </div>
@endsection
