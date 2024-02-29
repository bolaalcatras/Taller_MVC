<?php

namespace App\Http\Controllers;

use App\Models\Table1;
use Illuminate\Http\Request;

class Table1Controller extends Controller
{
   

    public function create() {

        return view('formulario');
       
    }

    public function store(Request $request ){

       $producto = new Table1();
       $producto->name=$request->name;  
       $producto->price=$request->price;
       $producto->proveedor=$request->proveedor;
       $producto->lote=$request->lote;
       $producto->save();
       return $producto;


    }



}
