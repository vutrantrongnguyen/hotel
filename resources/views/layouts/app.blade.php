@extends('layouts.frame')
@section('insidesection')
    <div class="banner">

    </div>
    <div class="header">
        <div class="container">
            <div class="header-menu">

               @include('partials.navbar')
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="content" style="padding: 50px">
        @yield('content')
    </div>
@endsection