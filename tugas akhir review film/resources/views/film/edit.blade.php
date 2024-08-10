@extends('layouts.master')

@section('judul')
Detail Genre 
@endsection

@section('content')

<form method="POST" action='/film/{{$film->id}}' enctype="multipart/form-data">
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
      <label>Judul</label>
      <input type="text" class="form-control" value="{{$film->judul}}" name='judul'>
    </div>
    <div class="form-group">
        <label>Ringkasan</label>
        <textarea class="form-control" name='ringkasan'>{{$film->judul}}</textarea>
      </div>
      <div class="form-group">
        <label>Tahun</label>
        <input type="number" class="form-control" value="{{$film->tahun}}" name='tahun'>
      </div>
      <div class="form-group">
        <label for="filmposter">Poster</label>
        <input type="file" value="{{$film->poster}}" class="form-control" id='filmposter' name='poster'>
      </div>
      <div class="form-group">
        <label>Genre</label>
        <select name="genre_id" class="form-control">
            <option value="">---Pilih Genre---</option>
            @forelse ($genre as $item)
                <option value="{{$item->id}}" selected>{{$item->nama}}</option>>
            @empty
            <option value="{{$item->id}}">{{$item->nama}}</option>>
            @endforelse
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection