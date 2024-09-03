<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
    <style>
    @page { margin: 0px; }
    body { margin: 0px; }
.fondo {
    position: absolute;
}
.logo_umsa {
    position: absolute;
    top: 10px; 
    right: 10px; 
}
.logo_medicina {
    position: absolute;
    top: 70px;  
    left:870px;
}
.logo_salud {
    position: absolute;
    top: 130px;  
    right:150px;
}

.titulo1{
    position: absolute;
    top: 25px; 
    left: 180px; 
    right: 180px;
    text-align: center;
    font-size: 8px; /*Tamaño de texto*/
    font-family: 'Times New Roman', Times, serif; /*tipo de texto*/
    font-weight: bold; /* Peso de la fuente en negrita */
    font-style: normal; /* Estilo de la fuente en cursiva */
    text-decoration: none; /* Subraya el texto */
    color: rgb(192, 57, 43);
    }

    .titulo2{
    position: absolute;
    top: 65px; 
    left: 180px; 
    right: 180px;
    text-align: center;
    font-size: 12px; /*Tamaño de texto*/
    font-family: 'Times New Roman', Times, serif; /*tipo de texto*/
    font-weight: bold; /* Peso de la fuente en negrita */
    font-style: normal; /* Estilo de la fuente en cursiva */
    text-decoration: none; /* Subraya el texto */
    color:rgb(40, 116, 166);
    }

    .titulo3{
    position: absolute;
    top: 150px; 
    left: 180px; 
    right: 180px;
    text-align: center;
    font-size: 40px; /*Tamaño de texto*/
    font-family: 'fantasy',fantasy; /*tipo de texto*/
    font-weight: bold; /* Peso de la fuente en negrita */
    font-style: normal; /* Estilo de la fuente en cursiva */
    text-decoration: none; /* Subraya el texto */
    color:rgb(23, 32, 42);
    }
    .titulo4{
    position: absolute;
    top: 205px; 
    left: 180px; 
    right: 180px;
    text-align: center;
    font-size: 15px; /*Tamaño de texto*/
    font-family: 'Times New Roman', Times, serif; /*tipo de texto*/
    font-style: normal; /* Estilo de la fuente en cursiva */
    color:rgb(23, 32, 42);
    }

    .nombre{
    position: absolute;
    top: 220px; 
    left: 120px; 
    right: 150px;
    text-align: center;
    font-size: 45px; /*Tamaño de texto*/
    font-family: "Great Vibes", cursive;
    font-weight: 400;
    font-style: normal;
    color:rgb(23, 32, 42);
    }
    .titulo5{
    position: absolute;
    top: 320px; 
    left: 120px; 
    right: 50px;
    text-align: left;
    font-size: 22px; /*Tamaño de texto*/
    font-family: 'Times New Roman', Times, serif; /*tipo de texto*/
    font-style: normal; /* Estilo de la fuente en cursiva */
    text-decoration: none; /* Subraya el texto */
    color:rgb(23, 32, 42);
    }

    .sello{
    position: absolute;
    top: 550px; 
    left: 30px; 
    }
    .sello_dec{
    position: absolute;
    top: 510px; 
    left: 740px; 
    }
    .sello_vic{
    position: absolute;
    top: 480px; 
    left: 480px; 
    }

    .firma_alanes{
    position: absolute;
    top: 575px; 
    left: 80px; 
    }
    .firma1{
    position: absolute;
    top: 680px; 
    left: 50px; 
    font-size: 15px; /*Tamaño de texto*/
    font-family: 'Times New Roman', Times, serif; /*tipo de texto*/
    /*font-weight: 300; /* Peso de la fuente en negrita */
    /*font-style: normal; /* Estilo de la fuente en cursiva */
    /*text-decoration: none; /* Subraya el texto */
    width: 280px;
    text-align: center;
    }

    .firma_contreras{
    position: absolute;
    top: 555px; 
    left: 340px; 
    }
    .firma2{
    position: absolute;
    top: 680px; 
    left: 330px; 
    font-size: 15px; /*Tamaño de texto*/
    font-family: 'Times New Roman', Times, serif; /*tipo de texto*/
    /*font-weight: 300; /* Peso de la fuente en negrita */
    /*font-style: normal; /* Estilo de la fuente en cursiva */
    /*text-decoration: none; /* Subraya el texto */
    width: 220px;
    text-align: center;
    }

    .firma_monica{
    position: absolute;
    top: 540px; 
    left: 575px; 
    }
    .firma3{
    position: absolute;
    top: 680px; 
    left: 540px; 
    /*right:80px;*/
    /*bottom:50px;*/
    font-size: 15px; /*Tamaño de texto*/
    font-family: 'Times New Roman', Times, serif; /*tipo de texto*/
    /*font-weight: 300; /* Peso de la fuente en negrita */
    /*font-style: normal; /* Estilo de la fuente en cursiva */
    /*text-decoration: none; /* Subraya el texto */
    width: 250px;
    text-align: center;
    }
    .firma_decano{
    position: absolute;
    top: 540px; 
    left: 835px; 
    }
    .firma4{
    position: absolute;
    top: 680px; 
    right:40px;
    /*bottom:50px;*/
    font-size: 15px; /*Tamaño de texto*/
    font-family: 'Times New Roman', Times, serif; /*tipo de texto*/
    /*font-weight: 300; /* Peso de la fuente en negrita */
    /*font-style: normal; /* Estilo de la fuente en cursiva */
    /*text-decoration: none; /* Subraya el texto */
    width: 250px;
    text-align: center;
    }
    .qr {
    position: absolute;
    top: 170px;
    right:20px;
}
.fecha {
    position: absolute;
    /*top: 10px;*/ 
    /*left: 20px;*/ 
    right:40px;
    bottom:280px;
    font-size: 20px; /*Tamaño de texto*/
    font-family: 'Times New Roman', Times, serif; /*tipo de texto*/
    font-weight: bold; /* Peso de la fuente en negrita */
    font-style: normal; /* Estilo de la fuente en cursiva */
    text-decoration: none; /* Subraya el texto */
    color:rgb(23, 32, 42);
}

    </style>

