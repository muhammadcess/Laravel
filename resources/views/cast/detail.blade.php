@extends('layout.master')
@section('judul')
    Detail cast
@endsection
@section('content')

<h1>{{$cast->nama}}</h1>
<h1>{{$cast->umur}}</h1>
<h1>{{$cast->bio}}</h1>
<a href="/cast" class="btn btn-secondary btn-sm">kembali</a>





@endsection

