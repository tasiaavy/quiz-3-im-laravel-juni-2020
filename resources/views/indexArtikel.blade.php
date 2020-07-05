@extends('layouts.master')

@section('content')
    <a href="artikel/create"><button type="button" class="btn btn-primary mb-3">Artikel baru</button></a>
    <div class="card" style="width: 100%;">
        <div class="card-header">
            <h2>Index Artikel</h2>
        </div>
        <ul class="list-group list-group-flush">
        @foreach($artikel as $key=> $artikel)
            <li class="list-group-item">
                <a href="/artikel/{{ $artikel-> id }}"><h4>{{ $artikel-> id }}. {{ $artikel-> judul }}</h4></a>
                <a href="/artikel/{{ $artikel-> id }}"><button type="button" class="btn btn-primary">Tampilkan Artikel</button></a>
                <a href="/artikel/{{ $artikel-> id }}/edit"><button type="button" class="btn btn-warning">Edit Artikel</button></a>
                <form action="/artikel/{{ $artikel-> id }}" method="POST" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus Artikel</button>
                </form>
            </li>
        @endforeach
        </ul>
    </div>
@endsection

@push('scripts')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush