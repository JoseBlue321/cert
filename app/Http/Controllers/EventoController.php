<?php

namespace App\Http\Controllers;

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
        Nombre: $participante->nombre $participante->paterno $participante->materno
        Cod evento: $evento->codigo
        Evento: $evento->evento
        Fecha: $evento->fecha";
        
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
                $dompdf->setPaper('latter', 'landscape');
        
                // Renderizar el HTML como PDF
                $dompdf->render();

                //****Configurar la protección del PDF****
                // Guardar el contenido del PDF en un archivo temporal
                $tempPdfPath = storage_path('app/cert/temp.pdf');
                file_put_contents($tempPdfPath, $dompdf->output());
        
                // Proteger el PDF
                $protectedPdfPath = storage_path('app/cert/protected_documento.pdf');
                $this->protectPDF($tempPdfPath, $protectedPdfPath, 'user_password', 'owner_password');
        
                // Devolver el PDF protegido para descargar
                return response()->download($protectedPdfPath)->deleteFileAfterSend(true);
        
                // Devolver el PDF generado como respuesta
                //return $dompdf->stream("$participante->id.pdf", ['Attachment' => 0]);
}

private function protectPDF($inputPath, $outputPath, $userPassword, $ownerPassword)
{
    try {
        // Crear una nueva instancia de FPDI con TCPDF
        $pdf = new Fpdi();

        // Importar el contenido del PDF original
        $pdf->setSourceFile($inputPath);
        $tplId = $pdf->importPage(1);
        $pdf->AddPage();
        $pdf->useTemplate($tplId);

        // Establecer la protección del PDF
        $permissions = [
            'print' => false,
            'copy' => false,
            'modify' => false,
            'annot-forms' => false,
        ];
        $pdf->SetProtection(array_keys($permissions), $userPassword, $ownerPassword, 128);

        // Guardar el archivo PDF protegido
        $pdf->Output($outputPath, 'F');
    } catch (\Exception $e) {
        // Manejo de errores
        \Log::error('Error al proteger el PDF: ' . $e->getMessage());
        throw $e;
    }
}

}