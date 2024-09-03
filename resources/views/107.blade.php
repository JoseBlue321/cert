<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
    <style>
    @page { margin: 0px; }
    body { margin: 0px; }
    @import url('https://fonts.googleapis.com/css2?family=Matemasie&family=Roboto+Slab:wght@100..900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Matemasie&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto+Slab:wght@100..900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap');
.fondo {
    position: absolute;
}
.logo_medicina {
    position: absolute;
    top: 50px;  
    left: 47px;
}
.logo_carrera_med {
    position: absolute;
    top: 50px;  
    left: 150px;
}
.logo_genetica {
    position: absolute;
    top: 50px;  
    right: 80px;
}

.titulo1{
    position: absolute;
    top: 40px; 
    left: 100px; 
    right: 100px;
    text-align: center;
    font-size: 12px; /*Tamaño de texto*/
    font-family: "Roboto Slab", serif;
    font-optical-sizing: auto;
    font-weight: <weight>;
    font-style: normal;
    color:rgb(40, 116, 166);
    }

    .titulo2{
    position: absolute;
    top: 75px; 
    left: 100px; 
    right: 100px;
    text-align: center;
    font-size: 10px; /*Tamaño de texto*/
    font-family: "Roboto Slab", serif;
    font-optical-sizing: auto;
    font-weight: <weight>;
    font-style: normal;
    color:rgb(40, 116, 166);
    }

    .titulo3{
    position: absolute;
    top: 90px; 
    left: 100px; 
    right: 100px;
    text-align: center;
    font-size: 11px; /*Tamaño de texto*/
    font-family: "Roboto Slab", serif;
    font-optical-sizing: auto;
    font-weight: <weight>;
    font-style: normal;
    color:rgb(231, 76, 60 );
    }

    .titulo4{
    position: absolute;
    top: 120px; 
    left: 100px; 
    right: 100px;
    text-align: center;
    font-size: 10px; /*Tamaño de texto*/
    font-family: "Roboto Slab", serif;
    font-optical-sizing: auto;
    font-weight: <weight>;
    font-style: normal;
    color:rgb(40, 116, 166);
    }

    .titulo5{
    position: absolute;
    top: 140px; 
    left: 100px; 
    right: 100px;
    text-align: center;
    font-size: 10px; /*Tamaño de texto*/
    font-family: "Roboto Slab", serif;
    font-optical-sizing: auto;
    font-weight: <weight>;
    font-style: normal;
    color:rgb(40, 116, 166);
    }

    .certificado{
    position: absolute;
    top: 180px; 
    left: 90px; 
    right: 90px;
    text-align: center;
    font-size: 14px; /*Tamaño de texto*/
    font-family: "Roboto Slab", serif;
    font-optical-sizing: auto;
    font-weight: <weight>;
    font-style: normal;
    color:rgb(40, 116, 166);
    }
    .correlativo{
    position: absolute;
    top: 165px; 
    right: 50px; 
    text-align: center;
    font-size: 15px; /*Tamaño de texto*/
    font-family: "Playfair Display", serif;
    font-optical-sizing: auto;
    font-weight: <weight>;
    font-style: normal;
    color:rgb(23, 32, 42);
    }
    .confiere{
    position: absolute;
    top: 230px; 
    left: 150px; 
    text-align: center;
    font-size: 20px; /*Tamaño de texto*/
    font-family: "Playfair Display", serif;
    font-optical-sizing: auto;
    font-weight: <weight>;
    font-style: normal;
    color:rgb(23, 32, 42);
    }

    .nombre{
    position: absolute;
    top: 240px; 
    left: 100px; 
    right: 100px;
    text-align: center;
    font-size: 50px; /*Tamaño de texto*/
    font-family: "Great Vibes", cursive;
    font-weight: 400;
    font-style: normal;
    color:rgb(23, 32, 42);
    }
    .texto1{
    position: absolute;
    top: 340px; 
    left: 150px; 
    right: 100px;
    text-align: justify;
    font-size: 20px; /*Tamaño de texto*/
    font-family: "Playfair Display", serif;
    font-optical-sizing: auto;
    font-weight: <weight>;
    font-style: normal;
    color:rgb(23, 32, 42);
    }
    .texto2{
    position: absolute;
    top: 380px; 
    left: 100px; 
    right: 100px;
    text-align: justify;
    font-size: 20px; /*Tamaño de texto*/
    font-family: "Playfair Display", serif;
    font-optical-sizing: auto;
    font-weight: <weight>;
    font-style: normal;
    color:rgb(23, 32, 42);
    }
    .firma_vicedecana{
    position: absolute;
    bottom: 95px; 
    left: 450px; 
    right: 100px;
    }
    .nombre_vicedecana{
    position: absolute;
    bottom: 100px; 
    left: 150px; 
    right: 150px;
    text-align: center;
    font-size: 15px; /*Tamaño de texto*/
    font-family: "Roboto Slab", serif;
    font-optical-sizing: auto;
    font-weight: <weight>;
    font-style: normal;
    line-height: 15px;
    color:rgb(23, 32, 42);
    }

    .sello{
    position: absolute;
    bottom: 120px; 
    right: 200px; 
    }

    .qr {
    position: absolute;
    bottom: 100px;
    left: 100px;
}
    .fecha {
    position: absolute;
    /*top: 10px;*/ 
    /*left: 20px;*/ 
    right:100px;
    bottom:300px;
    text-align: justify;
    font-size: 20px; /*Tamaño de texto*/
    font-family: "Playfair Display", serif;
    font-optical-sizing: auto;
    font-weight: <weight>;
    font-style: normal;
    color:rgb(23, 32, 42);
}

    </style>

