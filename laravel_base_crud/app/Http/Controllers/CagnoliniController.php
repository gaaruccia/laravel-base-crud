<?php

namespace App\Http\Controllers;

use App\cagnolini;

use Illuminate\Http\Request;

class CagnoliniController extends Controller
{
    public function index(){
        $cagnoliniDb = cagnolini::all();

        return view("home", compact("cagnoliniDb"));
    }
    public function show($id){
        
        $cane = cagnolini::findOrFail($id);
        
        return view("show", compact("cane"));
    
    }
}
