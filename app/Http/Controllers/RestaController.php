<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaController extends Controller
{
    public function mostrarResta(Request $request){
        $request->validate([
            'numero1'=>'required',
            'numero2'=>'required'
        ]);
        $elemento1=$request->numero1;
        $elemento2=$request->numero2;

        return redirect()->route('resta')->with('success', 'El resultado es: '.$elemento1-$elemento2);
    }
    public function vistaResta(){
        return view('resta');
    }
}
