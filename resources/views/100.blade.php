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
.logo_umsa {
    position: absolute;
    top: 30px; 
    left: 30px; 
}
.logo_medicina {
    position: absolute;
    top: 40px;  
    right: 30px;
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
    .confiere{
    position: absolute;
    top: 180px; 
    left: 100px; 
    text-align: center;
    font-size: 25px; /*Tamaño de texto*/
    font-family: "Playfair Display", serif;
    font-optical-sizing: auto;
    font-weight: <weight>;
    font-style: normal;
    color:rgb(23, 32, 42);
    }
    .correlativo{
    position: absolute;
    top: 160px; 
    right: 30px; 
    text-align: center;
    font-size: 15px; /*Tamaño de texto*/
    font-family: "Playfair Display", serif;
    font-optical-sizing: auto;
    font-weight: <weight>;
    font-style: normal;
    color:rgb(23, 32, 42);
    }
    .certificado{
    position: absolute;
    top: 220px; 
    left: 100px; 
    right: 100px;
    text-align: center;
    font-size: 20px; /*Tamaño de texto*/
    font-family: "Roboto Slab", serif;
    font-optical-sizing: auto;
    font-weight: <weight>;
    font-style: normal;
    color:rgb(23, 32, 42);
    }
    .nombre{
    position: absolute;
    top: 280px; 
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
    top: 400px; 
    left: 100px; 
    right: 100px;
    text-align: justify;
    font-size: 25px; /*Tamaño de texto*/
    font-family: "Playfair Display", serif;
    font-optical-sizing: auto;
    font-weight: <weight>;
    font-style: normal;
    color:rgb(23, 32, 42);
    }
    .firma_vicedecana{
    position: absolute;
    bottom: 85px; 
    left: 300px; 
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
    bottom: 170px; 
    right: 130px; 
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
    bottom:380px;
    text-align: justify;
    font-size: 25px; /*Tamaño de texto*/
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
        <img src="{{asset('img/fondo.png')}}" alt="fondo" width="816px" height="1056px">
    </div>
    <!--Logo umsa-->
    <div class="logo_umsa">
        <img src="{{asset('img/umsa.png')}}" alt="logo umsa" width="80px">
    </div>
    <!--Logo medicina-->
    <div class="logo_medicina">
        <img src="{{asset('img/104/medicina.png')}}" alt="logo medicina" width="100px">
    </div>

   

    <!--Contenido-->
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
            INSTITUTO DE GENÉTICA
        </h1>
    </div>
    <div class="titulo4">
        <h2>
            UNIDAD DE GENÉTICA MÉDICA
        </h2>
    </div>

    <div class="confiere">
        Se confiere el Presente
    </div>

    <div class="correlativo">
        FMENT/VICEDEC/CERT N° {{$participante->id}}/2024
    </div>

    <div class="certificado">
        <h1>
            CERTIFICADO
        </h1>
    </div>
    <div class="nombre">
            A: Lic. Jose Apaza Saavedra
    </div>

    <div class="texto1">
    Por su excelente participación en calidad de <b>Organizador</b>  en el <b>Curso de Capacitación - "Excel avanzado"</b>. <br>
    Realizado del 10 al 12 de agosto del 2024, modalidad Presencial Virtual, en el Auditorio Ernesto “Che Guevar - Piso 13 de la Facultad de Medicina”. <br>
    Carga horaria: 10 Horas académica
    </div>

    <div class="firma_vicedecana">
        <img src="{{asset('img/104/vicedecana.png')}}" alt="firma" width="50%">
    </div>
    <div class="nombre_vicedecana">
        _______________________________ <br>
        Dra. Mónica C. Guzmán Mendoza <br>
        <b>VICEDECANA</b> <br>
        FACULTAD DE MEDICINA
    </div>
    <div class="fecha">
        La Paz, 10 de agosto de 2024
    </div>

    <!--QR-->
    <div class="qr text-center">
        ID: {{$participante->id}}-{{$participante->codigo}}-2024 <br>
        <img src="data:image/png;base64,{{ base64_encode($qr) }}" height="130px" width="130px" alt="Código QR">
    </div>

    <div class="sello">
        <img src="{{asset('img/sello_vicedecanato_1.png')}}" alt="sello" width="150px">
    </div>

    @include('partials.js')
</body>
</html>