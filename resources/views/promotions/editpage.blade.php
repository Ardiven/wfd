@extends('layouts.app')



@section('content')


<div class="flex justify-center mt-10">
    <form action="{{ route('promotions.editpage') }}" method="GET" 
        class="w-full max-w-3xl p-10 ">
        <div class="flex items-center space-x-2">
            <input type="text" name="query" placeholder="Search Promotion..." 
                class="w-full border px-3 py-2 rounded">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Search</button>
        </div>
    </form>
</div>

<h1 class="text-2xl font-bold mb-4">Edit School Promotion</h1>

@if($promotions->isEmpty())
    <p class="text-gray-500 mt-4">Tidak ada hasil ditemukan.</p>
@else
<div class="container">
    <div class="row">
        @foreach ($promotions as $promotion)
            <div class="col-sm-12 col-md-6 col-lg-4 p-4">
                <div class="card h-100 shadow">
                    <!-- Gambar Fit -->
                    <img src="{{ asset('storage/' . $promotion->image) }}" class="card-img-top img-fluid object-fit-cover" style="height: 200px;" alt="{{ $promotion->title }}">

                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $promotion->title }}</h5>
                        <p class="card-text flex-grow-1">{{ Str::limit($promotion->description, 100) }}</p>
                        <div class="flex justify-between items-center">
                            <a href="{{ route('promotions.edit', $promotion) }}" class="bg-yellow-500 text-white text-decoration-none px-4 py-2 rounded mr-2 hover:bg-yellow-600">Edit</a>

                            <form action="{{ route('promotions.destroy', $promotion) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Yakin ingin menghapus promosi ini?')" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endif
@endsection
