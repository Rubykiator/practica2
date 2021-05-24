<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PortadaMod;
use App\Models\BusquedaMod;


class PortadaCont extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function index()
    {
        $productos = PortadaMod::get();
        return view('portada', compact('productos'));
    }

    public function buscar()
    {
            $categorias = BusquedaMod::get();
            return view('busqueda', compact('categorias'));

            if(!$_POST){
                
                

            }


    }

}
