<?php

namespace App\Http\Controllers;

use App\Models\agendaeventos;
use Illuminate\Http\Request;

class agendaeventosController extends Controller
{
    //
    public function mostrarInvitacion($id)
    {
        $cancion = agendaeventos::where('id', $id)->first();
        if($cancion)
        {
            return view('cancion', ['cancion' => $cancion]);
        }
        else{
            return response()->json(['mensaje'=> 'No se encontro la invitacion'],404);
        }
    }
}
