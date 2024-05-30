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
}
