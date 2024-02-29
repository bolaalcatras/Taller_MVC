<?php

namespace App\Http\Controllers;
use App\Models\Table3;
use Illuminate\Http\Request;

class Table3Controller extends Controller
{
   

    public function create() {

        return view('formulario3');
       
    }

    public function store(Request $request ){

       $producto = new Table3();
       $producto->price=$request->price;  
       $producto->proveedor=$request->proveedor;
       $producto->fruit=$request->fruit;
       $producto->peso=$request->peso;
       $producto->save();
       return $producto;


    }



}