<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\genre;

class genreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genre = DB::table('genre')->get();
        return view('genre.show',['genre'=>$genre]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('genre.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required',
        ]);

        DB::table('genre')->insert([
            'nama' => $request->input('nama'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        return redirect('/genre');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $genre = DB::table('genre')->find($id);
        return view("genre.edit", ['genre'=>$genre]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama'=>'required',
        ]);
        
        DB::table('genre')
              ->where('id', $id)
              ->update([
                "nama" => $request->input('nama'),
                'updated_at' => Carbon::now()
              ]);

        return redirect('/genre');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('genre')->where('id', $id)->delete();
        return redirect('/genre');
    }

    public function show($id) {
        $genre = genre::find($id);
        return view('genre.detail', ['genre' => $genre]);
    }

}
