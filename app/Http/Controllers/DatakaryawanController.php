<?php

namespace App\Http\Controllers;

use App\Models\Datakaryawan;
use App\Models\Departemen;
use App\Models\Jabatan;
use App\Models\Perusahaan;
use Illuminate\Http\Request;

class DatakaryawanController extends Controller
{
    public function index(){
        $dt_karyawan = Datakaryawan::all();
        // return $dt_karyawan;
        return view('master.data-karyawan', compact('dt_karyawan'));
    }

    public function tambahkaryawan(){
        $perusahaan = Perusahaan::all();
        $departemen = Departemen::all();
        $jabatan = Jabatan::all();
        return view('master.tambah-karyawan',compact('perusahaan','departemen','jabatan'));
    }

    public function insert(Request $request){
        // dd($request->all());
        Datakaryawan::create($request->all());
        return redirect()->route('karyawan');
    }

    public function show($id){
        $dt_karyawan = Datakaryawan::with('perusahaan')->findOrfail($id);
        $perusahaan = Perusahaan::all();
        $departemen = Departemen::all();
        $jabatan = Jabatan::all();
        // dd($dt_karyawan->all());
        return view('master.karyawan-update',compact('dt_karyawan','perusahaan','departemen','jabatan'));
    }

    public function update(Request $request, $id){
        $dt_karyawan = Datakaryawan::find($id);
        $dt_karyawan->update($request->all());
        return redirect()->route('karyawan');
    }

    public function delete($id){
        $dt_karyawan = Datakaryawan::find($id);
        $dt_karyawan->delete();
        return redirect()->route('karyawan');
    }
}
