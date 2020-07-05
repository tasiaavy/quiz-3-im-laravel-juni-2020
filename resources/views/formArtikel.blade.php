@extends('layouts.master')

@section('content')
    <h2>Artikel Baru</h2>
    <form action="/artikel" method="POST">
        @csrf
        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" class="form-control" id="judul" name="judul">
        </div>
        <div class="form-group">
            <label for="isi">Isi:</label>
            <textarea class="form-control" id="isi" rows="3" name="isi"></textarea>
        </div>
        <div class="form-group">
            <label for="tag">Tag:</label>
            <input type="text" class="form-control" id="tag" name="tag">
        </div>
        <input type="hidden" class="form-control" id="user_id" name="user_id" value="1">
        <button type="submit" class="btn btn-primary">Selesai</button>
    </form>
@endsection