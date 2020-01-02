<!Doctype HTML>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>



<body>
    <div class="d-flex flex-column justify-content-around p-0 mx-2 mb-0">


        <div class="d-flex flex-column justify-content-around p-0 mx-2 mb-0">



            <div class="row p-0 m-0 bg-light">
                <div class="col-md-6 p-5 embed-responsive">
                    <div class="card d-flex flex-row">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Nombre</strong></h5>
                            <p class="card-text">
                                {{$dates->name}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-5 embed-responsive">
                    <div class="card d-flex flex-row">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Apellido</strong></h5>
                            <p class="card-text">
                                {{$dates->lastName}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-5 embed-responsive">
                    <div class="card d-flex flex-row">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Número de Telefóno</strong></h5>
                            <p class="card-text">
                            {{$dates->phoneNumber}}
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 p-5 embed-responsive">
                    <div class="card d-flex flex-row">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Email</strong></h5>
                            <p class="card-text">
                                {{$dates->email}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-5 embed-responsive">
                    <div class="card d-flex flex-row">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Horario de cita</strong></h5>
                            <p class="card-text">
                                {{$dates->reservation_date}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-5 embed-responsive">
                    <div class="card d-flex flex-row">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Hora de terminación de cita</strong></h5>
                            <p class="card-text">
                                {{$dates->reservation_end_date}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-5 embed-responsive">
                    <div class="card d-flex flex-row">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Datos del Medico</strong></h5>
                            <p class="card-text">
                                {{$dates->user_id}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-5 embed-responsive">
                    <div class="card d-flex flex-row">
                        <div class="card-body">
                            <h5 class="card-title"><strong>Comentarios</strong></h5>
                            <p class="card-text">
                                {{$dates->comment}}
                            </p>
                        </div>
                    </div>
                </div>

            <div class="container col-sm text-center">
                  <a href="/appointments/{{$dates->id}}/edit">
                <button class="btn btn-success" style="margin-bottom:20px">Editar</button>
            </a>
        </div>
    </div>
    </div>
    </div>

</body>

</html>