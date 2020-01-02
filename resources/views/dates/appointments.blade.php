@extends('styles.styles')

@section('content')

    <h1 class="text-center header">Citas agendadas</h1>

<ul>
@foreach($dates as $date)

    <li>
    <a href="/appointments/{{$date->id}}">
        {{$date->name}}
    </a>
    </li>

    @endforeach
</ul>

    @endsection

