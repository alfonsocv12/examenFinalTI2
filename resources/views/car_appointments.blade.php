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
              <div class="col-6">
                <h2> Auto alerts 2</h2>
              </div>
              <div class="col-6 text-right">
                <h2> {{$car['name']}} de {{$car['owner']}}</h2>
              </div>
            </div>
            <div class="row card shadow bg-dark mb-3" style="height: 100%">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Servicios</th>
                            <th scope="col">Local</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">costo</th>
                            <th scope="col">tiempo estimado</th>
                            <th scope="col">estatus</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbod>
                    @foreach ($services as $service)
                      <tr>
                        <td>{{$service->id}}</td>
                        <td>{{$service->service}}</td>
                        <td>{{$service->shop}}</td>
                        <td>{{$service->description}}</td>
                        <td>{{$service->price}}</td>
                        <td>{{$service->hours}} horas {{$service->minutes}} minutos</td>
                        <td>{{$service->status}}</td>
                        @if ($service->status == 'pending')
                          <td>
                            <form class="" action="/appointment/{{$service->id}}" method="GET">
                              @csrf
                              <button type="submit" class="btn btn-danger">borrar</button>
                            </form>
                          </td>
                        @else
                          <td>
                            <button class="btn btn-danger" disabled> borrar</button>
                          </td>
                        @endif
                      </tr>
                    @endforeach
                    </tbod>
                </table>
          </div>
          <div class="row">
            <div class="col">
              <form action="/appointment/car/{{$car['id']}}" method="get"
                encrypte="multipart/form-data">
                <button class="col-6 btn btn-primary btn-block" type="submit">
                  Agregar
                </button>
              </form>
            </div>
          </div>
        </div>
    </body>
</html>
