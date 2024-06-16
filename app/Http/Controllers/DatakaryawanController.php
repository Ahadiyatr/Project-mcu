<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Departemen;
use App\Models\Perusahaan;
use App\Models\Datakaryawan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DatakaryawanController extends Controller
{
    public function index(){
        $karyawan = Datakaryawan::all();

        // Mengubah tanggal lahir ke Umur
        foreach ($karyawan as $kar) {
            $kar->age = Carbon::parse($kar->tanggal_lahir)->age;
        }
        return view('master.data-karyawan', compact('karyawan'));
    }

    public function tambahkaryawan(){
        $karyawan = Datakaryawan::all();
        $perusahaan = Perusahaan::all();
        $departemen = Departemen::all();
        $jabatan = Jabatan::all();
        return view('master.tambah-karyawan',compact('karyawan','perusahaan','departemen','jabatan'));
    }

    public function insert(Request $request){
        $validator = Validator::make($request->all(), [
            'nik' => 'required|string|unique:karyawan,nik',
        ]);

        if ($validator->fails()) {
            // Redirect kembali dengan pesan error dan input yang sudah diisi
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'NIK sudah terdaftar.');
        }
        // Membuat data karyawan baru
        Datakaryawan::create($request->all());
        // Redirect ke route 'karyawan' dengan pesan sukses
        session()->flash('success', 'Data karyawan berhasil ditambahkan.');
        // dd(session('success'));
        return redirect()->route('karyawan');
    }

    public function show($id){
        $karyawan = Datakaryawan::with('perusahaan')->findOrfail($id);
        $perusahaan = Perusahaan::all();
        $departemen = Departemen::all();
        $jabatan = Jabatan::all();
        // dd($dt_karyawan->all());
        return view('master.karyawan-update',compact('karyawan','perusahaan','departemen','jabatan'));
    }

    public function update(Request $request, $id){
        $karyawan = Datakaryawan::find($id);
        $karyawan->update($request->all());
        return redirect()->route('karyawan');
    }

    public function delete($id){
        $karyawan = Datakaryawan::find($id);
        $karyawan->delete();
        return redirect()->route('karyawan');
    }
}
