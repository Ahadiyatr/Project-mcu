<?php

namespace App\Http\Controllers;

use App\Models\Datamcu;
use App\Models\Departemen;
use App\Models\Jabatan;
use Illuminate\Http\Request;

class DatamcuController extends Controller
{
    public function index(){

        $data = Datamcu::all();
        // dd($data);
        return view('mcu.data',compact('data'));
    }

    public function detail($id){
        $data = Datamcu::findOrFail($id);
        // dd($data);
        return view('mcu.detail-mcu',compact('data'));
    }

    public function create(){
        $departemen = Departemen::all();
        $jabatan = Jabatan::all();
        return view('mcu.create-mcu',compact('departemen','jabatan'));
    }

    public function insert(Request $request){
        // dd($request->all());
        Datamcu::create($request->all());
        return redirect()->route('data');
    }

    // public function show($id){

    //     $jabatan = Jabatan::find($id);
    //     // dd($jabatan);
    //     return view('master.jabatan-update',compact('jabatan'));
    // }

    public function show($id){
        $datamcu = Datamcu::find($id);
        $departemen = Departemen::find($id);
        $jabatan = Jabatan::find($id);
        // dd($datamcu->all());
        return view('mcu.update-mcu',compact('datamcu','jabatan','departemen'));
    }

}
