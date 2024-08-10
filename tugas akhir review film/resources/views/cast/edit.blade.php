@extends('layouts.master')

@section('judul')
Detail Cast 
@endsection

@section('content')

<form method="POST" action='/cast/{{$cast->id}}'>
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
      <label for="cast-name">Cast Name</label>
      <input type="text" class="form-control" value="{{$cast->name}}" id='cast-name' name='name' placeholder="Input Cast Name" >
    </div>
    <div class="form-group">
      <label for="cast-age">Cast Age</label>
      <input type="number" name="umur" class="form-control" value="{{$cast->umur}}" id="cast-age" placeholder="Input Cast Age">
    </div>
    <div class="form-group">
        <label for="cast-bio">Bio</label>
        <textarea type="password" name="bio" class="form-control" rows=10 id="cast-bio" placeholder="Input Cast Bio" >{{$cast->bio}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection