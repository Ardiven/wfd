@extends('layouts.app')

@section('title', 'Tambah Promosi')

@section('content')

<form action="{{ route('promotions.edit') }}" method="GET">
    <input type="text" name="query" placeholder="Cari promosi..." class="border px-3 py-2 rounded">
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Cari</button>
</form>

@if($promotions->isEmpty())
    <p class="text-gray-500 mt-4">Tidak ada hasil ditemukan.</p>
@else
    <ul class="mt-4">
        @foreach($promotions as $promotion)
            <li class="border-b py-2">
                <a href="{{ route('promotions.show', $promotion) }}" class="text-blue-600 hover:underline">
                    {{ $promotion->title }}
                </a>
            </li>
        @endforeach
    </ul>
@endif
@endsection
