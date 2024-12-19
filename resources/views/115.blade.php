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
    left: 50px; 
}
.logo_medicina {
    position: absolute;
    top: 40px;  
    right: 50px;
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
    color:rgb(23, 32, 42);
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
    color:rgb(23, 32, 42);
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
    color:rgb(23, 32, 42);
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
    color:rgb(23, 32, 42);
    }
    .confiere{
    position: absolute;
    top: 270px; 
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
    top: 140px; 
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
    top: 150px; 
    left: 100px; 
    right: 100px;
    text-align: center;
    font-size: 15px; /*Tamaño de texto*/
    font-family: "Roboto Slab", serif;
    font-optical-sizing: auto;
    font-weight: <weight>;
    font-style: normal;
    color:rgb(192, 57, 43);
    }
    .certificado1{
    position: absolute;
    top: 180px; 
    left: 100px; 
    right: 100px;
    text-align: center;
    font-size: 15px; /*Tamaño de texto*/
    font-family: "Roboto Slab", serif;
    font-optical-sizing: auto;
    font-weight: <weight>;
    font-style: normal;
    color:rgb(192, 57, 43);
    }
    .certificado2{
    position: absolute;
    top: 215px; 
    left: 100px; 
    right: 100px;
    text-align: center;
    font-size: 15px; /*Tamaño de texto*/
    font-family: "Roboto Slab", serif;
    font-optical-sizing: auto;
    font-weight: <weight>;
    font-style: normal;
    color:rgb(192, 57, 43);
    }
    .nombre{
    position: absolute;
    top: 300px; 
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
    bottom: 150px; 
    left: 120px; 
    }
    .nombre_iinsad{
    position: absolute;
    bottom: 120px; 
    left: 150px; 
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
    left: 680px; 
    }
    .nombre_vicedecana{
    position: absolute;
    bottom: 100px; 
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
    bottom: 150px; 
    left: 450px; 
    }

    .qr {
    position: absolute;
    top: 260px;
    right: 30px;
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
        <img src="{{asset('img/fondo.png')}}" alt="fondo" width="1056px" height="816px">
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
        <h2>
            DEPARTAMENTO FACULTATIVO DE PATOLOGÍA
        </h2>
    </div>
    <div class="titulo4">
        <h2>
            CÁTEDRA DE PARASITOLOGÍA
        </h2>
    </div>

    <div class="certificado">
        <h1>
XIII JORNADAS DEL VIDEO EDUCATIVO
        </h1>
    </div>
    <div class="certificado1">
        <h1>
“ENFERMEDADES OLVIDADAS O DESATENDIDAS:
        </h1>
    </div>
    <div class="certificado2">
        <h1>
ABORDAJE DESDE LA PROMOCIÓN DE LA SALUD”
        </h1>
    </div>



    <div class="confiere">
        Se otorga el presente <b>CERTIFICADO</b> a: 
    </div>

    <div class="correlativo">
        FMENT/VICEDEC/CERT N° {{$participante->id}}/2024
    </div>


    <div class="nombre">
        {{$participante->grado}} {{$participante->materno}} {{$participante->nombre}} {{$participante->paterno}} 
    </div>

    <div class="texto1">
        Por su participación en calidad de <b>{{ ($participante->tipo) }}</b>  
        Evento realizado los días <b>7 y 8 de noviembre de 2024</b>, 
        en el Centro de Convenciones de la Facultad de Medicina, 
        Universidad Mayor de San Andrés. La Paz, Bolivia
    </div>
    

    <div class="firma_ana">
        <img src="{{asset('img/115/firma.png')}}" alt="firma" width="40%">
    </div>
    <div class="nombre_iinsad">
        _______________________________ <br>
        Dra. Pamela Durán Toledo <br>
        <b>JEFE DE CÁTEDRA</b> <br>
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



    <!--QR-->
  
    <div class="qr text-center">
        <img src="data:image/png;base64,{{ base64_encode($qr) }}" height="110px" width="110px" alt="Código QR">
        <br> 
        {{$participante->carnet}}
    </div>


    <div class="sello">
        <img src="{{asset('img/sello_vicedecanato_1.png')}}" alt="sello" width="150px">
    </div>

    @include('partials.js')
</body>
</html>