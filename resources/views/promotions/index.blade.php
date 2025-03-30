@extends('layouts.app')

@section('title', 'Daftar Promosi')

@section('content')
<h1 class="text-2xl font-bold mb-4">Daftar Promosi</h1>
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
                        <a href="{{ route('promotions.show', $promotion) }}" class="btn btn-primary mt-auto">Show</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>



@endsection
