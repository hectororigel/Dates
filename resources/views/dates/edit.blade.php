@extends('styles.styles')

@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card text-center col-lg-12">
    <h1 class="text-center header">Modificar registro</h1>
    <form  method="POST" action="/appointments/{{$dates->id }}" style="margin-bottom: 1em;">
        @csrf
        {{method_field('PATCH')}}
        <div class="form-group">
            <i class="fa fa-user prefix grey-text"></i>
            <label for="name" class="col-sm col-form-label text-sm-left">Nombre</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Nombres" value="{{$dates->name}}" required>
        </div>
        <div class="form-group">
            <i class="fa fa-user prefix grey-text"></i>
            <label for="lastName">Apellidos</label>
            <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Apellidos" value="{{$dates->lastName}}" required>
        </div>
        <div class="form-group">
            <i class="fa fa-phone" aria-hidden="true"></i>
            <label for="phoneNumber" class="col-sm col-form-label text-sm-left">Número de telefono</label>
            <input type="text" name="phoneNumber" class="form-control" id="exampleFormControlInput1" placeholder="Tu número de telefono" value="{{$dates->phoneNumber}}" required>
        </div>
        <div class="form-group">
            <i class="fa fa-envelope prefix grey-text"></i>
            <label for="email" class="col-sm col-form-label text-sm-left">E-mail</label>
            <input type="text" name="email" class="form-control" id="email" placeholder="nombre@ejemplo.com" value="{{$dates->email}}" required>
        </div>

        <!-- Main content -->
        <div class="form-group">
            <div class="row">
                <div class="form-group col-md-6">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    <label for="reservation_date">Fecha y hora de inicio de reservación (aaaa-mm-dd hh:mm)</label>
                    <div class="input-group date" id="datetimepicker1"  value="{{$dates->datetimepicker1}}">
                        <input class="form-control" required="" name="reservation_date" value="{{$dates->reservation_date}}" type="text" id="reservation_date">
                        <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    <label for="reservation_end_date">Fecha y hora de fin de reservación (aaaa-mm-dd hh:mm)</label>
                    <div class="input-group date" id="datetimepicker2"  value="{{$dates->datetimepicker2}}">
                        <input class="form-control" required="" name="reservation_end_date" type="text" id="reservation_end_date"  value="{{$dates->reservation_end_date}}">
                        <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <i class="fa fa-male" aria-hidden="true"></i>
                    <label for="user_id" class="col-sm col-form-label text-sm-left">Selecciona al Medico</label>
                    <select required=""  class="form-control" id="user_id" name="user_id"><option selected="selected" value="">{{$dates->user_id}}</option><option value="2">Admin Fasctode</option><option value="3">Owner Fasctode</option><option value="4">Owner 2 Fasctode</option><option value="5">Owner 3 Fasctode</option><option value="6">Owner 4 Fasctode</option><option value="7">Owner 5 Fasctode</option></select>

                </div>
                <div class="form-group">
                    <input name="recreative_id" type="hidden" value="2">
                </div>
                <div class="form-group">
                    <input name="property_id" type="hidden" value="1">
                </div>
                <div class="form-group">
                    <input name="user_id_reservation" type="hidden" value="2">
                </div>
                <div class="form-group">
                    <input name="propietario" type="hidden" value="admin@demo.co">
                </div>
                <div class="form-group">
                    <input name="role_user" type="hidden" value="2">
                </div>
            </div>
        </div>







