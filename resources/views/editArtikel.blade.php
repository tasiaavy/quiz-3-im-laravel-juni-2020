@extends('layouts.master')

@section('content')
    <h2>Edit Artikel</h2>
    @foreach($artikel as $key=> $artikel)
    <form action="/artikel/{{$artikel->id}}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" id="id" value="{{$artikel->id}}" name="id">
        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" class="form-control" id="judul" value="{{$artikel->judul}}" name="judul">
        </div>
        <div class="form-group">
            <label for="isi">Isi:</label>
            <textarea class="form-control" id="isi" rows="3" name="isi">{{$artikel->isi}}</textarea>
        </div>
        <div class="form-group">
            <label for="tag">Tag:</label>
            <input type="text" class="form-control" id="tag" value="{{$artikel->tag}}" name="tag">
        </div>
        <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{$artikel->user_id}}">
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    @endforeach
@endsection