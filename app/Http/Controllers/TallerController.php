<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/*class TallerController extends Controller
{

    public function create(){

        return view('formulario');

    }

    public function store (Request $request){

        $nota1=$request->nota1;  
        $nota2=$request->nota2; 
        $nota3=$request->nota3; 
        
        $resultado=($nota1+$nota2+$nota3)/3;

        return 'el promedio del estudiante es ' . $resultado;

    }




    

}
