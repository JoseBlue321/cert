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
    top: 50px; 
    left: 50px; 
}
.logo_medicina {
    position: absolute;
    top: 260px;  
    left: 40px;
}
.logo_ibba {
    position: absolute;
    top: 400px;  
    left: 40px;
}

.titulo1{
    position: absolute;
    top: 100px; 
    left: 200px; 
    right: 180px;
    text-align: left;
    font-size: 25px; /*Tamaño de texto*/
    font-family: 'Times New Roman', Times, serif; /*tipo de texto*/
    }

    .titulo2{
    position: absolute;
    top: 220px; 
    left: 200px; 
    right: 180px;
    text-align: center;
    font-size: 30px; /*Tamaño de texto*/
    font-family: 'Times New Roman', Times, serif; /*tipo de texto*/
    }

    .titulo3{
    position: absolute;
    top: 150px; 
    left: 200px; 
    right: 180px;
    text-align: center;
    font-size: 50px; /*Tamaño de texto*/
    font-family: 'fantasy',fantasy; /*tipo de texto*/
    font-weight: bold; /* Peso de la fuente en negrita */
    font-style: normal; /* Estilo de la fuente en cursiva */
    text-decoration: none; /* Subraya el texto */
    color:rgb(23, 32, 42);
    }
    .titulo4{
    position: absolute;
    top: 200px; 
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
    top: 290px; 
    left: 150px; 
    right: 80px;
    text-align: center;
    font-size: 35px; /*Tamaño de texto*/
    font-family: 'fantasy',fantasy; /*tipo de texto*/
    font-weight: bold; /* Peso de la fuente en negrita */
    font-style: normal; /* Estilo de la fuente en cursiva */
    text-decoration: none; /* Subraya el texto */
    color:rgb(23, 32, 42);
    }
    .titulo5{
    position: absolute;
    top: 370px; 
    left: 180px; 
    right: 180px;
    text-align: justify;
    font-size: 22px; /*Tamaño de texto*/
    font-family: 'Times New Roman', Times, serif; /*tipo de texto*/
    font-style: normal; /* Estilo de la fuente en cursiva */
    text-decoration: none; /* Subraya el texto */
    color:rgb(23, 32, 42);
    }

    .firma_recursos{
    position: absolute;
    top: 550px; 
    left: 250px; 
    }
    .firma1{
    position: absolute;
    top: 660px; 
    left: 180px; 
    font-size: 15px; /*Tamaño de texto*/
    font-family: 'Times New Roman', Times, serif; /*tipo de texto*/
    /*font-weight: 300; /* Peso de la fuente en negrita */
    /*font-style: normal; /* Estilo de la fuente en cursiva */
    /*text-decoration: none; /* Subraya el texto */
    width: 300px;
    text-align: center;
    }

    .firma_rector{
    position: absolute;
    top: 555px; 
    left: 630px; 
    }
    .firma2{
    position: absolute;
    top: 660px; 
    left: 600px; 
    font-size: 15px; /*Tamaño de texto*/
    font-family: 'Times New Roman', Times, serif; /*tipo de texto*/
    /*font-weight: 300; /* Peso de la fuente en negrita */
    /*font-style: normal; /* Estilo de la fuente en cursiva */
    /*text-decoration: none; /* Subraya el texto */
    width: 300px;
    text-align: center;
    }

    .firma_monica{
    position: absolute;
    top: 650px; 
    left: 550px; 
    }
    .qr {
    position: absolute;
    top: 380px;
    right:30px;
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
        <img src="{{asset('img/109/fondo.png')}}" alt="fondo" width="1056px" height="816px">
    </div>
    <!--Logo umsa-->
    <div class="logo_umsa">
        <img src="{{asset('img/umsa.png')}}" alt="logo umsa" width="10%">
    </div>
    <!--Logo medicina-->
    <div class="logo_medicina">
        <img src="{{asset('img/104/medicina.png')}}" alt="logo medicina" width="55%">
    </div>
    <!--Logo salud publica-->
    <div class="logo_ibba">
        <img src="{{asset('img/109/ibba.png')}}" alt="logo salud publica" width="23%">
    </div>
   

    <!--Contenido-->
    <div class="titulo1">
        Se confiere el presente:
    </div>
    <div class="titulo3">
        <p><b>CERTIFICADO</b> </p>
    </div>
    <div class="titulo2">
        DE RECONOCIMIENTO A:
    </div>

    <div class="nombre">
        <p>{{ strtoupper($participante->grado) }} {{ mb_strtoupper($participante->nombre) }} {{ mb_strtoupper($participante->paterno) }} {{ mb_strtoupper($participante->materno) }}</p>
    </div>

    <div class="titulo5">
        <p>
            Por su destacada participación en calidad de <b>{{ strtoupper($participante->tipo) }}</b> 
            en el Seminario <b>“EL CORAZÓN DEL ATLETA”</b>, realizado en el Paraninfo Universitario de la Universidad Mayor de San Andrés, 
            de la ciudad de La Paz - Bolivia, en fecha 29 de febrero del 2024.
            <br>
            Carga horaria: 4 horas académicas.          
        <p>
    </div>
    

    <div class="firma_recursos">
        <img src="{{asset('img/109/Firma1.png')}}" alt="firma recursos" width="25%">
    </div>
    <div class="firma1">
        Dr. Luis Fernando Zegarra Castro<br>
        <b>JEFE</b> <br>
        DIVISIÓN DESARROLLO HUMANO - UMSA
    </div>

    <div class="firma_rector">
        <img src="{{asset('img/109/Firma2.png')}}" alt="firma rector" width="50%">
    </div>

    <div class="firma2">
        M.Sc. Óscar Arnaldo Heredia Vargas<br>
        <b>RECTOR</b> <br>
        UNIVERSIDAD MAYOR DE SAN ANDRÉS
    </div>


    <!--QR-->
    <div class="qr text-center">
        ID: {{$participante->id}}-{{$participante->codigo}}-2024 <br>
        <img src="data:image/png;base64,{{ base64_encode($qr) }}" height="120px" width="120px" alt="Código QR">
    </div>

    @include('partials.js')
</body>
</html>