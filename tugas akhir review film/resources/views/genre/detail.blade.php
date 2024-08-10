@extends('layouts.master')

@section('judul')
List Movie by Genre
@endsection

@section('content')
<h1>{{$genre->nama}}</h1>
<div class="row">
    @forelse ($genre->listMovie as $item )
    <div class="col-4">
        <div class="card" >
            <img src="{{asset('/uploads/'.$item->poster)}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h2 class="card-title">{{$item->judul}}</h2>
              <p class="card-text"></p>
              <a href="{{ url('/film/' . $item->id) }}" class="btn btn-primary btn-block">Details</a>
            </div>
          </div>
    </div>   
    @empty
        <p>No movie details available.</p>
    @endforelse
</div>




@endsection