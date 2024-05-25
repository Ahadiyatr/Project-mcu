<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function index(){

        $jabatan = Jabatan::all();
        return view('master.jabatan',compact('jabatan'));
    }

    public function tambahjabatan(){
        return view('master.tambahjabatan');
    }

    public function insertjabatan(Request $request){
        // dd($request->all());
        Jabatan::create($request->all());
        return redirect()->route('jabatan');
    }

    public function show($id){

        $jabatan = Jabatan::find($id);
        // dd($jabatan);
        return view('master.jabatan-update',compact('jabatan'));
    }

    public function update(Request $request, $id){
        $jabatan = Jabatan::find($id);
        $jabatan->update($request->all());
        return redirect()->route('jabatan')->with('success',' Data Berhasil Di Edit');
    }

    public function delete($id){
        $jabatan = Jabatan::find($id);
        $jabatan->delete();
        return redirect()->route('jabatan')->with('success',' Data Berhasil Di Hapus');
    }
}
