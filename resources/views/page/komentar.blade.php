@extends('layout.app')

@section('content')
<!-- komentarrr -->
<form method="POST" action="{{ route('komentar.store', $komentar->id) }}">
    @csrf
    <textarea name="content" rows="3" placeholder="Tambahkan komentar"></textarea>
    <button type="submit" class="btn btn-succes">Komentar</button>
</form>
<!-- daftar komentar -->
@foreach ($komentar->photoKomentar as $k)
    <p>{{ $k->user->name}}: {{ $komentar->content }}</p>
@endforeach
@endsection