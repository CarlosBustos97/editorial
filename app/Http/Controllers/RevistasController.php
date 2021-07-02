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
        return view('revistas',[
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
            'name'=> ['required'],
            'email'=> ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8', ],
        ]);

        Revista::create([
            'titulo' => $request->name,
            'tipo_id' => $request->email,
            'fecha' => $request->email,
            'num_paginas' => $request->email,
            'num_ejemplares' => $request->email,
        ]);
        return back();
    }
}
