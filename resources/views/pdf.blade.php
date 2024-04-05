<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
    <style>
      p {
        color:black;
        text-align:center;
        text-decoration:none;
      }
      span {
          color:black;
        text-align:center;
        text-decoration:none; 
      }
      .correlativo{
          color:black;
          text-align: right;
          font-family: 'Times New Roman', Times, serif
      }
      .certificado{
          color:black;
          text-align: center;
          font-family: 'Times New Roman', Times, serif;
          font-size: 15px;
      }
      .nombre{
          color:black;
          text-align: left;
          font-family: 'Times New Roman', Times, serif;
          font-size: 20px;
      }

      div.qr {
  position: absolute;
  top: 500px;
  right: 0;
  width: 200px;
  height: 100px;
}
div.firma {
  position: absolute;
  top: 680px;
  left: 80px;
  width: 200px;
  height: 100px;
}
div.firma1 {
  position: absolute;
  top: 680px;
  left: 400px;
  width: 200px;
  height: 100px;
}
div.nombre {
  position: relative;
  width: 250px;
  height: 100px;
} 

    </style>
<body style="background-image: url('{{ asset('firmas/fondo2.png')}}'); background-size: cover;">

  <div class="container">
      <div class="row justify-content-center align-items-center">
          <div class="col-md-12">
              <table class="table">
                  <tbody>
                      <tr>
                          <td>
                              <img src="{{ asset('img/umsa.png')}}" height="100px" width="70px" alt="" >
                          </td>
                          <td>
                              <span>UNIVERSIDAD MAYOR DE SAN ANDRÉS</span>
                              <p>Facultad de Medicina, Enfermería, Nutrición y Tecnología Médica <br>
                                  Instituto de Genética
                              </p>
                              <hr>
                          
                          </td>
                          <td>
                              <img src="{{ asset('img/logo_medicina.png')}}" height="100px" width="100px" alt="" >
                          </td>
                      </tr>
                  </tbody>
              </table>                
          </div>
      </div>

      <div class="row justify-content-center align-items-center g-2">
          <div class="col-md-12">
              <div>
                  <p class="correlativo">
                      GENETICA/{{$evento->codigo}}-{{$participante->id}}/2024
                  </p>
              </div>
          </div>
      </div>

      <div class="row justify-content-center align-items-center g-2">
          <div class="col-md-12">
              <div class="certificado">
                  <h1>CERTIFICADO</h1>
                  <p class="nombre">
                      A: {{$participante->grado}} {{$participante->nombre}} {{$participante->paterno}} {{$participante->materno}} 
                  </p>
                  <p>
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam voluptatibus dolor vero tempora accusantium modi odit quaerat, odio, aspernatur hic nobis facere voluptate necessitatibus libero esse et sit officia aut.
                  </p>
                  <p>
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam voluptatibus dolor vero tempora accusantium modi odit quaerat, odio, aspernatur hic nobis facere voluptate necessitatibus libero esse et sit officia aut.
                  </p>
              </div>
          </div>
      </div>

      <br><br><br><br><br><br><br><br>
      <br><br><br><br><br><br><br>
      <div class="qr">
            Cod evento: {{$evento->codigo}}/{{$participante->id}}/2023
            <img src="data:image/png;base64,{{ base64_encode($qr) }}" height="120px" width="120px" alt="Código QR">
      </div>

      <div class="row justify-content-center align-items-center">
          <div class="col-md-12">
              <table class="table">
                  <tbody>
                      <tr>
                          <td>
                            <div class="firma">
                              <img src="{{ asset('firmas/2sf.png')}}" height="150px" width="200px" alt="" >
                            </div>
                            <div class="nombre" style="text-align: center">
                                Dr. Martin Villarroel Mareño
                                <b>VICEDECANO</b>
                                <div style="font-size: 10px">
                                  FACULTAD DE MEDICINA, ENFERMERÍA, NUTRICIÓN Y TECNOLOGÍA MÉDICA
                                </div>
                            </div>
                          </td>

                          <td>
                            <div class="firma1">
                              <img src="{{ asset('firmas/2sf.png')}}" height="150px" width="200px" alt="" >
                            </div>
                            <div class="nombre" style="text-align: center">
                                Dr. David Mérida Vergas
                                <b>DECANO</b>
                                <div style="font-size: 10px">
                                  FACULTAD DE MEDICINA, ENFERMERÍA, NUTRICIÓN Y TECNOLOGÍA MÉDICA
                                </div>
                            </div>
                          </td>
                      </tr>
                  </tbody>
              </table>
          </div>
      </div>
  </div>



    @include('partials.js')
</body>
</html>