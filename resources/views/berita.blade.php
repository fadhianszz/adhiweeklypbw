@extends('layouts.main')

@section('content')
    <div class="container mt-4">
        <h1>{{ $title }}</h1>
        @foreach ($beritas as $berita)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title"><a href="berita/{{ $berita['slug'] }}" class="text-decoration-none">{{ $berita['judul'] }}</a></h5>
                    <p class="card-text">{{ $berita['konten'] }}</p>
                    <p class="card-text"><small class="text-muted">Penulis: {{ $berita['penulis'] }}</small></p>
                </div>
            </div>
        @endforeach
@endsection