@extends('layouts.master')

@section('content')
    @foreach($artikel as $key=> $artikel)
    <div class="card" style="width: 100%;">
        <div class="card-body">
            <h5 class="card-title">judul: {{ $artikel-> judul }}</h5>
            <p class="card-text">
                slug: {{ $artikel-> slug }}<br>
                {{ $artikel-> isi }} <br>
                <button type="button" class="btn btn-info">{{ $artikel-> tag }}</button>
            </p>
        </div>
    </div>
    @endforeach
    <div class="mt-3">
        <a href="/artikel/{{ $artikel-> id }}/edit"><button type="button" class="btn btn-warning">Edit Artikel</button></a>
        <form action="/artikel/{{ $artikel-> id }}" method="POST" style="display: inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Hapus Artikel</button>
        </form>
        <a href="/artikel"><button type="button" class="btn btn-light">Balik ke List Artikel</button></a>
    </div>
@endsection