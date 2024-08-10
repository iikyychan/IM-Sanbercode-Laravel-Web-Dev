@extends('layouts.master')

@section('judul')
Detail Genre 
@endsection

@section('content')

<form method="POST" action='/genre/{{$genre->id}}'>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @method('PUT')

    @csrf
    <div class="form-group">
      <label for="genre-name">Nama</label>
      <input type="text" class="form-control" value="{{$genre->nama}}" id='genre-name' name='nama' placeholder="Input Genre Name" >
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection