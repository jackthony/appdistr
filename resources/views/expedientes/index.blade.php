<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
<div class="container-fluid bg-dark">
    <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">Expedientes</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/expedientes/create">Agregar Expediente</a>
                      </li>
                    </ul>
                  </div>
                </div>
            </nav>
        </div>
    </div>
</div>


<div class="container-fluid bg-dark">
    <div class="row">
        <div class="col-10 offset-1">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-dark">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Numero de Registro</th>
                            <th>Tipo de Expediente</th>
                            <th>Descripcion</th>
                            <th>Atencion</th>
                            <th>Recepcion</th>
                            <th>Observaciones</th>
                            <th>Tipo de Documento</th>
                            <th>Fecha</th>
                            <th>Accion</th>
                        </tr>
                        <tbody>
                            @foreach($expedientes as $expediente)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $expediente->numRegistro }}</td>
                                    <td>{{ $expediente->tipoExpediente }}</td>
                                    <td>{{ $expediente->descripcion }}</td>
                                    <td>{{ $expediente->atencion }}</td>
                                    <td>{{ $expediente->recepcion }}</td>
                                    <td>{{ $expediente->observaciones }}</td>
                                    <td>{{ $expediente->tipoDocumento }}</td>
                                    <td>{{ $expediente->fecha }}</td>
                                    <td>
                                        <a class="btn btn-primary btn-block" href="{{ url('/expedientes/'.$expediente->id).'/edit' }}">
                                        Atender
                                        </a>
                                        <form method="post" action="{{ url('/expedientes/'.$expediente->id) }}">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger btn-block mt-1" onclick="return confirm('Borrar');">Cancelar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach    
                            </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>