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
    <div class="header ">
        <div class="container">
            <div class="header-menu">

                @include('partials.navbar')
            </div>
        </div>
    </div>
    <div class="welcome">
        <div class="container">
            @include('blocks.error')
            @include('blocks.message')
            <div class="col-md-3">


                <form action="{!! route('postResult') !!}" method="POST">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
                    <div class="form-group">
                        <label>Check In</label>
                        <input id="datepickerin" class="form-control" name="txtDateIn" type="date"
                               placeholder="Please Enter Date Input"/>
                    </div>
                    <div class="form-group">
                        <label>Check Out</label>
                        <input id="datepickerout" class="form-control" name="txtDateOut" type="date"
                               placeholder="Please Enter Date Input"/>
                    </div>

                    <div class="form-group">
                        <label>Type Of Room</label>
                        <select class="form-control" name="sltType">
                            <option value="0">Chọn loại phòng</option>
                            @foreach($types as $item_type)
                                <option value="{!! $item_type['id'] !!}">{!! $item_type['name'] !!}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Số người</label>
                        <select class="form-control" name="sltNumber">
                            <option value="0">Chọn số người</option>
                            @for($i = 1; $i < 11; $i++)
                                <option value="{!! $i !!}">{!! $i !!}</option>
                            @endfor
                        </select>
                    </div>
                    <button type="submit" class="btn btn-default">Đặt phòng</button>
                    <button type="reset" class="btn btn-default">Nhập lại form</button>
                </form>
            </div>
            <div class="col-md-9">
                <h2 class="tittle">Chào mừng quý khách đến với Valkyria</h2>
                <p class="wel text">Tọa lại tại vị trí đắc địa của thủ đô, nơi gần các trung tâm văn hóa,
                    thương
                    mại, tài chính, sân bay Nội Bài và các cơ quan ngoại giao của chính phủ, khách sạn
                    Valkyria là một trong những khách sạn 5 sao đầu tiên với lối kiến trúc tinh
                    tế và tầm nhìn bao quát quang cảnh thành phố thơ mộng.</p>
                <p class="wel text">
                    Kể từ ngày đầu thành lập đến nay, khách sạn Valkyria đã trở thành sự lựa chọn
                    hàng đầu của du khách trong và ngoài nước đến nghỉ ngơi, thư giãn hay trong những chuyến công
                    tác
                    của mình. Khách hàng sẽ được tận hưởng không gian tự nhiên giữa lòng thành phố, vị
                    trí
                    thuận tiện gần những danh lam thằng cảnh nổi tiếng của đất nước, chất lượng phục vụ
                    đẳng
                    cấp và dịch vụ phòng ở vô cùng hiện đại.
                </p>
            </div>
        </div>
        <div class="container">


            <div class="wel-grids">
                <div class="col-md-3 wel-grid">
                    <a href="/accommodation"><img src="images/f1.jpg" class="img-responsive gray" alt=""/></a>
                    <h4>Phòng ở </h4>
                    <p>Tận hưởng phòng ở thượng hạng tại khách sạn Valkyria.
                    </p>
                </div>
                <div class="col-md-3 wel-grid">
                    <a href="/apartment"><img src="images/f2.jpg" class="img-responsive gray" alt=""/></a>
                    <h4>Căn hộ </h4>
                    <p> Tận hưởng dịch vụ căn hộ đẳng cấp, hiện đại, tiện nghi.</p>
                </div>
                <div class="col-md-3 wel-grid">
                    <a href="/event"><img src="images/f3.jpg" class="img-responsive gray" alt=""/></a>
                    <h4>Tổ chức sự kiện</h4>
                    <p>Tổ chức Hội nghị, Hội thảo, Sự kiện và Tiệc cưới theo cách chuyên nghiệp.</p>
                </div>
                <div class="col-md-3 wel-grid">
                    <a href="/restaurant"><img src="images/f4.jpg" class="img-responsive gray" alt=""/></a>
                    <h4>Nhà hàng sang trọng</h4>
                    <p>Tận hưởng tinh hoa và đẳng cấp ẩm thực bậc nhất.</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

@endsection