<body>
    <!--Fondo-->
    <div class="fondo">
        <img src="{{asset('img/107/fondo.png')}}" alt="fondo" width="1056px" height="816px">
    </div>
    <!--Logo medicina-->
    <div class="logo_medicina">
        <img src="{{asset('img/104/medicina.png')}}" alt="logo medicina" width="100px">
    </div>
    <!--Logo carrera de medicina-->
    <div class="logo_carrera_med">
        <img src="{{asset('img/107/carrera_med.png')}}" alt="logo medicina" width="91px">
    </div>
    <!--Logo genetica-->
    <div class="logo_genetica">
        <img src="{{asset('img/107/genetica.png')}}" alt="logo medicina" width="110px">
    </div>

    <!--Titulo-->
    <div class="titulo1">
        <h1>
            UNIVERSIDAD MAYOR DE SAN ANDRÉS
        </h1>
    </div>
    <div class="titulo2">
        <h2>
            FACULTAD DE MEDICINA, ENFERMERÍA, NUTRICIÓN Y TECNOLOGÍA MÉDICA
        </h2>
    </div>
    <div class="titulo3">
        <h1>
            CARRERA DE MEDICINA
        </h1>
    </div>
    <div class="titulo4">
        <h2>
        INSTITUTO DE GENÉTICA
        </h2>
    </div>
    <div class="titulo5">
        <h2>
            UNIDAD DE GENÉTICA MÉDICA
        </h2>
    </div>

    <!--Contenido-->
    <div class="certificado">
        <h1>
            “GENÉTICA MÉDICA EN LA ATENCIÓN PRIMARIA DE SALUD”
        </h1>
    </div>

    <div class="correlativo">
        FMENT/VICEDEC/CERT N° {{$participante->id}}/2024
    </div>

    <div class="confiere">
        SE CONFIERE EL PRESENTE CERTIFICADO A:
    </div>

    <div class="nombre">
        {{$participante->grado}} {{$participante->nombre}} {{$participante->paterno}} {{$participante->materno}}
    </div>

    <div class="texto1">
        EN CALIDAD DE: <b>{{ strtoupper($participante->tipo) }}</b>
    </div>
    <div class="texto2">
        Por su excelente participación en el 
        Curso de Actualización en: <b>“GENÉTICA MÉDICA 
        EN ATENCIÓN PRIMARIA EN SALUD”</b>, 
        realizado del 12 al 16 de agosto del 2024, 
        modalidad híbrida, en el auditorio del Instituto de Genética, 
        con una carga horaria de 20 horas académicas.
    </div>


    <div class="firma_vicedecana">
        <img src="{{asset('img/104/vicedecana.png')}}" alt="firma" width="180px">
    </div>
    <div class="nombre_vicedecana">
        _______________________________ <br>
        Dra. Mónica C. Guzmán Mendoza <br>
        <b>VICEDECANA</b> <br>
        FACULTAD DE MEDICINA
    </div>
    <div class="fecha">
        La Paz, 20 de agosto de 2024
    </div>

    <!--QR-->
    <div class="qr text-center">
        ID: {{$participante->id}}-{{$participante->codigo}}-2024 <br>
        <img src="data:image/png;base64,{{ base64_encode($qr) }}" height="120px" width="120px" alt="Código QR">
    </div>

    <div class="sello">
        <img src="{{asset('img/sello_vicedecanato_1.png')}}" alt="sello" width="150px">
    </div>

    @include('partials.js')
</body>
</html>