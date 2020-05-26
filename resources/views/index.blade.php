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
                        <li class="nav-item active">
                            <a class="nav-link" href="#">inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Estado</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="row card shadow" style="height: 100%">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Servicios</th>
                            <th scope="col">Local</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">costo</th>
                            <th scope="col">tiempo estimado</th>
                            <th scope="col">crear cita</th>
                        </tr>
                    </thead>
                    <tbod>
                    @foreach ($shop_services as $shop_service)
                      <tr>
                        <td>{{$shop_service->id}}</td>
                        <td>{{$shop_service->service}}</td>
                        <td>{{$shop_service->shop}}</td>
                        <td>{{$shop_service->description}}</td>
                        <td>{{$shop_service->price}}</td>
                        <td>{{$shop_service->hours}} horas {{$shop_service->minutes}} minutos</td>
                        <td>
                          <form class="" action="/appointment/{{$shop_service->id}}" method="GET">
                            @csrf
                            <button type="submit" class="btn btn-success">cita</button>
                          </form>
                        </td>
                      </tr>
                    @endforeach
                    </tbod>
                </table>
            </div>
        </div>
    </body>
</html>
