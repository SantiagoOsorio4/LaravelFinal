<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Nuevo Registro</title>
  </head>
  <body>
    <div class="container"></div>
    <h1>Nuevo Registro</h1>
    <form action="{{ route('estudiante.store') }}" method="POST">
        @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="name" ria-describedby="name" name="name" placeholder="Ingrese Nombre">
  </div>
  <div class="mb-3">
    <label for="last_name" class="form-label">Apellidos</label>
    <input type="text" class="form-control" id="last_name" ria-describedby="last_name" name="last_name" placeholder="Ingrese Apellidos">
  </div>
  <div class="mb-3">
    <label for="carrera_id" class="form-label">carrera_id</label>
    <select class="form-select" id=""></select>
  </div>
  
  <div class="mb-3">
    <label for="Num" class="form-label">Numero</label>
    <input type="text" class="form-control" id="Num" ria-describedby="fehcaHelp" name="Num" placeholder="Ingrese Numero">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">email</label>
    <input type="text" class="form-control" id="email" ria-describedby="email" name="email" placeholder="Ingrese email">
  </div>
  <br>
  <button class="btn btn-primary">Agregar</button>
  <a href="{{ route('estudiante.index') }}">Regresar</a>
   </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
  </body>
</html>