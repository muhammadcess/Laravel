@extends('layout.master')
@section('judul')
    Halaman Edit cast
@endsection
@section('content')
    <form action="/cast/{{$cast->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nama cast</label>
            <input type="text" name="nama" value="{{$cast->nama}}" class="form-control">
            @error('nama')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label>umur </label>
            <input type="number" min="1" name="umur" value="{{$cast->umur}}" class="form-control">
            @error('umur')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label>Bio</label>
            <textarea class="form-control" name="bio" rows="3" placeholder="Enter ">{{$cast->bio}}</textarea>
          </div>
            @error('bio')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
