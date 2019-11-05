@extends('layouts.app')

@section('content')
    @foreach($services->chunk(3) as $serviceChunk)
        <div class="row">
            @foreach($serviceChunk as $service)
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="{{ $service->imagePath }}" alt="..." class="img-responsive">
                        <div class="caption">
                            <h3>{{ $service->name }}</h3>
                            <p class="description">Mo ta</p>
                            <p class="price">{{ $service->price}} $</p>

                            <div class="clearfix">
                                <div class="pull-left number">
                                	<form action="demo_form.asp">
  							Số lương: <input type="text" name="fname"><br>
							</form>
                                </div>
                                <a href="{{ route('service.addToCart', ['id' => $service->id]) }}" class="btn btn-success pull-right" role="button">Add to Cart</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach

@endsection