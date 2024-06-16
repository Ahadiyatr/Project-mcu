<?php

namespace App\Http\Controllers;

use App\Models\Datakaryawan;
use App\Models\Datamcu;
use App\Models\Departemen;
use App\Models\Jabatan;
use App\Models\Tempatmcu;
use Database\Seeders\KaryawanSeeder;
use Illuminate\Http\Request;

class DatamcuController extends Controller
{
    // Home Index data MCU
    public function index(){

        $mcu_data = Datamcu::all();
        $karyawan = Datakaryawan::all();
        // dd($mcu_data);
        return view('mcu.data',compact('mcu_data','karyawan'));
    }

    // Data MCU
    public function create(){

        $karyawan = Datakaryawan::all();
        $tmptmcu = Tempatmcu::all();
        // dd($tmptmcu);
        // $departemen = Departemen::all();
        // $jabatan = Jabatan::all();
        return view('mcu.create-mcu',compact('karyawan','tmptmcu'));
    }

    public function insert(Request $request)
    {    // dd($request->all());
        Datamcu::create($request->all());
        return redirect()->route('data');
    }


    //     $tb = $request->input('tb');
    //     $bb = $request->input('bb');
    //     $bmi = $bb / (($tb / 100)  ** 2);

    //     $mcu_data = [
    //         'tb' => $request->input('tb'),
    //         'bb' => $request->input('bb'),
    //         'bmi' => $bmi,
    //         'sistole' => $request->input('sistole'),
    //         'diastole' => $request->input('diastole'),
    //         'nadi' => $request->input('nadi'),
    //         'hb' => $request->input('hb'),
    //         'cl' => $request->input('cl'),
    //         'trig' => $request->input('trig'),
    //         'gdp' => $request->input('gdp'),
    //         'au' => $request->input('au'),
    //         'ur' => $request->input('ur'),
    //         'cre' => $request->input('cre'),
    //         'sgot' => $request->input('sgot'),
    //         'sgpt' => $request->input('sgpt'),
    //         'sgpt' => $request->input('sgpt'),

    //     ];

    //     Datamcu::create($mcu_data);

    //     $diagnosis = [];

    //     // Sistole
    //     if ($mcu_data['sistole'] >= 140) {
    //         $diagnosis[] = 'Hypertension (Sistole)';
    //     } elseif ($mcu_data['sistole'] >= 120) {
    //         $diagnosis[] = 'Pre-hypertension (Sistole)';
    //     } else {
    //         $diagnosis[] = 'Normal (Sistole)';
    //     }

    //     // Diastole
    //     if ($mcu_data['diastole'] >= 90) {
    //         $diagnosis[] = 'Hypertension (Diastole)';
    //     } elseif ($mcu_data['diastole'] >= 80) {
    //         $diagnosis[] = 'Pre-hypertension (Diastole)';
    //     } else {
    //         $diagnosis[] = 'Normal (Diastole)';
    //     }

    //     // Pulse
    //     if ($mcu_data['nadi'] > 100) {
    //         $diagnosis[] = 'Tachycardia';
    //     } elseif ($mcu_data['nadi'] < 60) {
    //         $diagnosis[] = 'Bradycardia';
    //     } else {
    //         $diagnosis[] = 'Normal (Nadi)';
    //     }

    //     // BMI
    //     if ($bmi >= 30) {
    //         $diagnosis[] = 'Obese';
    //     } elseif ($bmi >= 25) {
    //         $diagnosis[] = 'Overweight';
    //     } elseif ($bmi < 18.5) {
    //         $diagnosis[] = 'Underweight';
    //     } else {
    //         $diagnosis[] = 'Normal (BMI)';
    //     }

    //     // Hemoglobin
    //     if ($mcu_data['hb'] < 13.8 || $mcu_data['hb'] > 17.2) {
    //         $diagnosis[] = 'Abnormal Hemoglobin (Men)';
    //     }
    //     if ($mcu_data['hemoglobin'] < 12.1 || $mcu_data['hb'] > 15.1) {
    //         $diagnosis[] = 'Abnormal Hemoglobin (Women)';
    //     } else {
    //         $diagnosis[] = 'Normal Hemoglobin';
    //     }

    // // Cholesterol
    // if ($mcu_data['cl'] >= 240) {
    //     $diagnosis[] = 'High Cholesterol';
    // } elseif ($mcu_data['cholesterol'] >= 200) {
    //     $diagnosis[] = 'Borderline High Cholesterol';
    // } else {
    //     $diagnosis[] = 'Normal Cholesterol';
    // }

    // return view('mcu.data', ['diagnosis' => $diagnosis]);


    // COBAA




    // public function show($id){
    //     $datamcu = Datamcu::find($id);
    //     $departemen = Departemen::find($id);
    //     $jabatan = Jabatan::find($id);
    //     dd($datamcu->all());
    //     return view('mcu.update-mcu',compact('datamcu','jabatan','departemen'));
    // }

    // // public function karyawan(){
    // //     $dt_karyawan = Datakaryawan::all();
    // //     dd($dt_karyawan->all());
    // //     return view('mcu.update-mcu',compact('dt_karyawan'));
    // // }

    public function detail($id){
        $mcu_data = Datamcu::findOrFail($id);
        // dd($data);
        return view('mcu.detail-mcu',compact('mcu_data'));
    }

    // public function show($id){

    //     $jabatan = Jabatan::find($id);
    //     // dd($jabatan);
    //     return view('master.jabatan-update',compact('jabatan'));
    // }

}
