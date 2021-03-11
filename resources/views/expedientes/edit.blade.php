<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"><!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        
<form action="{{ url('/expedientes/'.$expediente->id) }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class="container " >
        <div class="row mt-3">
            <div class="col-md-6 offset-3 ">
                <div class="pb-2">
                    <span class="h2">Recepción del expediente</span>
                </div>
                <div class="mb-3 mt-3">
                    <label for="recepcion" class="form-label">Nombre del Recepcionista</label>
                    <input type="text" name="recepcion" class="form-control" placeholder="Nombre del recepcionista">
                    <br>
                </div>
                <div class="mb-3 row">
                    <input type="submit" class="btn btn-block btn-primary" value="Atender">
                    <a class="btn btn-block btn-success" href="{{ url('expedientes') }}">Regresar</a> 
                </div>
                       
            </div>
        </div>
        
    </div>

    
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>