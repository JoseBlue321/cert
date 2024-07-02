<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;
use App\Models\Participante;
//pdf
use Dompdf\Dompdf;
use Dompdf\Options;
//Generador de codigo QR
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class EventoController extends Controller
{
    public function index(){
        $eventos = Evento::all();
        return view('home',[
            'eventos'=>$eventos,
        ]);
    }

    public function show(string $id){
        $evento = Evento::findOrFail($id);
        return view('show',[
            'evento'=>$evento,
        ]);
    }

    public function pdf(string $id){
        // Lógica para obtener datos del participante
        $participante = Participante::findOrFail($id);
        $evento = $participante->eventos;

         // URL para el código QR
         $url = "ID:$participante->id
         Cod:  $participante->codigo
         Nombre:$participante->nombre $participante->paterno $participante->materno
         Cod evento: $evento->codigo
         evento: $evento->evento
         fecha: $evento->fecha";
         $qr = QrCode::generate($url);

         $html = view($evento->codigo, [
            'participante'=>$participante,
            'evento'=>$evento,
            'qr'=>$qr,
            ])->render();
                // Configurar DomPDF
                $dompdf = new Dompdf();
                $dompdf->loadHtml($html);
                $dompdf->set_option('isRemoteEnabled','true');
        
                // (Opcional) Configurar opciones de visualización (tamaño de papel, etc.)
                $dompdf->setPaper('latter', 'landscape');
        
                // Renderizar el HTML como PDF
                $dompdf->render();
        
                // Devolver el PDF generado como respuesta
                //return $dompdf->stream("$participante->carnet.pdf");
                return $dompdf->stream("$participante->id.pdf", ['Attachment' => 0]);
}

}