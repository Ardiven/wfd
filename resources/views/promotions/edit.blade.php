@extends('layouts.app')



@section('content')


<div class="flex justify-center mt-10">
    <form action="{{ route('promotions.edit') }}" method="GET" 
        class="w-full max-w-3xl p-10 ">
        <div class="flex items-center space-x-2">
            <input type="text" name="query" placeholder="Cari promosi..." 
                class="w-full border px-3 py-2 rounded">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Cari</button>
        </div>
    </form>
</div>



@if($promotions->isEmpty())
    <p class="text-gray-500 mt-4">Tidak ada hasil ditemukan.</p>
@else
    <ul class="mt-4">
        @foreach($promotions as $promotion)
        <div onclick="window.location='{{ route('promotions.show', $promotion) }}';" 
    class="cursor-pointer border-b py-2 flex justify-between items-center hover:bg-gray-100 transition">
    
    <!-- Tulisan (Kiri) -->
    <a href="{{ route('promotions.show', $promotion) }}" class="text-blue-600 text-2xl">
        {{ $promotion->title }}
    </a>

    <!-- Gambar (Kanan) -->
    <img src="{{ asset('storage/' . $promotion->image) }}" class="w-32 h-32 object-cover rounded-lg">
</div>


        @endforeach
    </ul>
@endif
@endsection
