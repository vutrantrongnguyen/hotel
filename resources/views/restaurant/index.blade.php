@extends('layouts.app')

@section('navbar')
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li ><a href="/" data-hover="Home">Trang chủ </a></li>
            <li><a data-hover="Phòng ở" href="/accommodation">Phòng ở</a></li>
            <li><a data-hover="Căn hộ" href="/apartment">Căn hộ</a></li>
            <li><a data-hover="Tổ chức sự kiện" href="/event">Tổ chức sự kiện</a></li>
            <li class="active"><a data-hover="Nhà hàng" href="/restaurant">Nhà hàng</a></li>


        </ul>
    </div><!-- /.navbar-collapse -->
@endsection

@section('content')
Nhà hàng

@endsection