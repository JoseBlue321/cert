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
.logo_iinsad {
    position: absolute;
    top: 180px;  
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
    top: 96px; 
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
    color:rgb(231, 76, 60 );
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
    top: 150px; 
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
    left: 70px; 
    right: 70px;
    text-align: center;
    font-size: 43px; /*Tamaño de texto*/
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
    .firma_ana{
    position: absolute;
    bottom: 118px; 
    left: 120px; 
    }
    .nombre_iinsad{
    position: absolute;
    bottom: 100px; 
    left: 100px; 
    text-align: center;
    font-size: 15px; /*Tamaño de texto*/
    font-family: "Roboto Slab", serif;
    font-optical-sizing: auto;
    font-weight: <weight>;
    font-style: normal;
    line-height: 15px;
    color:rgb(23, 32, 42);
    }
    .firma_vicedecana{
    position: absolute;
    bottom: 85px; 
    left: 490px; 
    }
    .nombre_vicedecana{
    position: absolute;
    bottom: 100px; 
    right: 100px;
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
    bottom: 210px; 
    right: 310px; 
    }

    .qr {
    position: absolute;
    bottom: 280px;
    left: 100px;
}
    .fecha {
    position: absolute;
    /*top: 10px;*/ 
    /*left: 20px;*/ 
    right:100px;
    bottom:360px;
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
        <img src="{{asset('img/110/fondo_1.png')}}" alt="fondo" width="816px" height="1056px">
    </div>
    <!--Logo umsa-->
    <div class="logo_umsa">
        <img src="{{asset('img/umsa.png')}}" alt="logo umsa" width="80px">
    </div>
    <!--Logo medicina-->
    <div class="logo_medicina">
        <img src="{{asset('img/104/medicina.png')}}" alt="logo medicina" width="100px">
    </div>
    <!--Logo miinsad-->
    <div class="logo_iinsad">
        <img src="{{asset('img/110/ii.jpeg')}}" alt="logo iinsad" width="100px">
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
        <h2>
            INSTITUTO DE INVESTIGACIÓN EN SALUD Y DESARROLLO
        </h2>
    </div>
    <div class="titulo4">
        <h2>
            IINSAD
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
            A: {{$participante->grado}} {{$participante->nombre}} {{$participante->paterno}} {{$participante->materno}}
    </div>

    <div class="texto1">
    Por su participación en calidad de <b>{{ ($participante->tipo) }}</b>  
    en la <b>"V Jornada Científica del Instituto de Investigación en Salud y Desarrollo" (IINSAD), </b>
    en el marco de la celebración de los 25 años del Instituto. <br>
    Realizado en fecha 13 de septiembre del 2024, modalidad Presencial y Virtual. <br>
    Carga horaria: 8 Horas académicas.
    </div>
    
    <div class="fecha">
        La Paz, septiembre de 2024
    </div>

    <div class="firma_ana">
        <img src="{{asset('img/110/ana.png')}}" alt="firma" width="70%">
    </div>
    <div class="nombre_iinsad">
        _______________________________ <br>
        Dra. Ana Maria Aguilar Liendo <br>
        <b>DIRECTORA</b> <br>
        IINSAD/UMSA
    </div>

    <div class="firma_vicedecana">
        <img src="{{asset('img/104/vicedecana.png')}}" alt="firma" width="60%">
    </div>
    <div class="nombre_vicedecana">
        _______________________________ <br>
        Dra. Mónica C. Guzmán Mendoza <br>
        <b>VICEDECANA</b> <br>
        FACULTAD DE MEDICINA
    </div>



    <!--QR-->
  
    <div class="qr text-center">
        <!--ID: {{$participante->id}}-{{$participante->codigo}}-2024 <br> -->
        <img src="data:image/png;base64,{{ base64_encode($qr) }}" height="110px" width="110px" alt="Código QR">
    </div>


    <div class="sello">
        <img src="{{asset('img/sello_vicedecanato_1.png')}}" alt="sello" width="150px">
    </div>

    @include('partials.js')
</body>
</html>