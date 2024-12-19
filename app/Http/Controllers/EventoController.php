<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Evento;
use App\Models\Participante;
//pdf
use Dompdf\Dompdf;
use Dompdf\Options;
use Barryvdh\DomPDF\Facade as PDF;
use setasign\Fpdi\Tcpdf\Fpdi;
use Illuminate\Support\Facades\Storage;
//Generador de codigo QR
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Carbon\Carbon; //cambiar la fecha a texto

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
        $parts = DB::select('select * from participantes p 
        where evento_id ='.$id.'order by(id);');
        return view('show',[
            'participantes'=>$parts,
        ]);
    }

    public function pdf(string $id){
        // Lógica para obtener datos del participante
        $participante = Participante::find($id);
        $evento = $participante->eventos;

        // Crear un objeto Carbon a partir de la fecha dada
        Carbon::setLocale('es'); 
        $date = Carbon::createFromFormat('Y-m-d', $evento->fecha);
        // Formatear la fecha a texto en español
        $formattedDate = $date->translatedFormat('l, j \de F \de Y'); // Ejemplo: "viernes, 12 de julio de 2024"

         // URL para el código QR
        $url = "ID: $participante->id
Nombre: $participante->nombre $participante->paterno $participante->materno
Evento: $evento->evento
Fecha: $formattedDate";
//Verifica tu certificado en el siguiente enlace:
//https://fment.es/validacion
//Ingresando el ID: $participante->id";
        
         $qr = QrCode::encoding('UTF-8')->generate($url);

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
                $dompdf->setPaper('letter', 'landscape'); //horizontal
                //$dompdf->setPaper('letter', 'portrait');  //vertical
        
                // Renderizar el HTML como PDF
                $dompdf->render();

                //****Configurar la protección del PDF****
                // Guardar el contenido del PDF en un archivo temporal
                $tempPdfPath = storage_path("app/$evento->codigo/$participante->id.pdf");
                file_put_contents($tempPdfPath, $dompdf->output());
        
                // Proteger el PDF
                $protectedPdfPath = storage_path("app/$evento->codigo/$participante->id.pdf");
                $this->protectPDF($tempPdfPath, $protectedPdfPath, "", "vicedecanato" ,$evento->evento, "$participante->nombre $participante->paterno $participante->materno");
        
                // Devolver el PDF protegido para descargar
                //return response()->download($protectedPdfPath)->deleteFileAfterSend(true);
        
                // Devolver el PDF generado como respuesta
                return $dompdf->stream("$participante->id.pdf", ['Attachment' => 0]);
}

private function protectPDF($inputPath, $outputPath, $userPassword, $ownerPassword,$evento,$nombre)
{
    try {
        // Crear una nueva instancia de FPDI con TCPDF
        $pdf = new Fpdi();

        // Configurar el documento
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetTitle($evento);
        $pdf->SetAuthor('UMSA - Facultad de Medicina - Vicedecanato');
        $pdf->SetSubject('Certificado: '.$nombre);

        // Importar el contenido del PDF original
        $pdf->setSourceFile($inputPath);
        $tplId = $pdf->importPage(1);
        $pdf->AddPage('L', array(215.9, 279.4)); //horizontal
        //$pdf->AddPage('P', array(215.9, 279.4)); //vertical
        $pdf->useTemplate($tplId);

        // Establecer la protección del PDF
        /*$permissions = [
            //'print' => true,        // Permitir imprimir
            'copy' => false,        // No permitir copiar
            'modify' => false,      // No permitir modificar
            'annot-forms' => true,  // Permitir agregar anotaciones y formularios (necesario para la firma)
            'extract' => false,     // No permitir extracción
            'assemble' => false,    // No permitir ensamblar (modificar la estructura)
        ];
        $pdf->SetProtection(
            array_keys(array_filter($permissions)), 
            $user_password = '', 
            $owner_password = 'facultad de medicina'
        );
*/
        // Guardar el archivo PDF protegido
        $pdf->Output($outputPath, 'F');
    } catch (\Exception $e) {
        // Manejo de errores
        \Log::error('Error al proteger el PDF: ' . $e->getMessage());
        throw $e;
    }
}

    public function GenerarTodo(string $id){
        for ($i=6501; $i <=6539 ; $i++) { 
             // Lógica para obtener datos del participante
        $participante = Participante::find($i);
        $evento = $participante->eventos;

        // Crear un objeto Carbon a partir de la fecha dada
        Carbon::setLocale('es'); 
        $date = Carbon::createFromFormat('Y-m-d', $evento->fecha);
        // Formatear la fecha a texto en español
        $formattedDate = $date->translatedFormat('l, j \de F \de Y'); // Ejemplo: "viernes, 12 de julio de 2024"

         // URL para el código QR
        $url = "ID: $participante->id
Nombre: $participante->nombre $participante->paterno $participante->materno
Evento: $evento->evento
Fecha: $formattedDate";
//Verifica tu certificado en el siguiente enlace:
//https://fment.es/validacion
//Ingresando el ID: $participante->id";
        
         $qr = QrCode::encoding('UTF-8')->generate($url);

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
                $dompdf->setPaper('letter', 'landscape'); //horizontal
                //$dompdf->setPaper('letter', 'portrait');  //vertical
        
                // Renderizar el HTML como PDF
                $dompdf->render();

                //****Configurar la protección del PDF****
                // Guardar el contenido del PDF en un archivo temporal
                $tempPdfPath = storage_path("app/$evento->codigo/$participante->id.pdf");
                file_put_contents($tempPdfPath, $dompdf->output());
        
                // Proteger el PDF
                $protectedPdfPath = storage_path("app/$evento->codigo/$participante->id.pdf");
                $this->protectPDF($tempPdfPath, $protectedPdfPath, "", "vicedecanato" ,$evento->evento, "$participante->nombre $participante->paterno $participante->materno");
        
                
        }
        return "Se genero todos los certificados";
    }

}