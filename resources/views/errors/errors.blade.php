@if($errors->any())

    <div class="alert alert-danger" role="alert" style="margin-bottom:10px">
        <ul>
            @foreach($errors->all() as $error)

                <li>{{$error}}</li>

            @endforeach

        </ul>
    </div>

@endif