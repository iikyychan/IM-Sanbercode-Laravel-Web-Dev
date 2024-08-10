<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\film;
use App\Models\genre;
use Illuminate\Support\Facades\Storage;
use File;

class filmController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $film = film::all();
        return view('film.show', ['film'=>$film]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genre = genre::all();
        return view('film.tambah', ['genre' => $genre]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'ringkasan' => 'required',
            'tahun' => 'required',
            'poster' => 'required|mimes:jpg,png|max:2048',
            'genre_id' => 'required',
        ]);
        
        //unique image name format
        $fileName = time().'.'.$request->poster->extension();  
       
        $request->poster->move(public_path('uploads'), $fileName);

        $film = new film;
 
        $film->judul = $request->input('judul');
        $film->ringkasan = $request->input('ringkasan');
        $film->tahun = $request->input('tahun');
        $film->poster = $fileName;
        $film->genre_id = $request->input('genre_id');
 
        $film->save();
 
        return redirect('/film');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $film = film::find($id);
        $genre = genre::all();
        return view('film.detil',['film'=>$film, 'genre'=>$genre]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $film = film::find($id);
        $genre = genre::all();
        return view('film.edit',['film'=>$film, 'genre'=>$genre]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul' => 'required',
            'ringkasan' => 'required',
            'tahun' => 'required',
            'poster' => 'mimes:jpg,png|max:2048',
            'genre_id' => 'required',
        ]);

        $film = film::find($id);

        if($request->has('poster')){
            File::delete('uploads/'.$film->poster);
            $fileName = time().'.'.$request->poster->extension();  
            $request->poster->move(public_path('uploads'), $fileName);
            $film->poster = $fileName;
        }
        $film->judul = $request->input('judul');
        $film->ringkasan = $request->input('ringkasan');
        $film->tahun = $request->input('tahun');
        $film->genre_id = $request->input('genre_id');
        $film->save();

        return redirect('/film');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $film = film::find($id);
        File::delete('uploads/'.$film->poster);
        $film->delete();
        return redirect('/film');
    }
}
