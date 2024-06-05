<?php

namespace App\Http\Controllers;

use App\Models\Departemen;
use Illuminate\Http\Request;

class DepartemenController extends Controller
{
    public function index(){
        $departemen = Departemen::all();
        // dd($departemen);
        return view('master.departemen',compact('departemen'));
    }

    public function tambahdepartemen(){
        return view('master.tambahdepartemen');
    }

    public function insertdepartemen(Request $request){
        // dd($request->all());
        Departemen::create($request->all());
        return redirect()->route('departemen');
        // ->with('success',' Data Berhasil Di Tambahkan');
    }

    public function show($id){

        $departemen = Departemen::find($id);
        dd($departemen);
        return view('master.departemen-update',compact('departemen'));
    }

    public function update(Request $request, $id){
        $departemen = Departemen::find($id);
        $departemen->update($request->all());
        return redirect()->route('departemen')->with('success',' Data Berhasil Di Edit');
    }

    public function delete($id) {
        $departemen = Departemen::find($id);
        $departemen->delete();
        return redirect()->route('departemen')->with('success',' Data Berhasil Di Hapus');

    }
}
