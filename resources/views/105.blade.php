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
    top: 40px; 
    left: 50px; 
}
.logo_medicina {
    position: absolute;
    top: 220px;  
    left:30px;
}
.logo_iinsad {
    position: absolute;
    top: 360px;  
    left:35px;
}
.logo_northern {
    position: absolute;
    top: 40px;  
    right:30px;
}
.logo_red {
    position: absolute;
    top: 200px;  
    right:50px;
}

.titulo1{
    position: absolute;
    top: 25px; 
    left: 180px; 
    text-align: center;
    font-size: 10px; /*Tamaño de texto*/
    font-family: 'Times New Roman', Times, serif; /*tipo de texto*/
    font-weight: bold; /* Peso de la fuente en negrita */
    font-style: normal; /* Estilo de la fuente en cursiva */
    text-decoration: none; /* Subraya el texto */
    color: rgb(23, 32, 42);
    }

    .titulo2{
    position: absolute;
    top: 180px; 
    left: 200px; 
    text-align: center;
    font-size: 12px; /*Tamaño de texto*/
    font-family: 'Times New Roman', Times, serif; /*tipo de texto*/
    font-weight: bold; /* Peso de la fuente en negrita */
    font-style: normal; /* Estilo de la fuente en cursiva */
    text-decoration: none; /* Subraya el texto */
    color:rgb(192, 57, 43);
    }

    .titulo3{
    position: absolute;
    top: 220px; 
    left: 260px; 
    text-align: center;
    font-size: 12px; /*Tamaño de texto*/
    font-family: 'Times New Roman', Times, serif; /*tipo de texto*/
    font-weight: bold; /* Peso de la fuente en negrita */
    font-style: normal; /* Estilo de la fuente en cursiva */
    text-decoration: none; /* Subraya el texto */
    color:rgb(41, 128, 185);
    }
    .titulo4{
    position: absolute;
    top: 250px; 
    left: 260px; 
    text-align: center;
    font-size: 12px; /*Tamaño de texto*/
    font-family: 'Times New Roman', Times, serif; /*tipo de texto*/
    font-weight: bold; /* Peso de la fuente en negrita */
    font-style: normal; /* Estilo de la fuente en cursiva */
    text-decoration: none; /* Subraya el texto */
    color:rgb(34, 153, 84);
    }
    .titulo5{
    position: absolute;
    top: 280px; 
    left: 180px; 
    right: 180px;
    text-align: center;
    font-size: 14px; /*Tamaño de texto*/
    font-family: 'Times New Roman', Times, serif; /*tipo de texto*/
    font-weight: bold; /* Peso de la fuente en negrita */
    font-style: normal; /* Estilo de la fuente en cursiva */
    text-decoration: none; /* Subraya el texto */
    color:rgb(192, 57, 43);
    }
    .titulo6{
    position: absolute;
    top: 390px; 
    left: 180px; 
    right: 180px;
    text-align: center;
    font-size: 14px; /*Tamaño de texto*/
    font-family: 'Times New Roman', Times, serif; /*tipo de texto*/
    font-weight: bold; /* Peso de la fuente en negrita */
    font-style: normal; /* Estilo de la fuente en cursiva */
    text-decoration: none; /* Subraya el texto */
    color:rgb(23, 32, 42);
    }
    .titulo7{
    position: absolute;
    top: 450px; 
    left: 180px; 
    right: 180px;
    text-align: center;
    font-size: 25px; /*Tamaño de texto*/
    font-family: 'fantasy',fantasy; /*tipo de texto*/
    font-weight: bold; /* Peso de la fuente en negrita */
    font-style: normal; /* Estilo de la fuente en cursiva */
    text-decoration: none; /* Subraya el texto */
    color:rgb(23, 32, 42);
    }
    .nombre{
    position: absolute;
    top: 480px; 
    left: 180px; 
    right: 180px;
    text-align: center;
    font-size: 28px; /*Tamaño de texto*/
    font-family: 'fantasy',fantasy; /*tipo de texto*/
    font-weight: bold; /* Peso de la fuente en negrita */
    font-style: normal; /* Estilo de la fuente en cursiva */
    text-decoration: none; /* Subraya el texto */
    color:rgb(23, 32, 42);
    }
    .tipo{
    position: absolute;
    top: 520px; 
    left: 180px; 
    right: 180px;
    text-align: center;
    font-size: 25px; /*Tamaño de texto*/
    font-family: 'fantasy',fantasy; /*tipo de texto*/
    font-weight: bold; /* Peso de la fuente en negrita */
    font-style: normal; /* Estilo de la fuente en cursiva */
    text-decoration: none; /* Subraya el texto */
    color:rgb(23, 32, 42);
    }

    .firma_dina{
    position: absolute;
    top: 550px; 
    left: 150px; 
    }
    .firma1{
    position: absolute;
    top: 650px; 
    left: 50px; 
    font-size: 15px; /*Tamaño de texto*/
    font-family: 'Times New Roman', Times, serif; /*tipo de texto*/
    /*font-weight: 300; /* Peso de la fuente en negrita */
    /*font-style: normal; /* Estilo de la fuente en cursiva */
    /*text-decoration: none; /* Subraya el texto */
    width: 250px;
    text-align: center;
    }

    .firma_nelson{
    position: absolute;
    top: 560px; 
    left: 400px; 
    }
    .firma2{
    position: absolute;
    top: 650px; 
    left: 300px; 
    font-size: 15px; /*Tamaño de texto*/
    font-family: 'Times New Roman', Times, serif; /*tipo de texto*/
    /*font-weight: 300; /* Peso de la fuente en negrita */
    /*font-style: normal; /* Estilo de la fuente en cursiva */
    /*text-decoration: none; /* Subraya el texto */
    width: 200px;
    text-align: center;
    }

    .firma_alanes{
    position: absolute;
    top: 560px; 
    left: 650px; 
    }
    .firma3{
    position: absolute;
    top: 650px; 
    left: 500px; 
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
    top: 600px; 
    right: 80px; 
    }
    .firma4{
    position: absolute;
    top: 650px; 
    right:50px;
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
    /*top: 10px;*/ 
    /*left: 20px;*/ 
    right:40px;
    bottom:250px;
}

    </style>

<body>
    <!--Fondo-->
    <div class="fondo">
        <img src="{{asset('img/105/1.jpg')}}" alt="fondo" width="1056px" height="816px">
    </div>
    <!--Logo umsa-->
    <div class="logo_umsa">
        <img src="{{asset('img/umsa.png')}}" alt="logo umsa" width="9%" height="20%">
    </div>
    <!--Logo medicina-->
    <div class="logo_medicina">
        <img src="{{asset('img/104/medicina.png')}}" alt="logo medicina" width="120px" height="120px">
    </div>
    <!--Logo insad-->
    <div class="logo_iinsad">
        <img src="{{asset('img/105/iinsad.png')}}" alt="logo iinsad" width="110px" height="110px">
    </div>
    <!--Logo northern-->
    <div class="logo_northern">
        <img src="{{asset('img/105/northern.png')}}" alt="logo iinsad" width="180px" height="130px">
    </div>
    <!--Logo red-->
    <div class="logo_red">
        <img src="{{asset('img/105/red.png')}}" alt="logo iinsad" width="120px" height="170px">
    </div>

    <!--Contenido-->
    <div class="titulo1">
        <h1 >Universidad Mayor de San Andrés</h1>
        <h1>Facultad de Medicina, Enfermería, Nutrición y Tecnología Médica</h1>
        <h1>Unidad de Parasitología, Medicina Tropical y Medio Ambiente, <br>
            Instituto de Investigación en Salud y Desarrollo <br>
            UPAMETROP/IINSAD <br>
            Departamento de Patología, Cátedra de Parasitología
        </h1>
    </div>
    <div class="titulo2">
        <h1>
            Department of Anthropology, Northern Illinois University / NIU
        </h1>
    </div>

    <div class="titulo3">
        <h1>Red Boliviana de Primatología / REDBOLPRIM</h1>
    </div>
    <div class="titulo4">
        <h1>SEMINARIO  CIENTÍFICO INTERNACIONAL</h1>
    </div>
    <div class="titulo5">
        <h1>“De la biología a la búsqueda de patógenos zoonóticos emergentes en micromamíferos amazónicos, 
            bajo el enfoque de Una Salud (One Health)”
        </h1>
    </div>
    <div class="titulo6">
        <h3>
        Compartiendo resultados de los proyectos de cooperación científica entre la Facultad de Medicina, UMSA y la Northern Illinois University (NIU), en el marco de Una Salud (One Health) 
        <br>(Resolución Honorable Consejo Facultativo N° 463/2024)
        </h3>
    </div>
    <div class="titulo7">
        <p><b>CERTIFICADO</b> </p>
    </div>

    <div class="nombre">
        <p> {{ strtoupper($participante->grado) }} {{ mb_strtoupper($participante->nombre) }} {{ mb_strtoupper($participante->paterno) }} {{ mb_strtoupper($participante->materno) }}</p>
    </div>

    <div class="tipo">
        <p>- {{ strtoupper($participante->tipo) }} -</p>
    </div>

    <div class="firma1">
        Dr. Eddy Martínez Avendaño<br>
        <b>ORGANIZADOR</b> <br>
        UPAMETROP/IINSAD/UMSA
    </div>


    <div class="firma2">
        Dra. Ana María Aguilar Liendo<br>
        <b>DIRECTORA</b> <br>
        IINSAD/UMSA
    </div>


    <div class="firma3">
        Dr. Martín Villarroel Mareño<br>
        <b>VICEDECANO</b> <br>
        FACULTAD DE MEDICINA/UMSA 
    </div>

    <div class="firma_decano">
        <img src="{{asset('img/105/decano.png')}}" alt="firma ddecano" width="170px" height="60px">
    </div>
    <div class="firma4">
        Dr. David Mérida Vargas<br>
        <b>DECANO</b> <br>
        FACULTAD DE MEDICINA/UMSA 
    </div>

    <!--QR-->
    <div class="qr text-center">
        Cod: SI-24-{{$participante->codigo}} <br>
        <img src="data:image/png;base64,{{ base64_encode($qr) }}" height="120px" width="120px" alt="Código QR">
    </div>

    @include('partials.js')
</body>
</html>