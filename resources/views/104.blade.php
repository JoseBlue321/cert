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
    top: 25px; 
    left: 180px; 
    text-align: center;
    font-size: 12px; /*Tamaño de texto*/
    font-family: 'Times New Roman', Times, serif; /*tipo de texto*/
    font-style: normal; /* Estilo de la fuente en cursiva */
    text-decoration: none; /* Subraya el texto */
    color: rgb(23, 32, 42);
    }

    .titulo2{
    position: absolute;
    top: 180px; 
    left: 250px; 
    text-align: center;
    font-size: 18px; /*Tamaño de texto*/
    font-family: 'Times New Roman', Times, serif; /*tipo de texto*/
    font-weight: bold; /* Peso de la fuente en negrita */
    font-style: normal; /* Estilo de la fuente en cursiva */
    text-decoration: none; /* Subraya el texto */
    color:rgb(203, 67, 53);
    }

    .titulo3{
    position: absolute;
    top: 230px; 
    left: 150px; 
    text-align: center;
    font-size: 18px; /*Tamaño de texto*/
    font-family: 'Times New Roman', Times, serif; /*tipo de texto*/
    font-weight: bold; /* Peso de la fuente en negrita */
    font-style: normal; /* Estilo de la fuente en cursiva */
    text-decoration: none; /* Subraya el texto */
    color:rgb(23, 32, 42);
    }

    .certificado{
    position: absolute;
    top: 250px; 
    left: 380px; 
    text-align: center;
    font-size: 18px; /*Tamaño de texto*/
    font-family: 'Times New Roman', Times, serif; /*tipo de texto*/
    font-weight: bold; /* Peso de la fuente en negrita */
    font-style: normal; /* Estilo de la fuente en cursiva */
    text-decoration: none; /* Subraya el texto */
    color:rgb(23, 32, 42);
    }

    .nombre{
    position: absolute;
    text-align: center;
    top: 300px; 
    left: 180px; 
    font-size: 30px; /*Tamaño de texto*/
    font-family: Verdana, Geneva, Tahoma, sans-serif; /*tipo de texto*/
    font-weight: 300; /* Peso de la fuente en negrita */
    font-style: normal; /* Estilo de la fuente en cursiva */
    text-decoration: none; /* Subraya el texto */
    }

    .contenido{
    position: absolute;
    top: 370px; 
    left: 150px; 
    right:80px;
    text-align: left;
    font-size: 20px; /*Tamaño de texto*/
    font-family: 'Times New Roman', Times, serif; /*tipo de texto*/
    /*font-weight: 300; /* Peso de la fuente en negrita */
    /*font-style: normal; /* Estilo de la fuente en cursiva */
    /*text-decoration: none; /* Subraya el texto */
    }

    .firma_dina{
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
        <img src="{{asset('img/104/1.png')}}" alt="fondo" width="1056px" height="816px">
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
        <h2>DEPARTAMENTO DE MEDICINA Y SALUD MENTAL</h2>
        <h3>CÁTEDRA DE MEDICINA II</h3>
        <h2>CAPÍTULO DE INMUNOLOGÍA</h2>
    </div>
    <div class="titulo2">
        <h1>
            JORNADA DE ACTUALIZACIÓN
        </h1>
    </div>

    <div class="titulo3">
        <p>Se otorga el presente</p>
    </div>
    <div class="certificado">
        <h1>CERTIFICADO</h1>
    </div>
    
    <div class="nombre">
        A: {{ strtoupper($participante->grado) }} {{ mb_strtoupper($participante->nombre) }} {{ mb_strtoupper($participante->paterno) }} {{ mb_strtoupper($participante->materno) }}
    </div>

    <div class="contenido">
        <p>
            Por su participación como <b>{{ strtoupper($participante->tipo) }} </b> en la Jornada de 
            Actualización sobre "Errores innatos de la Inmunidad", llevada acabo el día miercoles 24 de Julio modalidad virtual.
            <br>
            Valor curricular de <b>10 horas académicas.</b>
            <br><br>
            <p style="text-align: center">
                La Paz, julio del 2024 
            </p>
        </p>
    </div>
    <div class="firma_dina">
        <img src="{{asset('img/104/dina.png')}}" alt="firma dina" width="240px" height="120px">
    </div>
    <div class="firma1">
        Dra. Dina Zapana  <br>
        <b>JEFE a.i. CAPÍTULO INMUNOLOGÍA</b>
    </div>


    <div class="firma2">
        Dr. Nelson Ramírez<br>
        <b>JEFE DE DEPARTAMENTO</b> <br>
        MEDICINA Y SALUD MENTAL
    </div>


    <div class="firma3">
        Dra. Angela Ma. Clara Alanes Fernandez<br>
        <b>VICEDECANA a.i.</b> <br>
        FACULTAD DE MEDICINA
    </div>

    <!--QR-->
    <div class="qr text-center">
        Cod: {{$evento->codigo}}/{{$participante->id}}/2024 <br>
        <img src="data:image/png;base64,{{ base64_encode($qr) }}" height="120px" width="120px" alt="Código QR">
    </div>

    @include('partials.js')
</body>
</html>