<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ControladorForm extends Controller
{
    public function getDatos(Request $request): View{
        $nombre = $request -> input('fname');
        $apellido = $request -> input('lname');
        $edad = $request -> input('edad');

        return view('forms') -> with(['nombre'=> $nombre, 'apellido'=>$apellido, 'edad'=>$edad]);
        //return view('forms') -> with('nombre', $nombre);
    }

    public function rutaHola(): View{
        return view('hola');
    }

    public function rutaBien(): View{
        return view('bien');
    }
}
