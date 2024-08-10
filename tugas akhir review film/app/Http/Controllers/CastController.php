<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CastController extends Controller
{
    public function create() {
        return view('cast.add');
    }

    public function store(Request $request) {
        $request->validate([
            'name'=>'required',
            'umur'=>'required',
            'bio'=>'required'
        ]);

        DB::table('cast')->insert([
            'name' => $request->input('name'),
            'umur' => $request->input('umur'),
            'bio' => $request->input('bio'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        return redirect('/cast');
    }

    public function index() {
        $cast = DB::table('cast')->get();
        return view('cast.show-data',['cast'=>$cast]);
    }

    public function show($id) {
        $cast = DB::table('cast')->find($id);
        return view("cast.detail", ['cast'=>$cast]);
    }

    public function edit($id) {
        $cast = DB::table('cast')->find($id);
        return view("cast.edit", ['cast'=>$cast]);        
    }

    public function update($id, Request $request) {
        $request->validate([
            'name'=>'required',
            'umur'=>'required',
            'bio'=>'required'
        ]);
        
        DB::table('cast')
              ->where('id', $id)
              ->update([
                "name" => $request->input('name'),
                "umur" => $request->input('umur'),
                "bio" => $request->input('bio'),
                'updated_at' => Carbon::now()
              ]);

        return redirect('/cast');        
    }

    public function destroy($id) {
        DB::table('cast')->where('id', $id)->delete();
        return redirect('/cast');
    }
   
}
