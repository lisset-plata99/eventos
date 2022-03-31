<?php

namespace App\Http\Controllers;

use App\Models\agendaeventos;
use Illuminate\Http\Request;

class agendaeventosController extends Controller
{
    //
    public function mostrarInvitacion($id)
    {
        $infoInvitacion = agendaeventos::where('agendaeventos.id', $id)
                            ->join('tipoevento', 'agendaeventos.TipoEventoId', '=', 'tipoevento.id')
                            ->join('cliente', 'agendaeventos.ClienteId', '=', 'cliente.id')
                            ->join('menucomida', 'agendaeventos.MenuComidaId', '=', 'menucomida.id')
                            ->first();

        if($infoInvitacion)
        {
            return view('Invitacion', ['infoInvitacion' => $infoInvitacion]);
        }
        else{
            return response()->json(['mensaje'=> 'No se encontro la invitacion'],404);
        }
    }
}