<!--*****************************************Section********************************************************-->
        <div class="form-group">
            <i class="fa fa-commenting" aria-hidden="true"></i>
            <label for="Comment" class="col-sm col-form-label text-sm-left">Comentario</label>
            <textarea class="form-control" type="text" name="comment" id="comment" rows="3" placeholder="Comentarios">{{$dates->comment}}</textarea>
        </div>
        <div class="text-center">
        <button type="submit" class="btn btn-primary">Modificar información</button>
            </div>



    </form>

                    <form method="POST" action="/appointments/{{$dates->id }}">
                        @method('DELETE')
                        @csrf


                        <div class="text-center" style="padding-bottom:20px">
                            <button type="submit" class="btn btn-danger">Eliminar registro</button>
                        </div>
                        @include('errors.errors')

                    </form>

                </div>
            </div>
        </div>
    </div>


   <!-- <div class="col-md-6">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Calendario reservaciones</h3>
                <div class="box-tools pull-right">
                </div>
            </div>

            <div class="box-body">
                <a href="https://demo.mayordomus.net/reservations/show_reservations">Ver todas las reservaciones</a>
                <div id="calendar" class="fc fc-unthemed fc-ltr"><div class="fc-toolbar fc-header-toolbar"><div class="fc-left"><div class="fc-button-group"><button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left"><span class="fc-icon fc-icon-left-single-arrow"></span></button><button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right"><span class="fc-icon fc-icon-right-single-arrow"></span></button></div><button type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled" disabled="">Hoy</button></div><div class="fc-right"><div class="fc-button-group"><button type="button" class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active">Mes</button><button type="button" class="fc-agendaWeek-button fc-button fc-state-default">Semana</button><button type="button" class="fc-agendaDay-button fc-button fc-state-default fc-corner-right">Día</button></div></div><div class="fc-center"><h2>diciembre 2019</h2></div><div class="fc-clear"></div></div><div class="fc-view-container" style=""><div class="fc-view fc-month-view fc-basic-view" style=""><table class=""><thead class="fc-head"><tr><td class="fc-head-container fc-widget-header"><div class="fc-row fc-widget-header"><table class=""><thead><tr><th class="fc-day-header fc-widget-header fc-sun"><span>dom.</span></th><th class="fc-day-header fc-widget-header fc-mon"><span>lun.</span></th><th class="fc-day-header fc-widget-header fc-tue"><span>mar.</span></th><th class="fc-day-header fc-widget-header fc-wed"><span>mié.</span></th><th class="fc-day-header fc-widget-header fc-thu"><span>jue.</span></th><th class="fc-day-header fc-widget-header fc-fri"><span>vie.</span></th><th class="fc-day-header fc-widget-header fc-sat"><span>sáb.</span></th></tr></thead></table></div></td></tr></thead><tbody class="fc-body"><tr><td class="fc-widget-content"><div class="fc-scroller fc-day-grid-container" style="overflow: hidden; height: 423px;"><div class="fc-day-grid fc-unselectable"><div class="fc-row fc-week fc-widget-content" style="height: 70px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2019-12-01"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2019-12-02"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2019-12-03"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2019-12-04"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2019-12-05"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2019-12-06"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2019-12-07"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2019-12-01"><span class="fc-day-number">1</span></td><td class="fc-day-top fc-mon fc-past" data-date="2019-12-02"><span class="fc-day-number">2</span></td><td class="fc-day-top fc-tue fc-past" data-date="2019-12-03"><span class="fc-day-number">3</span></td><td class="fc-day-top fc-wed fc-past" data-date="2019-12-04"><span class="fc-day-number">4</span></td><td class="fc-day-top fc-thu fc-past" data-date="2019-12-05"><span class="fc-day-number">5</span></td><td class="fc-day-top fc-fri fc-past" data-date="2019-12-06"><span class="fc-day-number">6</span></td><td class="fc-day-top fc-sat fc-past" data-date="2019-12-07"><span class="fc-day-number">7</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td class="fc-event-container" colspan="3"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-not-end" href="reservations/2"><div class="fc-content"><span class="fc-time">13:43</span> <span class="fc-title">Palapa</span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 70px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2019-12-08"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2019-12-09"></td><td class="fc-day fc-widget-content fc-tue fc-today " data-date="2019-12-10"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2019-12-11"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2019-12-12"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2019-12-13"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2019-12-14"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2019-12-08"><span class="fc-day-number">8</span></td><td class="fc-day-top fc-mon fc-past" data-date="2019-12-09"><span class="fc-day-number">9</span></td><td class="fc-day-top fc-tue fc-today " data-date="2019-12-10"><span class="fc-day-number">10</span></td><td class="fc-day-top fc-wed fc-future" data-date="2019-12-11"><span class="fc-day-number">11</span></td><td class="fc-day-top fc-thu fc-future" data-date="2019-12-12"><span class="fc-day-number">12</span></td><td class="fc-day-top fc-fri fc-future" data-date="2019-12-13"><span class="fc-day-number">13</span></td><td class="fc-day-top fc-sat fc-future" data-date="2019-12-14"><span class="fc-day-number">14</span></td></tr></thead><tbody><tr><td class="fc-event-container" colspan="7"><a class="fc-day-grid-event fc-h-event fc-event fc-not-start fc-not-end" href="reservations/2"><div class="fc-content"> <span class="fc-title">Palapa</span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 70px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2019-12-15"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2019-12-16"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2019-12-17"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2019-12-18"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2019-12-19"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2019-12-20"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2019-12-21"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2019-12-15"><span class="fc-day-number">15</span></td><td class="fc-day-top fc-mon fc-future" data-date="2019-12-16"><span class="fc-day-number">16</span></td><td class="fc-day-top fc-tue fc-future" data-date="2019-12-17"><span class="fc-day-number">17</span></td><td class="fc-day-top fc-wed fc-future" data-date="2019-12-18"><span class="fc-day-number">18</span></td><td class="fc-day-top fc-thu fc-future" data-date="2019-12-19"><span class="fc-day-number">19</span></td><td class="fc-day-top fc-fri fc-future" data-date="2019-12-20"><span class="fc-day-number">20</span></td><td class="fc-day-top fc-sat fc-future" data-date="2019-12-21"><span class="fc-day-number">21</span></td></tr></thead><tbody><tr><td class="fc-event-container" colspan="2"><a class="fc-day-grid-event fc-h-event fc-event fc-not-start fc-end" href="reservations/2"><div class="fc-content"> <span class="fc-title">Palapa</span></div></a></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 70px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2019-12-22"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2019-12-23"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2019-12-24"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2019-12-25"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2019-12-26"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2019-12-27"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2019-12-28"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2019-12-22"><span class="fc-day-number">22</span></td><td class="fc-day-top fc-mon fc-future" data-date="2019-12-23"><span class="fc-day-number">23</span></td><td class="fc-day-top fc-tue fc-future" data-date="2019-12-24"><span class="fc-day-number">24</span></td><td class="fc-day-top fc-wed fc-future" data-date="2019-12-25"><span class="fc-day-number">25</span></td><td class="fc-day-top fc-thu fc-future" data-date="2019-12-26"><span class="fc-day-number">26</span></td><td class="fc-day-top fc-fri fc-future" data-date="2019-12-27"><span class="fc-day-number">27</span></td><td class="fc-day-top fc-sat fc-future" data-date="2019-12-28"><span class="fc-day-number">28</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 70px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2019-12-29"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2019-12-30"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2019-12-31"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2020-01-01"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2020-01-02"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2020-01-03"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2020-01-04"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2019-12-29"><span class="fc-day-number">29</span></td><td class="fc-day-top fc-mon fc-future" data-date="2019-12-30"><span class="fc-day-number">30</span></td><td class="fc-day-top fc-tue fc-future" data-date="2019-12-31"><span class="fc-day-number">31</span></td><td class="fc-day-top fc-wed fc-other-month fc-future" data-date="2020-01-01"><span class="fc-day-number">1</span></td><td class="fc-day-top fc-thu fc-other-month fc-future" data-date="2020-01-02"><span class="fc-day-number">2</span></td><td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2020-01-03"><span class="fc-day-number">3</span></td><td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2020-01-04"><span class="fc-day-number">4</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 73px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-future" data-date="2020-01-05"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-future" data-date="2020-01-06"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-future" data-date="2020-01-07"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2020-01-08"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2020-01-09"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2020-01-10"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2020-01-11"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-other-month fc-future" data-date="2020-01-05"><span class="fc-day-number">5</span></td><td class="fc-day-top fc-mon fc-other-month fc-future" data-date="2020-01-06"><span class="fc-day-number">6</span></td><td class="fc-day-top fc-tue fc-other-month fc-future" data-date="2020-01-07"><span class="fc-day-number">7</span></td><td class="fc-day-top fc-wed fc-other-month fc-future" data-date="2020-01-08"><span class="fc-day-number">8</span></td><td class="fc-day-top fc-thu fc-other-month fc-future" data-date="2020-01-09"><span class="fc-day-number">9</span></td><td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2020-01-10"><span class="fc-day-number">10</span></td><td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2020-01-11"><span class="fc-day-number">11</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div></div>
            </div>
            <div class="box-footer clearfix">
                <ul class="pagination pagination-sm no-margin pull-right">
                </ul>
            </div>
        </div>
    </div>
</div>
-->

<!--**********************************************End section******************************************************-->
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
