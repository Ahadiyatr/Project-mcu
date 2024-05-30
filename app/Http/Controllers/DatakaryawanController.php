<?php

namespace App\Http\Controllers;

use App\Models\Datakaryawan;
use Illuminate\Http\Request;

class DatakaryawanController extends Controller
{
    public function index(){
        $dt_karyawan = Datakaryawan::all();
        // return $dt_karyawan;
        return view('master.data-karyawan', compact('dt_karyawan'));
    }
}
