<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
    <style>
    .correlativo{
    position: absolute;
    top: 150px; 
    /*left: 150px;*/ 
    right:0px;*/
    /*bottom:50px;*/
    font-size: 20px;
    font-family: 'Times New Roman', Times, serif;
    }

    .confiere{
    position: absolute;
    top: 150px; 
    left: 150px; 
    /*right:0px;*/
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
    font-size: 40px; /*Tamaño de texto*/
    font-family: 'Times New Roman', Times, serif; /*tipo de texto*/
    font-weight: bold; /* Peso de la fuente en negrita */
    font-style: normal; /* Estilo de la fuente en cursiva */
    text-decoration: none; /* Subraya el texto */
    }
    .tipo{
    position: absolute;
    top: 200px; 
    left: 41%; 
    /*right:0px;*/
    /*bottom:50px;*/
    font-size: 30px; /*Tamaño de texto*/
    font-family: 'Times New Roman', Times, serif; /*tipo de texto*/
    /*font-weight: 100; /* Peso de la fuente en negrita */
    font-style: normal; /* Estilo de la fuente en cursiva */
    /*text-decoration: none; /* Subraya el texto */
    }
    .nombre{
    position: absolute;
    top: 250px; 
    left: 200px; 
    /*right:0px;*/
    /*bottom:50px;*/
    font-size: 35px; /*Tamaño de texto*/
    font-family: 'Times New Roman', Times, serif; /*tipo de texto*/
    font-weight: 300; /* Peso de la fuente en negrita */
    font-style: normal; /* Estilo de la fuente en cursiva */
    text-decoration: none; /* Subraya el texto */
    }
    .contenido{
    position: absolute;
    top: 300px; 
    left: 150px; 
    /*right:0px;*/
    /*bottom:50px;*/
    font-size: 20px; /*Tamaño de texto*/
    font-family: 'Times New Roman', Times, serif; /*tipo de texto*/
    /*font-weight: 300; /* Peso de la fuente en negrita */
    /*font-style: normal; /* Estilo de la fuente en cursiva */
    /*text-decoration: none; /* Subraya el texto */
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
    <div>
        <img src="{{asset('firmas/fondo.png')}}" alt="fondo" width="100%" height="100%">
    </div>

    <!--Contenido-->
    <div class="correlativo">
        GENETICA/{{$evento->codigo}}-{{$participante->id}}/2024
    </div>
    <div class="confiere">
        Confiere el Presente:
    </div>
    <div class="certificado">
        CERTIFICADO
    </div>
    <div class="tipo">
        DE PARTICIPACIÓN <!--{{ strtoupper($participante->tipo) }}-->
    </div>
    <div class="nombre">
        A: {{ strtoupper($participante->grado) }} {{ strtoupper($participante->nombre) }} {{ strtoupper($participante->paterno) }} {{ strtoupper($participante->materno) }}
    </div>
    <div class="contenido">
        Ha participado activamente en el Congreso Latinoamericano de Mutagénesis, Carcinogénesis y Teratogénesis Ambiental, celebrado del <b>22 al 25 de abril 2024.</b> 
Durante el evento, el participante ha asistido a diversas conferencias, presentaciones de investigaciones, mesas redondas y actividades relacionadas con el estudio.
<br> Por lo tanto, se le otorga este certificado como reconocimiento a su dedicación y contribución al intercambio de conocimientos y experiencias en el campo de la mutagénesis, carcinogénesis y teratogénesis ambiental.
    </div>




    <!--QR-->
    <div class="qr text-center">
        Cod: {{$evento->codigo}}/{{$participante->id}}/2023 <br>
        <img src="data:image/png;base64,{{ base64_encode($qr) }}" height="120px" width="120px" alt="Código QR">
    </div>


    


    @include('partials.js')
</body>
</html>