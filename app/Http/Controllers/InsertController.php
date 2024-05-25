<?php

namespace App\Http\Controllers;

use App\Models\Insert;
use Illuminate\Http\Request;

class InsertController extends Controller
{
    public function index(){

        $data = Insert::all();
        return view('mcu.data',compact('data'));
    }

}
