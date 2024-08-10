@extends('layouts.master')

@section('judul')
Create New Cast 
@endsection

@section('content')

<form method="POST" action="/cast">
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
      <label for="cast-name">Cast Name</label>
      <input type="text" class="form-control" id='cast-name' name='name' placeholder="Input Cast Name" >
    </div>
    <div class="form-group">
      <label for="cast-age">Cast Age</label>
      <input type="number" name="umur" class="form-control" id="cast-age" placeholder="Input Cast Age">
    </div>
    <div class="form-group">
        <label for="cast-bio">Bio</label>
        <textarea type="password" name="bio" class="form-control" rows=10 id="cast-bio" placeholder="Input Cast Bio"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection