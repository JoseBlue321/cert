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
    top: 20px; 
    left: 50px; 
}

.logo_medicina {
    position: absolute;
    top: 25px;  
    right:50px;
}

.titulo1{
    position: absolute;
    top: 40px; 
    left: 170px; 
    right: 170px;
    text-align: center;
    font-size: 12px; /*Tamaño de texto*/
    font-family: 'Times New Roman', Times, serif; /*tipo de texto*/
    font-style: normal; /* Estilo de la fuente en cursiva */
    text-decoration: none; /* Subraya el texto */
    color: rgb(23, 32, 42);
    }

    .titulo2{
    position: absolute;
    top: 190px; 
    left: 170px; 
    right: 170px; 
    text-align: center;
    font-size: 20px; /*Tamaño de texto*/
    font-family: 'Times New Roman', Times, serif; /*tipo de texto*/
    font-weight: bold; /* Peso de la fuente en negrita */
    font-style: normal; /* Estilo de la fuente en cursiva */
    text-decoration: none; /* Subraya el texto */
    color:rgb(203, 67, 53);
    }

    .titulo3{
    position: absolute;
    text-align: center;
    top: 230px; 
    left: 170px; 
    right: 170px; 
    text-align: left;
    font-size: 40px; /*Tamaño de texto*/
    font-family: "Anton SC", sans-serif;
    font-weight: 400;
    font-style: normal;
    }

    .nombre{
    position: absolute;
    text-align: center;
    top: 230px; 
    left: 170px; 
    right: 170px; 
    text-align: center;
    font-size: 40px; /*Tamaño de texto*/
    font-family: "Anton SC", sans-serif;
    font-weight: 400;
    font-style: normal;
    }

    .contenido{
    position: absolute;
    top: 330px; 
    left: 130px; 
    right: 150px; 
    text-align: left;
    font-size: 20px; /*Tamaño de texto*/
    font-family: 'Times New Roman', Times, serif; /*tipo de texto*/
    /*font-weight: 300; /* Peso de la fuente en negrita */
    /*font-style: normal; /* Estilo de la fuente en cursiva */
    /*text-decoration: none; /* Subraya el texto */
    }

    .firma_dina {
    position: absolute;
    top: 560px; 
    left: 150px; 
    }
    .firma1{
    position: absolute;
    top: 640px; 
    left: 130px; 
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
    top: 640px; 
    left: 410px; 
    font-size: 15px; /*Tamaño de texto*/
    font-family: 'Times New Roman', Times, serif; /*tipo de texto*/
    /*font-weight: 300; /* Peso de la fuente en negrita */
    /*font-style: normal; /* Estilo de la fuente en cursiva */
    /*text-decoration: none; /* Subraya el texto */
    width: 300px;
    text-align: center;
    }

    .firma_alanes{
    position: absolute;
    top: 560px; 
    left: 650px; 
    }
    .firma3{
    position: absolute;
    top: 640px; 
    left: 640px; 
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
    .qr {
    position: absolute;
    /*top: 10px;*/ 
    /*left: 20px;*/ 
    right:50px;
    bottom:200px;
}

    </style>

<body>
    <!--Fondo-->
    <div class="fondo">
        <img src="{{asset('img/106/iinsad.jpg')}}" alt="fondo" width="1056px" height="816px">
    </div>
    <!--Logo umsa-->
    <div class="logo_umsa">
        <img src="{{asset('img/umsa.png')}}" alt="logo umsa" width="9%" height="20%">
    </div>
    <!--Logo medicina-->
    <div class="logo_medicina">
        <img src="{{asset('img/104/medicina.png')}}" alt="logo medicina" width="130px" height="130px">
    </div>

    <!--Contenido-->
    <div class="titulo1">
        <h1 >UNIVERSIDAD MAYOR DE SAN ANDRÉS</h1>
        <h2>FACULTAD DE MEDICINA, ENFERMERÍA, NUTRICIÓN Y TECNOLOGÍA MÉDICA</h2>
        <h2>COMITÉ ELECTORAL</h2>
        <h2>Elecciones de Decano(a) y Vicedecano(a) 2024 - 2027</h2>
    </div>
    <div class="titulo2">
        <h1>
            CERTIFICA
        </h1>
    </div>
    <div class="titulo3">
            A:
    </div>
    
    <div class="nombre">
        {{ strtoupper($participante->grado) }} {{ mb_strtoupper($participante->nombre) }} {{ mb_strtoupper($participante->paterno) }} {{ mb_strtoupper($participante->materno) }}
    </div>

    <div class="contenido">
        <p>
            Por su participación y desempeño en sus funciones como <b>{{ strtoupper($participante->tipo) }} </b> en las elecciones a 
            Autoridades Facultativas Decano(a) y Vicedecano(a) 2024 - 2027 de la Facultad de Medicina, Enfermería, Nutrición y Tecnología Médica,
            llevado a cabo el día viernes 12 de Julio de 2024.
            <br>
            Agradecemos su dedicación y compromiso que han sido fundamentales para garantizar la transparencia y legitimidad del proceso electoral.
            <br>
            Es dado en la ciudad de La Paz, a los 12 días del mes de julio, del año 2024.
        </p>
    </div>

    <div class="firma2">
        Dra. Ángela Maria Clara Alanes Fernandez<br>
        <b>PRESIDENTE</b> <br>
        COMITÉ ELECTORAL
    </div>


    <!--QR-->
    <div class="qr text-center">
        Cod: {{$evento->codigo}}/{{$participante->codigo}}/2024 <br>
        <img src="data:image/png;base64,{{ base64_encode($qr) }}" height="120px" width="120px" alt="Código QR">
    </div>

    @include('partials.js')
</body>
</html>