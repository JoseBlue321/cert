<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
    <style>
.fondo {
    position: absolute;
    opacity: 0.15;
    top: 150px; 
    left: 140px; 
    /*right:0px;*/
    /*bottom:50px;*/
}
.logo_umsa {
    position: absolute;
    top: 0px; 
    left: 30px; 
    /*right:0px;*/
    /*bottom:50px;*/
}
.logo_medicina {
    position: absolute;
    top: 180px; 
    left: 0px; 
    /*right:0px;*/
    /*bottom:50px;*/
}
.logo_genetica {
    position: absolute;
    top: 330px; 
    left: 0px; 
    /*right:0px;*/
    /*bottom:50px;*/
}
.logo_bolivia {
    position: absolute;
    top: 500px; 
    left: 5px; 
    /*right:0px;*/
    /*bottom:50px;*/
}
.logo_emgs {
    position: absolute;
    top: 10px; 
    /*left: 5px;*/ 
    right:0px;
    /*bottom:50px;*/
}
.titulo1{
    position: absolute;
    top: 0px; 
    left: 180px; 
    /*right:0px;*/
    /*bottom:50px;*/
    text-align: center;
    font-size: 20px; /*Tamaño de texto*/
    font-family: 'Times New Roman', Times, serif; /*tipo de texto*/
    font-weight: bold; /* Peso de la fuente en negrita */
    font-style: normal; /* Estilo de la fuente en cursiva */
    text-decoration: none; /* Subraya el texto */
    color: rgb(25, 111, 61);
    }
    .titulo2{
    position: absolute;
    top: 110px; 
    left: 180px; 
    /*right:0px;*/
    /*bottom:50px;*/
    text-align: center;
    font-size: 16px; /*Tamaño de texto*/
    font-family: 'Times New Roman', Times, serif; /*tipo de texto*/
    /*font-weight: bold; /* Peso de la fuente en negrita */
    font-style: normal; /* Estilo de la fuente en cursiva */
    text-decoration: none; /* Subraya el texto */
    color:rgb(33, 47, 60);
    }

    .correlativo{
    position: absolute;
    top: 160px; 
    /*left: 150px;*/ 
    right:50px;*/
    /*bottom:50px;*/
    font-size: 20px;
    font-family: 'Times New Roman', Times, serif;
    }

    .certificado{
    position: absolute;
    top: 150px; 
    left: 40%; 
    /*right:0px;*/
    /*bottom:50px;*/
    font-size: 35px; /*Tamaño de texto*/
    font-family: 'Times New Roman', Times, serif; /*tipo de texto*/
    font-weight: bold; /* Peso de la fuente en negrita */
    font-style: normal; /* Estilo de la fuente en cursiva */
    text-decoration: none; /* Subraya el texto */
    }

    .confiere{
    position: absolute;
    top: 200px; 
    left: 150px; 
    /*right:0px;*/
    /*bottom:50px;*/
    font-size: 20px;
    font-family: 'Times New Roman', Times, serif;
    }

    .nombre{
    position: absolute;
    text-align: center;
    top: 240px; 
    left: 230px; 
    /*right:0px;*/
    /*bottom:50px;*/
    font-size: 30px; /*Tamaño de texto*/
    font-family: Verdana, Geneva, Tahoma, sans-serif; /*tipo de texto*/
    font-weight: 300; /* Peso de la fuente en negrita */
    font-style: normal; /* Estilo de la fuente en cursiva */
    text-decoration: none; /* Subraya el texto */
    }
    .contenido{
    position: absolute;
    top: 300px; 
    left: 150px; 
    right:80px;
    /*bottom:50px;*/
    font-size: 20px; /*Tamaño de texto*/
    font-family: 'Times New Roman', Times, serif; /*tipo de texto*/
    /*font-weight: 300; /* Peso de la fuente en negrita */
    /*font-style: normal; /* Estilo de la fuente en cursiva */
    /*text-decoration: none; /* Subraya el texto */
    }
    .firma_decano {
    position: absolute;
    top: 545px; 
    left: 200px; 
    /*right:0px;*/
    /*bottom:50px;*/
}
    .firma1{
    position: absolute;
    top: 600px; 
    left: 180px; 
    /*right:80px;*/
    /*bottom:50px;*/
    font-size: 14px; /*Tamaño de texto*/
    font-family: 'Times New Roman', Times, serif; /*tipo de texto*/
    /*font-weight: 300; /* Peso de la fuente en negrita */
    /*font-style: normal; /* Estilo de la fuente en cursiva */
    /*text-decoration: none; /* Subraya el texto */
    width: 200px;
    text-align: center;
    }
    .firma_noemi {
    position: absolute;
    top: 540px; 
    left: 430px; 
    /*right:0px;*/
    /*bottom:50px;*/
}
    .firma2{
    position: absolute;
    top: 600px; 
    left: 400px; 
    /*right:80px;*/
    /*bottom:50px;*/
    font-size: 14px; /*Tamaño de texto*/
    font-family: 'Times New Roman', Times, serif; /*tipo de texto*/
    /*font-weight: 300; /* Peso de la fuente en negrita */
    /*font-style: normal; /* Estilo de la fuente en cursiva */
    /*text-decoration: none; /* Subraya el texto */
    width: 200px;
    text-align: center;
    }
    .f3 {
    position: absolute;
    top: 570px; 
    left: 640px; 
    /*right:0px;*/
    /*bottom:50px;*/
}
    .firma3{
    position: absolute;
    top: 600px; 
    left: 620px; 
    /*right:80px;*/
    /*bottom:50px;*/
    font-size: 14px; /*Tamaño de texto*/
    font-family: 'Times New Roman', Times, serif; /*tipo de texto*/
    /*font-weight: 300; /* Peso de la fuente en negrita */
    /*font-style: normal; /* Estilo de la fuente en cursiva */
    /*text-decoration: none; /* Subraya el texto */
    width: 200px;
    text-align: center;
    }
    .qr {
    position: absolute;
    /*top: 10px;*/ 
    /*left: 20px;*/ 
    right:0px;
    bottom:50px;
}

    </style>

