@extends('layouts.master')

@section('judul')
Detail Film 
@endsection

@section('content')
<h1>{{$film->judul}}</h1>
<h3>{{$film->tahun}}</h3>
<p>{{$film->ringkasan}}</p>
<img src="{{asset('/uploads/'.$film->poster)}}" class="img-fluid" width="10%" alt="Responsive image">
<hr>
<h3>Reviews</h3>

@forelse ($film->kritik as $item)
<div class="card">
    <div class="card-header">
      {{$item->owner->name}}
    </div>
    <div class="card-body">
      <h5 class="card-title">Review</h5>
      <p class="card-text">{{$item->content}}</p>
      <h5 class="card-title">Score</h5>
      <p class="card-text">{{$item->point}}</p>
    </div>
  </div>

@empty
    <h4>Belum ada review</h4>
@endforelse

<hr>
<form action="{{ route('kritik.store', $film->id) }}" method="POST">
    @csrf
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="form-group">
        <label>Reviews</label>
        <textarea name="content" class="form-control" rows=10></textarea>
    </div>
    <div class="form-group">
        <label>Score</label>
        <input type="number" name="point" class="form-control" placeholder="Score">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection