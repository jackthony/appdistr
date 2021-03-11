<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"><!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        

<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
            <h1>Agregar Expediente</h1>
            <form action="{{ url('/expedientes') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="mb-3 row">
                    <label for="tipoExpediente">{{ 'Tipo de Expediente' }}</label>
                    <select name="tipoExpediente" id="tipoExpediente">
                        <option value="emitido">Emitido</option>
                        <option value="recibido">Recibido</option>
                    </select>
                </div>
                <div class="mb-3 row">
                    <label for="descripcion">{{ 'Descripcion' }}</label>
                <br>
                <textarea name="descripcion" id="descripcion" cols="50" rows="4"></textarea>
                </div>
                <br>
                <div class="mb-3 row">
                    <label for="observaciones">{{ 'Observaciones' }}</label>
                <input type="text" name="observaciones" id="observaciones" value="">
                <br>
                </div>
                <div class="mb-3 row">
                    <label for="tipoDocumento">{{ 'Tipo de Documento' }}</label>
                    <select class="form-select" aria-label="Selección de ejemplo" name="tipoDocumento" id="tipoDocumento">
                        <option value="Oficio">Oficio</option>
                        <option value="Carta">Carta</option>
                    </select>
                
                </div>
                
                <div class="mb-3 row">
                    <input type="submit" class="btn btn-primary" value="Agregar" onclick="sub()">
            
                    <a href="{{ url('expedientes') }}" class="btn btn-success">Regresar</a>
                </div>
                
            </form>
        </div>
    </div>
</div>

<script>
    function sub(){
        alert('Estas pasando informacion')
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>