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
                <h1> Auto alerts 2</h1>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="/car_search">Estado</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="row">
              <div class="col card shadow bg-dark">
                <form action="/car_search" method="post">
                  @csrf
                  <div class="form-group">
                      <label for="vin_number"> Numero vin </label>
                      <input type="text" class="form-control bg-dark text-white"
                        id="name" placeholder="Nombre"
                        name="vin_number">
                  </div>
                  <div class="form-group">
                      <div class="col text-center">
                          <button class="col-6 btn btn-primary"type="submit">
                            buscar
                          </button>
                      </div>
                  </div>
                </form>
              </div>
            </div>
        </div>
    </body>
</html>
