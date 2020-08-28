<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Disi new</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
        <div class="container">
                    <div class="card w-25 m-auto ">
                        <div class="card-header">
                            <h5 class="text-center">Iniciar sesión</h5> 
                        </div>
                        <div class="card-body">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <button class="btn btn-outline-secondary" type="button" id="button-addon1"><i class="fas fa-user"></i></button>
                                </div>
                                <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                              </div>
                              <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <button class="btn btn-outline-secondary" type="button" id="button-addon1"><i class="fas fa-key"></i></button>
                                </div>
                                <input type="password" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                              </div>
                              <div class="col text-center">
                                <a href="{{route('inicio')}}"><button type="button" class="btn btn-success text-center">Entrar</button></a>
                              </div>
                            <div>
                                <button type="button" class="btn btn-link">¿Has olvidado tus datos de acceso?</button>
                            </div>
                        </div>
                    </div>
        </div>
    <!-- jQuery -->
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script> 
</body>
</html>