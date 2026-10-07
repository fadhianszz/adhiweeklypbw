@extends('layouts.main')

@section('content')
    <div class="text-center mt-4">
    <h1>{{ $singlenews['judul'] }}</h1>
    <h5>{{ $singlenews['penulis'] }}</h5>
    </div>
    <div class="text-justify mt-4">
        <p>{{ $singlenews['konten'] }}</p>
    </div>
    <a href="/berita" class="btn btn-primary mt-4">Kembali</a>
@endsection