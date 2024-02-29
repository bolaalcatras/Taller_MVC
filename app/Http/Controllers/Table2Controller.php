<?php

namespace App\Http\Controllers;
use App\Models\Table2;
use Illuminate\Http\Request;

class Table2Controller extends Controller
{
   

    public function create() {

        return view('formulario2');
       
    }

    public function store(Request $request ){

       $producto = new Table2();
       $producto->number=$request->number;  
       $producto->price=$request->price;
       $producto->marca=$request->marca;
       $producto->model=$request->model;
       $producto->save();
       return $producto;


    }



}
