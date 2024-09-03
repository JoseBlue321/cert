<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
<body>
    <div class="container">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col-md-12">
                <h1>EVENTOS</h1>
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>CODIGO</th>
                            <th>EVENTO</th>
                            <th>DETALLE</th>
                            <th>FECHA</th>
                            <th>VER</th>
                            <th>GENERAR TODO</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($eventos as $evento)
                        <tr>
                            <td>{{$evento->id}}</td>
                            <td>{{$evento->codigo}}</td>
                            <td>{{$evento->evento}}</td>
                            <td>{{$evento->detalle}}</td>
                            <td>{{$evento->fecha}}</td>
                            <td>
                                <a name="" id="" class="btn btn-info" href="{{route('show.eventos',$evento->id)}}" role="button">Ver</a>
                            </td>
                            <td>
                                <a class="btn btn-success" href="{{route('pdf.todo',$evento->id)}}" role="button">Generar Todo</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>  
            </div>
        </div>
    </div>


    @include('partials.js')
</body>
</html>