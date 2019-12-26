@extends('styles.styles')


@section('bootrsap')

    @endsection

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card text-center col-lg-12">
        <h1 class="text-center header">Citas</h1>
    <form  method="POST" action="/appointments">
        @csrf


        <div class="form-group">
            <i class="fa fa-user prefix grey-text"></i>
            <label for="name" class="col-sm col-form-label text-sm-left">Nombre</label>
            <input type="text" name="name" class="form-control {{$errors->has('name') ? 'alert-warning' : ''}}" id="name" placeholder="Nombres" value="{{old('name')}}">
            </div>

        <div class="form-group">
            <i class="fa fa-user prefix grey-text"></i>
            <label for="lastName" class="col-sm col-form-label text-sm-left">Apellidos</label>
            <input type="text" name="lastName" class="form-control {{$errors->has('name') ? 'alert-warning' : ''}}" id="lastName" placeholder="Apellidos" value="{{old('lastName')}}">
            </div>

        <div class="form-group">
            <i class="fa fa-user prefix grey-text"></i>
            <label for="lastName" class="col-sm col-form-label text-sm-left">Telefono</label>
            <input type="text" name="phoneNumber" class="form-control {{$errors->has('name') ? 'alert-warning' : ''}}" id="exampleFormControlInput1" placeholder="Tu número de telefono" value="{{old('phoneNumber')}}">
            </div>
        <div class="form-group">
            <i class="fa fa-user prefix grey-text"></i>
            <label for="lastName" class="col-sm col-form-label text-sm-left">Email</label>
            <input type="text" name="email" class="form-control {{$errors->has('name') ? 'alert-warning' : ''}}" id="email" placeholder="name@example.com" value="{{old('email')}}">
            </div>
        <div class="box-body">

            <!-- Main content -->
            <div class="form-group">
                <div class="row">
                    <div class="form-group col-md-6">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <label for="reservation_date">Fecha y hora de inicio de reservación (aaaa-mm-dd hh:mm)</label>
                        <div class="input-group date" id="datetimepicker1">
                            <input class="form-control" required="" name="reservation_date" type="text" id="reservation_date">
                            <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <label for="reservation_end_date">Fecha y hora de fin de reservación (aaaa-mm-dd hh:mm)</label>
                        <div class="input-group date" id="datetimepicker2">
                            <input class="form-control" required="" name="reservation_end_date" type="text" id="reservation_end_date">
                            <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <i class="fa fa-male" aria-hidden="true"></i>
                        <label for="user_id" class="col-sm col-form-label text-sm-left">Selecciona al Medico</label>
                        <select required="" class="form-control" id="user_id" name="user_id"><option selected="selected" value="">Seleccione propietario</option><option value="2">Admin Fasctode</option><option value="3">Owner Fasctode</option><option value="4">Owner 2 Fasctode</option><option value="5">Owner 3 Fasctode</option><option value="6">Owner 4 Fasctode</option><option value="7">Owner 5 Fasctode</option></select>
                        </div>
                    <div class="form-group row">
                        <input name="recreative_id" type="hidden" value="2">
                    </div>
                    <div class="form-group row">
                        <input name="property_id" type="hidden" value="1">
                    </div>
                    <div class="form-group row">
                        <input name="user_id_reservation" type="hidden" value="2">
                    </div>
                    <div class="form-group row">
                        <input name="propietario" type="hidden" value="admin@demo.co">
                    </div>
                    <div class="form-group row">
                        <input name="role_user" type="hidden" value="2">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <i class="fa fa-commenting" aria-hidden="true"></i>
            <label for="Comment" class="col-sm col-form-label text-sm-left">Comentario</label>
            <textarea class="form-control" type="text" name="comment" id="comment" rows="3" placeholder="Comentarios"></textarea>
            </div>
        <div class="container text-center">
        <button type="submit" class="btn btn-primary" style="margin-bottom:20px">Agendar cita</button>
        </div>
@include('errors.errors')
    </form>
    </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker1').datetimepicker(
                {
                    locale: 'es-us',
                    format: 'YYYY-MM-DD HH:mm',
                    daysOfWeekDisabled: [0,6],
                    disabledTimeIntervals: [[moment({ h: 0 }), moment({ h: 8 })], [moment({ h: 18 }), moment({ h: 24 })]]
                }
            );
            $('#datetimepicker2').datetimepicker(
                {
                    locale: 'es-us',
                    format: 'YYYY-MM-DD HH:mm',
                    useCurrent: false
                }
            );
            $("#datetimepicker1").on("dp.change", function (e) {
                $('#datetimepicker2').data("DateTimePicker").minDate(e.date);
            });
            $("#datetimepicker2").on("dp.change", function (e) {
                $('#datetimepicker1').data("DateTimePicker").maxDate(e.date);
            });
        });
    </script>
    @endsection