<body>
    <!--Fondo-->
    <div class="fondo">
        <img src="{{asset('img/fondo_illimani.png')}}" alt="fondo" width="95%" height="65%">
    </div>

    <!--Logo umsa-->
    <div class="logo_umsa">
        <img src="{{asset('img/umsa.png')}}" alt="logo umsa" width="9%" height="20%">
    </div>
    <!--Logo medicina-->
    <div class="logo_medicina">
        <img src="{{asset('img/logo_medicina.png')}}" alt="logo medicina" width="130px" height="130px">
    </div>
    <!--Logo genetica-->
    <div class="logo_genetica">
        <img src="{{asset('img/genetica.jpg')}}" alt="logo genetica" width="120px" height="120px">
    </div>
    <!--Logo bolivia-->
    <div class="logo_bolivia">
        <img src="{{asset('img/bolivia.png')}}" alt="logo bolivia" width="120px" height="140px">
    </div>
    <!--Logo emgs-->
    <div class="logo_emgs">
        <img src="{{asset('img/emgs.png')}}" alt="logo emgs" width="130px" height="130px">
    </div>


    <!--Contenido-->
    <div class="titulo1">
        <h1>XXV CURSO INTERNACIONAL <br>
            ALEXANDER HOLLAENDER
        </h1>
    </div>
    <div class="titulo2">
        <h3>“BIOMONITOREO AMBIENTAL APLICADO A LA SALUD HUMANA”</h3>
    </div>

    <div class="correlativo">
        GENETICA/CURSO/{{$evento->codigo}}-{{$participante->id}}/2024
    </div>

    <div class="certificado">
        CERTIFICADO
    </div>

    <div class="confiere">
        OTORGADO A:
    </div>

    <div class="nombre">
        {{ strtoupper($participante->grado) }} {{ mb_strtoupper($participante->nombre) }} {{ mb_strtoupper($participante->paterno) }} {{ mb_strtoupper($participante->materno) }}
    </div>

    <div class="contenido">
        <p>
            Por participar como <b>{{ strtoupper($participante->tipo) }} </b> 
            en el XXV CURSO INTERNACIONAL ALEXANDER HOLLAENDER: 
            “BIOMONITOREO AMBIENTAL APLICADO A LA SALUD HUMANA” <br><br>
            Realizado del 17 al 20 de abril en La Paz Bolivia, 
            <b>con 40 horas académicas.</b> 
        </p>
    </div>

    <div class="firma_decano">
        <img src="{{asset('firmas/Firma_Decano.jpg')}}" alt="firma decano" width="150px" height="60px">
    </div>
    <div class="firma1">
        Dr. David B. Mérida Vargas <br>
        <b>DECANO</b> <br>
        FACULTAD DE MEDICINA, ENFERMERÍA, NUTRICIÓN Y TECNOLOGÍA MÉDICA
    </div>
    <div class="firma_noemi">
        <img src="{{asset('firmas/Firma_Noemi.jpeg')}}" alt="firma noemi" width="130px" height="70px">
    </div>
    <div class="firma2">
        DRA. NOEMI TIRADO B. <br>
        <b>PRESIDENTA ALAMCTA</b> <br>
        ORGANIZADORA
    </div>
    <div class="f3">
        <img src="{{asset('firmas/firma3.png')}}" alt="firma 3" width="150px" height="30px">
    </div>
    <div class="firma3">
        Dra. Deborah Rubicek<br>
        <b>CHAIR COMITÉ ALEXANDER HOLLAENDER</b> <br>
        EMGS
    </div>

    <!--QR-->
    <div class="qr text-center">
        Cod: {{$evento->codigo}}/{{$participante->id}}/2024<br>
        <img src="data:image/png;base64,{{ base64_encode($qr) }}" height="120px" width="120px" alt="Código QR">
    </div>


    


    @include('partials.js')
</body>
</html>