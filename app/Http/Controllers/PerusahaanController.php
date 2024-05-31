<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    public function index(){

        $perusahaan = Perusahaan::all();
        return view('master.perusahaan',compact('perusahaan'));
    }

    public function tambahperusahaan(){
        return view('master.tambahperusahaan');
    }

    public function insertperusahaan(Request $request){
        Perusahaan::create($request->all());
        return redirect()->route('perusahaan');
    }

    public function show($id){

        $perusahaan = Perusahaan::find($id);
        // dd($perusahaan);
        return view('master.perusahaan-update',compact('perusahaan'));
    }

    public function update(Request $request, $id){
        $perusahaan = Perusahaan::find($id);
        $perusahaan->update($request->all());
        return redirect()->route('perusahaan');

    }

    public function delete(Request $request, $id){
        $perusahaan = Perusahaan::find($id);
        $perusahaan->delete();
        return redirect()->route('perusahaan');

    }

}
