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
                <h1><a href="/"><span>Valkyria  </span> Hotel</a></h1>
            </div>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                @if ($tab != 0)
                    @if ($tab == 1)
                        <li class="active"><a href="/" data-hover="Home">Trang chủ </a></li>
                    @else
                        <li class=""><a href="/" data-hover="Home">Trang chủ </a></li>
                    @endif


                    @if (Auth::guest())
                        @if($tab == 4)
                            <li class="active"><a href="{{ url('/login') }}">Đăng nhập</a></li>
                        @else
                            <li><a href="{{ url('/login') }}">Đăng nhập</a></li>
                        @endif
                        @if ($tab == 5)
                            <li class="active"><a href="{{ url('/register') }}">Đăng ký</a></li>
                        @else
                            <li><a href="{{ url('/register') }}">Đăng ký</a></li>
                        @endif

                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    @if(Auth::user()->role == "admin")
                                        <a href="/admin/orderservicemanager">Quản lý khách sạn</a>
                                    @else
                                        <a href="/service/{{Auth::user()->id}}/index">
                                            Dịch Vụ
                                        </a>
                                        <a href="/cart">Giỏ hàng</a>
                                    @endif

                                    <a href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Thoát
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                @else
                        <li class=""><a href="/" data-hover="Home">Trang chủ </a></li>
                        <li><a data-hover="Phòng ở" href="/accommodation">Phòng ở</a></li>
                        <li><a data-hover="Tổ chức sự kiện" href="/event">Tổ chức sự kiện</a></li>


                    @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Đăng nhập</a></li>
                            <li><a href="{{ url('/register') }}">Đăng ký</a></li>

                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>

                                    <a href="/service/{{Auth::user()->id}}/index">Dịch vụ</a>
                                    <a href="/cart">Giỏ hàng</a>
                                    <a href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Thoát
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                @endif


            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="clearfix"></div>
