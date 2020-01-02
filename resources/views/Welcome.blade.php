<!Doctype HTML>
<html lang="en-us">

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.5.0/fullcalendar.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.5.0/fullcalendar.print.css" media="print">


</head>

<body>


<div class="col-lg-12">

        <div class="col-lg-13">
            <div class="card text-center col-lg-12">
                <h1 class="text-center header">Citas agendadas</h1>
    <section class="content">
        <!-- Your Page Content Here -->
        <div class="row">
            <div class="col-md-6">
                <!-- Box -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Listado de citas</h3>
                        <div class="box-tools pull-right">

                        </div>
                    </div>

                    <div class="box-body table-responsive">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                               <!-- <th>Número</th> -->
                                <th>Medico</th>
                                <th>Fecha de cita</th>
                                <th>Info de cita</th>
                                <th>Crear cita</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>

                                <td>

                                    @foreach($dates as $date)
                                    <ul>
                                                {{$date->name}}
                                    </ul>
                                    @endforeach
                                </td>
                               <td>

                                    @foreach($dates as $date)
                                        <ul>
                                            {{$date->lastName}}
                                        </ul>
                                    @endforeach
                                </td>
                               <!-- <td>

                                    @foreach($dates as $date)
                                        <ul>
                                            {{$date->phoneNumber}}
                                        </ul>
                                    @endforeach
                                </td> -->
                                <td>

                                    @foreach($dates as $date)
                                        <ul>
                                            {{$date->user_id}}
                                        </ul>
                                    @endforeach
                                </td>
                                <td>

                                    @foreach($dates as $date)
                                        <ul>
                                            {{$date->reservation_date}}
                                        </ul>
                                    @endforeach
                                </td>

                                <td>

                                    @foreach($dates as $date)
                                        <ul>
                                        <a href="/appointments/{{$date->id}}" class="btn btn-primary" >
                                        ver
                                        </a>
                                        </ul>
                                        @endforeach
                                </td>



                                    <td>
                                        <a href="/appointments/create" class="btn btn-primary">Crear</a>
                                    </td>

                            </tr>
                            </tbody>
                            <tfoot>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer clearfix">
                        <ul class="pagination pagination-sm no-margin pull-right">


                        </ul>
                    </div><!-- /.box-footer-->
                </div><!-- /.box -->
            </div>
            <div class="col-md-6">
                <!-- Box -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Calendario de citas</h3>
                        <div class="box-tools pull-right">
                        </div>
                    </div>

                    <div class="box-body">
                        <a href="/">Ver citas disponibles</a>
                        <div id="calendar" class="fc fc-unthemed fc-ltr">
                           <!-- <div class="fc-toolbar fc-header-toolbar">
                                <div class="fc-left"><div class="fc-button-group">
                                        <button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left">
                                            <span class="fc-icon fc-icon-left-single-arrow">

                                            </span>
                                        </button>
                                        <button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right">
                                            <span class="fc-icon fc-icon-right-single-arrow">

                                            </span>
                                        </button>
                                    </div>
                                    <button type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled" disabled="">Hoy</button>
                                </div>
                                <div class="fc-right">
                                    <div class="fc-button-group">
                                        <button type="button" class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active">Mes</button>
                                        <button type="button" class="fc-agendaWeek-button fc-button fc-state-default">Semana</button>
                                        <button type="button" class="fc-agendaDay-button fc-button fc-state-default fc-corner-right">Día</button>
                                    </div>
                                </div>
                                <div class="fc-center">
                                    <h2>diciembre 2019</h2>
                                </div>
                                <div class="fc-clear">

                                </div>
                            </div> -->

                            <!-- <div class="fc-view-container" style="">
                                <div class="fc-view fc-month-view fc-basic-view" style="">
                                    <table class="">
                                        <thead class="fc-head">
                                        <tr>
                                            <td class="fc-head-container fc-widget-header">
                                                <div class="fc-row fc-widget-header">
                                                    <table class="">
                                                        <thead>
                                                        <tr>
                                                            <th class="fc-day-header fc-widget-header fc-sun">
                                                                <span>dom.</span>
                                                            </th>
                                                            <th class="fc-day-header fc-widget-header fc-mon">
                                                                <span>lun.</span>
                                                            </th>
                                                            <th class="fc-day-header fc-widget-header fc-tue">
                                                                <span>mar.</span>
                                                            </th>
                                                            <th class="fc-day-header fc-widget-header fc-wed">
                                                                <span>mié.</span>
                                                            </th>
                                                            <th class="fc-day-header fc-widget-header fc-thu">
                                                                <span>jue.</span>
                                                            </th>
                                                            <th class="fc-day-header fc-widget-header fc-fri">
                                                                <span>vie.</span>
                                                            </th>
                                                            <th class="fc-day-header fc-widget-header fc-sat">
                                                                <span>sáb.</span>
                                                            </th>
                                                        </tr>
                                                        </thead>
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>
                                        </thead>
                                        <tbody class="fc-body">
                                        <tr>
                                            <td class="fc-widget-content">
                                                <div class="fc-scroller fc-day-grid-container" style="overflow: hidden; height: 441px;">
                                                    <div class="fc-day-grid fc-unselectable">
                                                        <div class="fc-row fc-week fc-widget-content" style="height: 73px;">
                                                            <div class="fc-bg">
                                                                <table class="">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2019-12-01">

                                                                        </td>
                                                                        <td class="fc-day fc-widget-content fc-mon fc-past" data-date="2019-12-02">

                                                                        </td>
                                                                        <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2019-12-03">

                                                                        </td>
                                                                        <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2019-12-04">

                                                                        </td>
                                                                        <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2019-12-05">

                                                                        </td>
                                                                        <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2019-12-06">

                                                                        </td>
                                                                        <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2019-12-07">

                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="fc-content-skeleton">
                                                                <table>
                                                                    <thead>
                                                                    <tr>
                                                                        <td class="fc-day-top fc-sun fc-past" data-date="2019-12-01">
                                                                            <span class="fc-day-number">1</span>
                                                                        </td>
                                                                        <td class="fc-day-top fc-mon fc-past" data-date="2019-12-02">
                                                                            <span class="fc-day-number">2</span>
                                                                        </td>
                                                                        <td class="fc-day-top fc-tue fc-past" data-date="2019-12-03">
                                                                            <span class="fc-day-number">3</span>
                                                                        </td>
                                                                        <td class="fc-day-top fc-wed fc-past" data-date="2019-12-04">
                                                                            <span class="fc-day-number">4</span>
                                                                        </td>
                                                                        <td class="fc-day-top fc-thu fc-past" data-date="2019-12-05">
                                                                            <span class="fc-day-number">5</span>
                                                                        </td>
                                                                        <td class="fc-day-top fc-fri fc-past" data-date="2019-12-06">
                                                                            <span class="fc-day-number">6</span>
                                                                        </td>
                                                                        <td class="fc-day-top fc-sat fc-past" data-date="2019-12-07">
                                                                            <span class="fc-day-number">7</span>
                                                                        </td>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>

                                                                        </td>
                                                                        <td>

                                                                        </td>
                                                                        <td>

                                                                        </td>
                                                                        <td>

                                                                        </td>
                                                                        <td>

                                                                        </td>
                                                                        <td>

                                                                        </td>
                                                                        <td>

                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="fc-row fc-week fc-widget-content" style="height: 73px;">
                                                            <div class="fc-bg">
                                                                <table class="">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2019-12-08">

                                                                        </td>
                                                                        <td class="fc-day fc-widget-content fc-mon fc-past" data-date="2019-12-09">

                                                                        </td>
                                                                        <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2019-12-10">

                                                                        </td>
                                                                        <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2019-12-11">

                                                                        </td>
                                                                        <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2019-12-12">

                                                                        </td>
                                                                        <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2019-12-13">

                                                                        </td>
                                                                        <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2019-12-14">

                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="fc-content-skeleton">
                                                                <table>
                                                                    <thead>
                                                                    <tr>
                                                                        <td class="fc-day-top fc-sun fc-past" data-date="2019-12-08">
                                                                            <span class="fc-day-number">8</span>
                                                                        </td>
                                                                        <td class="fc-day-top fc-mon fc-past" data-date="2019-12-09">
                                                                            <span class="fc-day-number">9</span>
                                                                        </td>
                                                                        <td class="fc-day-top fc-tue fc-past" data-date="2019-12-10">
                                                                            <span class="fc-day-number">10</span>
                                                                        </td>
                                                                        <td class="fc-day-top fc-wed fc-past" data-date="2019-12-11">
                                                                            <span class="fc-day-number">11</span>
                                                                        </td>
                                                                        <td class="fc-day-top fc-thu fc-past" data-date="2019-12-12">
                                                                            <span class="fc-day-number">12</span>
                                                                        </td>
                                                                        <td class="fc-day-top fc-fri fc-past" data-date="2019-12-13">
                                                                            <span class="fc-day-number">13</span>
                                                                        </td>
                                                                        <td class="fc-day-top fc-sat fc-past" data-date="2019-12-14">
                                                                            <span class="fc-day-number">14</span>
                                                                        </td>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>

                                                                        </td>
                                                                        <td>

                                                                        </td>
                                                                        <td>

                                                                        </td>
                                                                        <td>

                                                                        </td>
                                                                        <td>

                                                                        </td>
                                                                        <td>

                                                                        </td>
                                                                        <td>

                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="fc-row fc-week fc-widget-content" style="height: 73px;">
                                                            <div class="fc-bg">
                                                                <table class="">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2019-12-15">

                                                                        </td>
                                                                        <td class="fc-day fc-widget-content fc-mon fc-past" data-date="2019-12-16">

                                                                        </td>
                                                                        <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2019-12-17">

                                                                        </td>
                                                                        <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2019-12-18">

                                                                        </td>
                                                                        <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2019-12-19">

                                                                        </td>
                                                                        <td class="fc-day fc-widget-content fc-fri fc-today " data-date="2019-12-20">

                                                                        </td>
                                                                        <td class="fc-day fc-widget-content fc-sat fc-future" data-date="2019-12-21">

                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="fc-content-skeleton">
                                                                <table>
                                                                    <thead>
                                                                    <tr>
                                                                        <td class="fc-day-top fc-sun fc-past" data-date="2019-12-15">
                                                                            <span class="fc-day-number">15</span>
                                                                        </td>
                                                                        <td class="fc-day-top fc-mon fc-past" data-date="2019-12-16">
                                                                            <span class="fc-day-number">16</span>
                                                                        </td>
                                                                        <td class="fc-day-top fc-tue fc-past" data-date="2019-12-17">
                                                                            <span class="fc-day-number">17</span>
                                                                        </td>
                                                                        <td class="fc-day-top fc-wed fc-past" data-date="2019-12-18">
                                                                            <span class="fc-day-number">18</span>
                                                                        </td>
                                                                        <td class="fc-day-top fc-thu fc-past" data-date="2019-12-19">
                                                                            <span class="fc-day-number">19</span>
                                                                        </td>
                                                                        <td class="fc-day-top fc-fri fc-today " data-date="2019-12-20">
                                                                            <span class="fc-day-number">20</span>
                                                                        </td>
                                                                        <td class="fc-day-top fc-sat fc-future" data-date="2019-12-21">
                                                                            <span class="fc-day-number">21</span>
                                                                        </td>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>

                                                                        </td>
                                                                        <td>

                                                                        </td>
                                                                        <td>

                                                                        </td>
                                                                        <td>

                                                                        </td>
                                                                        <td>

                                                                        </td>
                                                                        <td>

                                                                        </td>
                                                                        <td>

                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="fc-row fc-week fc-widget-content" style="height: 73px;">
                                                            <div class="fc-bg">
                                                                <table class="">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td class="fc-day fc-widget-content fc-sun fc-future" data-date="2019-12-22">

                                                                        </td>
                                                                        <td class="fc-day fc-widget-content fc-mon fc-future" data-date="2019-12-23">

                                                                        </td>
                                                                        <td class="fc-day fc-widget-content fc-tue fc-future" data-date="2019-12-24">

                                                                        </td>
                                                                        <td class="fc-day fc-widget-content fc-wed fc-future" data-date="2019-12-25">

                                                                        </td>
                                                                        <td class="fc-day fc-widget-content fc-thu fc-future" data-date="2019-12-26">

                                                                        </td>
                                                                        <td class="fc-day fc-widget-content fc-fri fc-future" data-date="2019-12-27">

                                                                        </td>
                                                                        <td class="fc-day fc-widget-content fc-sat fc-future" data-date="2019-12-28">

                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="fc-content-skeleton">
                                                                <table>
                                                                    <thead>
                                                                    <tr>
                                                                        <td class="fc-day-top fc-sun fc-future" data-date="2019-12-22">
                                                                            <span class="fc-day-number">22</span>
                                                                        </td>
                                                                        <td class="fc-day-top fc-mon fc-future" data-date="2019-12-23">
                                                                            <span class="fc-day-number">23</span>
                                                                        </td>
                                                                        <td class="fc-day-top fc-tue fc-future" data-date="2019-12-24">
                                                                            <span class="fc-day-number">24</span>
                                                                        </td>
                                                                        <td class="fc-day-top fc-wed fc-future" data-date="2019-12-25">
                                                                            <span class="fc-day-number">25</span>
                                                                        </td>
                                                                        <td class="fc-day-top fc-thu fc-future" data-date="2019-12-26">
                                                                            <span class="fc-day-number">26</span>
                                                                        </td>
                                                                        <td class="fc-day-top fc-fri fc-future" data-date="2019-12-27">
                                                                            <span class="fc-day-number">27</span>
                                                                        </td>
                                                                        <td class="fc-day-top fc-sat fc-future" data-date="2019-12-28">
                                                                            <span class="fc-day-number">28</span>
                                                                        </td>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>

                                                                        </td>
                                                                        <td>

                                                                        </td>
                                                                        <td>

                                                                        </td>
                                                                        <td>

                                                                        </td>
                                                                        <td>

                                                                        </td>
                                                                        <td>

                                                                        </td>
                                                                        <td>

                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="fc-row fc-week fc-widget-content" style="height: 73px;">
                                                            <div class="fc-bg">
                                                                <table class="">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td class="fc-day fc-widget-content fc-sun fc-future" data-date="2019-12-29">

                                                                        </td>
                                                                        <td class="fc-day fc-widget-content fc-mon fc-future" data-date="2019-12-30">

                                                                        </td>
                                                                        <td class="fc-day fc-widget-content fc-tue fc-future" data-date="2019-12-31"></td>
                                                                        <td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2020-01-01"></td>
                                                                        <td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2020-01-02"></td>
                                                                        <td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2020-01-03"></td>
                                                                        <td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2020-01-04"></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="fc-content-skeleton">
                                                                <table>
                                                                    <thead>
                                                                    <tr>
                                                                        <td class="fc-day-top fc-sun fc-future" data-date="2019-12-29">
                                                                            <span class="fc-day-number">29</span>
                                                                        </td>
                                                                        <td class="fc-day-top fc-mon fc-future" data-date="2019-12-30">
                                                                            <span class="fc-day-number">30</span>
                                                                        </td>
                                                                        <td class="fc-day-top fc-tue fc-future" data-date="2019-12-31">
                                                                            <span class="fc-day-number">31</span>
                                                                        </td>
                                                                        <td class="fc-day-top fc-wed fc-other-month fc-future" data-date="2020-01-01">
                                                                            <span class="fc-day-number">1</span>
                                                                        </td>
                                                                        <td class="fc-day-top fc-thu fc-other-month fc-future" data-date="2020-01-02">
                                                                            <span class="fc-day-number">2</span>
                                                                        </td>
                                                                        <td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2020-01-03">
                                                                            <span class="fc-day-number">3</span>
                                                                        </td>
                                                                        <td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2020-01-04">
                                                                            <span class="fc-day-number">4</span>
                                                                        </td>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>

                                                                        </td>
                                                                        <td>

                                                                        </td>
                                                                        <td>

                                                                        </td>
                                                                        <td>

                                                                        </td>
                                                                        <td>

                                                                        </td>
                                                                        <td>

                                                                        </td>
                                                                        <td>

                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="fc-row fc-week fc-widget-content" style="height: 76px;">
                                                            <div class="fc-bg">
                                                                <table class="">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td class="fc-day fc-widget-content fc-sun fc-other-month fc-future" data-date="2020-01-05"></td>
                                                                        <td class="fc-day fc-widget-content fc-mon fc-other-month fc-future" data-date="2020-01-06"></td>
                                                                        <td class="fc-day fc-widget-content fc-tue fc-other-month fc-future" data-date="2020-01-07"></td>
                                                                        <td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2020-01-08"></td>
                                                                        <td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2020-01-09"></td>
                                                                        <td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2020-01-10"></td>
                                                                        <td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2020-01-11"></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="fc-content-skeleton">
                                                                <table>
                                                                    <thead>
                                                                    <tr>
                                                                        <td class="fc-day-top fc-sun fc-other-month fc-future" data-date="2020-01-05">
                                                                            <span class="fc-day-number">5</span>
                                                                        </td>
                                                                        <td class="fc-day-top fc-mon fc-other-month fc-future" data-date="2020-01-06">
                                                                            <span class="fc-day-number">6</span>
                                                                        </td>
                                                                        <td class="fc-day-top fc-tue fc-other-month fc-future" data-date="2020-01-07">
                                                                            <span class="fc-day-number">7</span>
                                                                        </td>
                                                                        <td class="fc-day-top fc-wed fc-other-month fc-future" data-date="2020-01-08">
                                                                            <span class="fc-day-number">8</span>
                                                                        </td>
                                                                        <td class="fc-day-top fc-thu fc-other-month fc-future" data-date="2020-01-09">
                                                                            <span class="fc-day-number">9</span>
                                                                        </td>
                                                                        <td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2020-01-10">
                                                                            <span class="fc-day-number">10</span>
                                                                        </td>
                                                                        <td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2020-01-11">
                                                                            <span class="fc-day-number">11</span>
                                                                        </td>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>

                                                                        </td>
                                                                        <td>

                                                                        </td>
                                                                        <td>

                                                                        </td>
                                                                        <td>

                                                                        </td>
                                                                        <td>

                                                                        </td>
                                                                        <td>

                                                                        </td>
                                                                        <td>

                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> -->
                        </div>
                    </div>

                    <div class="box-footer clearfix">
                        <ul class="pagination pagination-sm no-margin pull-right">
                        </ul>

                    </div>
                </div><!-- /.box -->


            </div><!-- /.col -->
        </div><!-- /.row -->


    </section>
            </div>
        </div>

</div>








<script>
    //inicializamos el calendario al cargar la pagina
    $(document).ready(function () {

        $('#calendar').fullCalendar({

            locale: 'es-us',
            header: {
                left: 'prev,next today myCustomButton',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            //editable: true,
            events: {
                url: '/muestra_eventos'
            }
        });

    });
</script>


<script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js" type="text/javascript"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.5.0/fullcalendar.js" type="text/javascript"></script>



<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

@if (session('message'))

    <script>

        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Su cita ha sido guardada',
            showConfirmButton: false,
            timer: 1500
        })

    </script>

@endif


@if (session('delete'))

    <script>

        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Su cita se ha borrado',
            showConfirmButton: false,
            timer: 1500
        })

    </script>

@endif

@if (session('update'))

    <script>

        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Su cita se ha actualizado',
            showConfirmButton: false,
            timer: 1500
        })

    </script>

@endif
</body>
</html>
