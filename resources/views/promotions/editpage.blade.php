@extends('layouts.app')

@section('title', $promotion->title)

@section('content')
    <div class="max-w-2xl mx-auto bg-white p-6 rounded shadow-md">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $promotion->title }}</h1>

        @if ($promotion->image)
            <img src="{{ asset('storage/' . $promotion->image) }}" alt="{{ $promotion->title }}" class="w-full h-64 object-cover rounded-lg mb-4">
        @endif

        <p class="text-gray-600 mb-4">{{ $promotion->description }}</p>

        <div class="flex justify-between items-center">
            <a href="{{ route('promotions.edit') }}" class="bg-blue-500 text-white px-4 py-2 rounded text-decoration-none hover:bg-blue-600">Kembali</a>

            <div>
                <a href="{{ route('promotions.edit', $promotion) }}" class="bg-yellow-500 text-white text-decoration-none px-4 py-2 rounded mr-2 hover:bg-yellow-600">Edit</a>

                <form action="{{ route('promotions.destroy', $promotion) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin ingin menghapus promosi ini?')" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700">
                        Hapus
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
