<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        

<form action="{{ url('/expedientes/'.$expediente->id) }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <label for="recepcion"> Recepcionista
    </label>
    <div class="mb-3">
        <label for="recepcion" class="form-label">Nombre del Recepcionista</label>
        <input type="text" class="form-control" placeholder="Nombre del recepcionista">
    </div>
    <input type="text" name="recepcion">
    <input type="submit" class="btn btn-primary" value="Atender" onclick="">
    <a href="{{ url('expedientes') }}">Regresar</a>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>