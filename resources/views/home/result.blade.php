@extends('layouts.frame')

@section('insidesection')

    <div class="banner-section">
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">

                    <li>
                        <div class="slider-info">
                            <img src="images/slider-3.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="container">
                            <div class="banner-text">
                                <h3>Luxury</h3>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="slider-info">
                            <img src="images/slider-2.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="container">
                            <div class="banner-text">
                                <h3>Professional</h3>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="slider-info">
                            <img src="images/slider-1.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="container">
                            <div class="banner-text">
                                <h3>Welcome to Valkyria</h3>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- FlexSlider -->
        <script defer src="js/jquery.flexslider.js"></script>
        <script type="text/javascript">
            $(function () {
                SyntaxHighlighter.all();
            });
            $(window).load(function () {
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function (slider) {
                        $('body').removeClass('loading');
                    }
                });
            });
        </script>
        <!-- FlexSlider -->
        <!-- slider -->
    </div>
    <div class="header " >
        <div class="container">
            <div class="header-menu">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="navbar-brand logo">
                                <h1><a href="index.html"><span>Valkyria  </span> Hotel</a></h1>
                            </div>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="/" data-hover="Home">Trang chủ </a></li>
                                <li><a data-hover="Phòng ở" href="/accommodation">Phòng ở</a></li>
                                <li><a data-hover="Căn hộ" href="/apartment">Căn hộ</a></li>
                                <li><a data-hover="Tổ chức sự kiện" href="/event">Tổ chức sự kiện</a></li>
                                <li><a data-hover="Nhà hàng" href="/restaurant">Nhà hàng</a></li>


                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="welcome">
        <div class="container">
            <div class="col-lg-12">
                <div class="container">
                    @include('blocks.error')
                </div>
                @if(sizeof($room_available) == 0 && sizeof($room_check_time) == 0)
                    There are not any suitable rooms !!!
                @else
                <table class="table table-striped table-bordered table-hover" id="dataTables-example" style="width: 100%">
                    <thead>
                    <tr align="center">
                        <th style="width: 10%; text-align: center" >Room Number</th>
                        <th style="width: 10%; text-align: center">Type</th>
                        <th style="width: 40%; text-align: center">Description</th>
                        <th style="width: 15%; text-align: center">Number Of People</th>
                        <th style="width: 15%; text-align: center">Price</th>
                        <th style="width: 10%; text-align: center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($room_available as $item_room_available)
                        <tr class="odd gradeX" align="center">
                            <td>{!! $item_room_available['name'] !!}</td>
                            <td>
                                <?php
                                    $type = DB::table('types')->where('id', $item_room_available['type_id'])->first();
                                    echo $type->name;
                                ?>
                            </td>
                            <td>{!! $item_room_available['description'] !!}</td>
                            <td>{!! $item_room_available['total'] !!}</td>
                            <td>{!! number_format($item_room_available['price'], 0, ",", ".") !!} VND</td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route('getOrder', [$item_room_available["id"], $date_in, $date_out, 1]) !!}">Order</a></td>
                        </tr>
                        @endforeach
                        @foreach($room_check_time as $item_room_check_time)
                            <tr class="odd gradeX" align="center">
                                <td>{!! $item_room_check_time->name !!}</td>
                                <td>
                                    <?php
                                    $type = DB::table('types')->where('id', $item_room_check_time->type_id)->first();
                                    echo $type->name;
                                    ?>
                                </td>
                                <td>{!! $item_room_check_time->description !!}</td>
                                <td>{!! $item_room_check_time->total !!}</td>
                                <td>{!! number_format($item_room_check_time->price, 0, ",", ".") !!} VND</td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route('getOrder', [$item_room_check_time->id, $date_in, $date_out, 1]) !!}">Order</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                    @endif
            </div>
        </div>
    </div>

@endsection