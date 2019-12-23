@extends('layouts.app')
@section('navbar')
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-3 img-container">
                @foreach($photos as $photo)
                    <img src={{$photo->address}} class="img-responsive" alt=""/>
                @endforeach
            </div>

            <div class="col-sm-9">
                <h4><small>RECENT POSTS</small></h4>
                <hr>
                <h2>{{$room->name}}</h2>
                <h5><span class="glyphicon glyphicon-time"></span> Post at {{$room->created_at}}</h5>
                <h5><span class="label label-danger">{{$room->name}}</span> <span
                            class="label label-primary">Ipsum</span></h5><br>
                <p><strong>Price: {{$room->price}}$</strong></p>
                @if($room->available == true)
                    <strong>Status: Còn phòng</strong>
                @else
                    <strong>Status: Đã hết phòng</strong>
                @endif
                <p>Description: {{$room->description}}</p>
                <br><br>
                <div>
                    <a href="/order/{{$room->id}}">
                        <button type="button" class="btn btn-primary">Đặt phòng</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection