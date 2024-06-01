<?php

namespace App\Http\Controllers;

use App\Models\Tempatmcu;
use Illuminate\Http\Request;

class TempatmcuController extends Controller
{
    //
    public function index(){
        $tmptmcu = Tempatmcu::all();
        // return $tmptmcu;
        return view('master.tempatmcu', compact('tmptmcu'));
    }

    public function tambahtempat(){
        return view('master.tambahklinik');
    }

    public function inserttempat(Request $request){
        // dd($request->all());
        Tempatmcu::create($request->all());
        return redirect()->route('tempatmcu');
    }

    public function show($id){
        $tempatmcu = Tempatmcu::find($id);
        return view('master.tempatmcu-update',compact('tempatmcu'));
    }

    public function update(Request $request, $id){
        $tempatmcu = Tempatmcu::find($id);
        $tempatmcu->update($request->all());
        return redirect()->route('tempatmcu');
    }

    public function delete($id){
        $tempatmcu = Tempatmcu::find($id);
        $tempatmcu->delete();
        return redirect()->route('tempatmcu');
    }
}
