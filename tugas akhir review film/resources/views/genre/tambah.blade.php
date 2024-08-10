@extends('layouts.master')

@section('judul')
Create New Cast 
@endsection

@section('content')

<form method="POST" action="/genre">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @csrf
    <div class="form-group">
      <label for="genre-name">Genre</label>
      <input type="text" class="form-control" id='genre-name' name='nama' placeholder="Input genre" >
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection