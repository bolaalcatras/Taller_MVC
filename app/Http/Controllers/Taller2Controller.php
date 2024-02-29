<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Taller2Controller extends Controller
{

    public function create(){

        return view('raiz');

    }
    public function store (Request $request){

    $a=$request->a;
    $b=$request->b;
    $c=$request->c;
    $resultado1=$request->resultado1;
    $resultado2=$request->resultado2;
    $part1=$request->part1;
    $part2=$request->part2;
    $part3=$request->part3;

    $part1= -$b;
    $part2= sqrt(($b*$b)-(4*$a*$c));
    $part3= 2*$a;

    if($part2==-$part2){
        
    }
    
    


    
    

    }

}
