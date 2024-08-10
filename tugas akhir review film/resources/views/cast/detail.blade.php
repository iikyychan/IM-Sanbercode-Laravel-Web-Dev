@extends('layouts.master')

@section('judul')
Detail Cast 
@endsection

@section('content')

@if($cast)
    <h1>{{$cast->name}}</h1>
    <p>{{$cast->bio}}</p>
@else
    <p>No cast details available.</p>
@endif

@endsection