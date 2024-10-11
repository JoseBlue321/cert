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
    left: 150px; 
}
.logo_medicina {
    position: absolute;
    top: 40px;  
    left: 465px;
}
.logo_iinsad {
    position: absolute;
    top: 40px;  
    right: 150px;
}

.titulo1{
    position: absolute;
    top: 150px; 
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
    top: 185px; 
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
    top: 200px; 
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
    top: 240px; 
    left: 100px;
    right: 100px; 
    text-align: center;
    font-size: 20px; /*Tamaño de texto*/
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
    top: 250px; 
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
    top: 290px; 
    left: 100px; 
    right: 100px;
    text-align: center;
    font-size: 45px; /*Tamaño de texto*/
    font-family: "Great Vibes", cursive;
    font-weight: 400;
    font-style: normal;
    color:rgb(23, 32, 42);
    }
    .a{
    position: absolute;
    top: 310px; 
    left: 90px; 
    right: 100px;
    text-align: left;
    font-size: 50px; /*Tamaño de texto*/
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
    bottom: 80px; 
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
    bottom: 80px;
    left: 100px;
    text-align: center;
    font-size: 11px; /*Tamaño de texto*/
    font-family: "Roboto Slab", serif;
    font-optical-sizing: auto;
    font-weight: <weight>;
    font-style: normal;
    line-height: 15px;
    color:rgb(23, 32, 42);

}
    .fecha {
    position: absolute;
    /*top: 10px;*/ 
    /*left: 20px;*/ 
    right:100px;
    bottom:230px;
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
        <img src="{{asset('img/110/fondo_iinsad.png')}}" alt="fondo" width="1058px" height="816px">
    </div>
    <!--Logo umsa-->
    <div class="logo_umsa">
        <img src="{{asset('img/umsa.png')}}" alt="logo umsa" width="80px">
    </div>
    <!--Logo medicina-->
    <div class="logo_medicina">
        <img src="{{asset('img/104/medicina.png')}}" alt="logo medicina" width="110px">
    </div>
    <!--Logo iinsad-->
    <div class="logo_iinsad">
        <img src="{{asset('img/110/iinsad.png')}}" alt="logo iinsad" width="110px">
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
            INSTITUTO DE INVESTIGACIÓN EN SALUD Y DESARROLLO IINSAD
        </h1>
    </div>

    <div class="confiere">
        CONFIERE EL PRESENTE
    </div>
<!--
    <div class="correlativo">
        FMENT/VICEDEC/CERT N° {{$participante->id}}/2024
    </div>
-->
    <div class="certificado">
        <h1>
            CERTIFICADO
        </h1>
    </div>
    <div class="nombre">
            {{$participante->grado}} {{$participante->nombre}} {{$participante->paterno}} {{$participante->materno}}
    </div>

    <div class="a">
        A:
    </div>

    <div class="texto1">
        En el marco de la celebración de los 25 años del Instituto, 
        extendemos nuestras más sinceras felicitaciones y agradecimiento, 
        en reconocimiento a su destacada trayectoria académica y su compromiso 
        con la investigación a lo largo de sus años de servicio.
    </div>

    <!--
    <div class="firma_vicedecana">
        <img src="{{asset('img/104/vicedecana.png')}}" alt="firma" width="50%">
    </div>
-->
    <div class="nombre_vicedecana">
        _______________________________ <br>
        Dra. Ana María Aguilar Liendo <br>
        <b>DIRECTORA</b>
    </div>
    <div class="fecha">
        La Paz, septiembre 2024
    </div>

    <!--QR-->
    <!--
    <div class="qr">
        IINSAD/CERT. Nro. {{$participante->codigo}}-2024 ID: {{$participante->id}} <br>
        <img src="data:image/png;base64,{{ base64_encode($qr) }}" height="130px" width="130px" alt="Código QR">
        <br>
    -->
    </div>

    <!--
    <div class="sello">
        <img src="{{asset('img/sello_vicedecanato_1.png')}}" alt="sello" width="150px">
    </div>
-->

    @include('partials.js')
</body>
</html>