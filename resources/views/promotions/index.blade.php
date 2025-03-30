@extends('layouts.app')

@section('title', 'Daftar Promosi')

@section('content')
<h1 class="text-2xl font-bold mb-4">Daftar Promosi</h1>
<a href="{{ route('promotions.create') }}" class="bg-blue-500 text-white p-2 rounded">Tambah Promosi</a>
<ul class="mt-4">
    @foreach ($promotions as $promotion)
        <li class="border-b p-2">
            <a href="{{ route('promotions.show', $promotion) }}" class="text-blue-500">{{ $promotion->title }}</a>
        </li>
    @endforeach
</ul>
@endsection
