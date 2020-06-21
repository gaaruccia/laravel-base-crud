<?php

namespace App\Http\Controllers;

use App\Omino;

use Illuminate\Http\Request;

class OminiController extends Controller
{
    public function index (){

        $omini = Omino::all();

        return view('home', compact ("omini"));
    }
    public function show ($id){

        $omino = Omino::findOrFail($id);

        return view('show', compact ("omino"));
    }
    public function edit ($id){

        $omino = Omino::findOrFail($id);

        return view('edit', compact ("omino"));
    }
    public function update (Request $request, $id){

        $ominoData = $request->all();
    
        $omino = new Omino;

        $omino->firstname = $ominoData["firstname"];
        $omino->lastname = $ominoData["lastname"];
        $omino->address = $ominoData["address"];
        $omino->code = $ominoData["code"];
        $omino->state = $ominoData["state"];
        $omino->phonenumber = $ominoData["phonenumber"];
        $omino->role = $ominoData["role"];

        $omino->save();

        return redirect()->route("show", $omino["id"]);
    }
    public function create (){

        return view('create');
     }
    public function store (Request $request){
 
         $ominoData = $request->all();

         $omino = new Omino;
         
         $omino->firstname = $ominoData["firstname"];
         $omino->lastname = $ominoData["lastname"];
         $omino->address = $ominoData["address"];
         $omino->code = $ominoData["code"];
         $omino->state = $ominoData["state"];
         $omino->phonenumber = $ominoData["phonenumber"];
         $omino->role = $ominoData["role"];
 
         $omino->save();
 
         return redirect()->route("home");
    }
    public function delete ($id){

        $omino = Omino::findOrFail($id);

        $omino -> delete();
        
        return redirect() -> route("home");
    }
}
