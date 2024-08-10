@extends('layouts.master')

@section('judul')
Create New Film
@endsection

@section('content')

<form method="POST" action="/film" enctype="multipart/form-data">
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
      <label for="judul-film">Judul</label>
      <input type="text" class="form-control" id='judul-film' name='judul' placeholder="Input Cast Name" >
    </div>
    <div class="form-group">
        <label for="story">Ringkasan</label>
        <textarea type="password" name="ringkasan" class="form-control" rows=10 id="story" placeholder="Input Movie Story"></textarea>
    </div>
    <div class="form-group">
      <label for="year">Tahun</label>
      <input type="number" name="tahun" class="form-control" id="year" placeholder="Input Year release">
    </div>
    <div class="form-group">
        <label for="filmposter">Poster</label>
        <input type="file" class="form-control" id='filmposter' name='poster'>
    </div>
        <div class="form-group">
        <label>Genre</label>
        <select name="genre_id" class="form-control">
            <option value="">---Pilih Genre---</option>
            @forelse ($genre as $item)
                <option value="{{$item->id}}">{{$item->nama}}</option>>
            @empty
                <option value="">Tidak ada kategori</option>
            @endforelse
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection