<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Revistas;
use App\Models\Tipo;

class RevistasController extends Controller
{
    public function index(){
        $revistas = Revistas::get();
        $tipos = Tipo::get();
        return view('home',[
            'revistas' => $revistas,
            'tipos' =>$tipos,
        ]);
    }

    public function eliminar(Revistas $revista){
        //echo "Entro";die;
        $revista->delete();
        return back();
    }

    public function agregar(Request $request){
        $request->validate([
            'titulo'=> ['required'],
            'tipo'=> ['required'],
            'fecha' => ['required'],
            'ejemplares'=> ['required'],
            'paginas'=> ['required'],
        ]);
        //echo "<pre>";
        //print_r ($request->titulo . "+" . $request->tipo . "+" . $request->fecha . "+" . $request->paginas . "+" . $request->ejemplares);die;
        $id_revista = Revistas::max('id')+1;
        // echo "<pre>";
        // echo ($id_revista);die;
        Revistas::create([
            'id' => $id_revista, 
            'titulo' => $request->titulo,
            'tipo_id' => $request->tipo,
            'fecha' => $request->fecha,
            'num_paginas' => $request->paginas,
            'num_ejemplares' => $request->ejemplares,
        ]);
        return back();
    }
}
