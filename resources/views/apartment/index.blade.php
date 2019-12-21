@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="wel-grids">
            @foreach($rooms as $room)
                <div class="col-md-3 wel-grid">
                    <a href="/apartment/{{$room->id}}"><img src="images/f1.jpg" class="img-responsive gray" alt=""/></a>
                    <h4>{{$room->name}}</h4>
                    <p>Decription: {{$room->description}}
                    </p>
                    <strong>Price: {{$room->price}}$</strong>
                </div>
            @endforeach
            <div class="clearfix"></div>
        </div>
    </div>
@endsection