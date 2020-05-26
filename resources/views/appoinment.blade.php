<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Auto alerts</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body class="bg-dark">
        <div class="container text-white">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <h1> Crear una cita</h1>
            </nav>
            <div class="row">
              <div class="col">
                <button type="button" class="btn btn-success btn-block"
                  name="serch">
                  Buscar coche
                </button>
              </div>
            </div>
            <div class="row card shadow" style="height: 100%">
                <form action="index.html" method="post"
                encrypte="multipart/form-data">
                    <div class="form-group">
                        <label for="owner"> Nombre completo</label>
                        <input type="text" class="form-control bg-dark text-white"
                          id="name" placeholder="Nombre"
                          name="owner">
                    </div>
                    <div class="form-group">
                        <label for="model_name"> modelo</label>
                        <input type="text" class="form-control bg-dark text-white"
                          id="name" placeholder="Nombre"
                          name="name">
                    </div>
                    <div class="form-group">
                        <label for="vin_number"> Numero vin </label>
                        <input type="text" class="form-control bg-dark text-white"
                          id="name" placeholder="Nombre"
                          name="vin_number">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
