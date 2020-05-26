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
            <div class="row">
                <div class="col text-center">
                    <h1> Crear una cita</h1>
                </div>
            </div>
            <div class="row card shadow p-3 bg-dark" style="height: 100%">
                <form action="/appointment" method="post"
                  encrypte="multipart/form-data">
                    @csrf
                    <input type="hidden" name="service_id" value="{{$id}}">
                    <div class="form-group">
                        <label for="owner"> Nombre completo</label>
                        <input type="text" class="form-control bg-dark text-white"
                          id="name" placeholder="Nombre"
                          name="owner">
                    </div>
                    <div class="form-group">
                        <label for="model_name"> modelo</label>
                        <input type="text" class="form-control bg-dark text-white"
                          id="name" placeholder="Modelo coche"
                          name="name">
                    </div>
                    <div class="form-group">
                        <label for="vin_number"> Numero vin </label>
                        <input type="text" class="form-control bg-dark text-white"
                          id="name" placeholder="Nombre"
                          name="vin_number">
                    </div>
                    <div class="form-group">
                        <div class="col text-center">
                            <button class="col-6 btn btn-primary"type="submit">
                              Crear cita
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
