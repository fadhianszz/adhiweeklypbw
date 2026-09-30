@extends('layouts.main')

@section('content')
    <h1>HALAMAN PROFILE</h1>
    <p>Nama     : {{ $name }}</p>
    <p>NIM      : {{ $nim }}</p>
    <p>Prodi    : {{ $prodi }}</p>
    <img src="{{ $image }}" alt="Fadhil Anshor" width="150px">
@endsection