<body>
    <!--Fondo-->
    <div class="fondo">
        <img src="{{asset('img/108/fondo.jpg')}}" alt="fondo" width="1056px" height="816px">
    </div>
    <!--Logo umsa-->
    <div class="logo_umsa">
        <img src="{{asset('img/umsa.png')}}" alt="logo umsa" width="70px">
    </div>
    <!--Logo medicina-->
    <div class="logo_medicina">
        <img src="{{asset('img/104/medicina.png')}}" alt="logo medicina" width="50%">
    </div>
    <!--Logo salud publica-->
    <div class="logo_salud">
        <img src="{{asset('img/108/salud.png')}}" alt="logo salud publica" width="65%">
    </div>
   

    <!--Contenido-->
    <div class="titulo1">
        <h1 >UNIVERSIDAD MAYOR DE SAN ANDRÉS<br>
            FACULTAD DE MEDICINA, ENFERMERÍA, NUTRICIÓN Y TECNOLOGÍA MÉDICA<br>
        </h1>
    </div>
    <div class="titulo2">
        <h2>
            DEPARTAMENTO FACULTATIVO DE SALUD PÚBLICA <br>
            REVISTA SALUD PÚBLICA EN ACCIÓN
        </h2>
    </div>
    
    <div class="titulo3">
        <p><b>CERTIFICADO</b> </p>
    </div>
    <div class="titulo4">
        <p><b>DPTO-FAC-SP-MPA-{{ strtoupper($participante->codigo) }}</b></p>
    </div>

    <div class="nombre">
        <p>A: {{$participante->grado}} {{$participante->nombre}} {{$participante->paterno}} {{ $participante->materno}}</p>
    </div>

    <div class="titulo5">
        <p>
            Por su participación en calidad de <b>{{ strtoupper($participante->tipo) }}</b> en la <b>JORNADA INTERNACIONAL “PROCESO DE PUBLICACIÓN DE MI PRIMER ARTÍCULO” </b> 
        aprobado mediante Resolución del Honorable Consejo Facultativo Nº 649/2024.<br>
        </p>
        <p>
            Realizado el 29 y 30 de julio de la presente gestión, mediante la plataforma Zoom y el 
        canal de YouTube (departamentodesaludpublica). <br>
        </p>
        Carga horaria: 20 horas
    </div>
    

    <div class="firma_alanes">
        <img src="{{asset('img/108/alanes.png')}}" alt="firma alanes" width="40%">
    </div>
    <div class="firma1">
        Dra. Angela M. C. Alanes Fernández<br>
        <b>JEFE  DE DEPARTAMENTO FACULTATIVO DE  SALUD PÚBLICA</b> <br>
        FACMENTM - UMSA
    </div>

    <div class="firma_contreras">
        <img src="{{asset('img/108/contreras.png')}}" alt="firma contreras" width="40%">
    </div>
    <div class="firma2">
        Dra. Denis Ilcen Contreras Zapata<br>
        <b>DOCENTE INVESTIGADORA</b> <br>
        UNIVERSIDAD SAN GREGORIO PUERTO VIEJO
    </div>

    <div class="firma_monica">
        <img src="{{asset('img/108/vicedecana.png')}}" alt="firma vicedecana" width="40%">
    </div>
    <div class="firma3">
        Dra. Monica C. Guzman Mendoza<br>
        <b>VICEDECANA</b> <br>
        FACMENTM UMSA
    </div>

    <div class="firma_decano">
        <img src="{{asset('img/108/firma_decano_1.png')}}" alt="firma decano" width="40%">
    </div>
    <div class="firma4">
        Dr. Javier H. Peñaranda Méndez<br>
        <b>DECANO</b> <br>
        FACMENTM UMSA
    </div>

    <div class="sello">
        <img src="{{asset('img/108/sello.png')}}" alt="sello" width="25%">
    </div>
    <div class="sello_dec">
        <img src="{{asset('img/108/sello_decanato.png')}}" alt="sello" width="40%">
    </div>
    <div class="sello_vic">
        <img src="{{asset('img/sello_vicedecanato_1.png')}}" alt="sello" width="35%">
    </div>

    <div class="fecha">
        <em>
            La Paz, agosto de 2024
        </em>
    </div>

    <!--QR-->
    <div class="qr text-center">
        ID: {{$participante->id}}-{{$participante->codigo}}-2024 <br>
        <img src="data:image/png;base64,{{ base64_encode($qr) }}" height="120px" width="120px" alt="Código QR">
    </div>

    @include('partials.js')
</body>
</html>