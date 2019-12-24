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
                <form action="/order/room" method="POST">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
                    <input type="hidden" name="room_id" value={{$room->id}}/>
                    <div>
                        <h2>{{$room->name}}</h2>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" disabled="true" id="email" value="{{Auth::user()->email}}">
                    </div>
                    <div class="form-group">
                        <label for="check-in">Check-in Date:</label>
                        <input type="date" class="form-control" id="check-in" name="txtDateIn">
                    </div>
                    <div class="form-group">
                        <label for="check-out">Check-in Date:</label>
                        <input type="date" class="form-control" id="check-out" name="txtDateOut">
                    </div>
                    <div>
                        <h3 style="color: red">Price: {{$room->price}}$</h3>
                    </div>
                    <br>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>
    </div>

@endsection