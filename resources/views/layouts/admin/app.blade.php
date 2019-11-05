@extends('layouts.admin.frame')
@section('maincontent')
        <div class="col-md-3 left_col" style="position: fixed;">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a id="brand" href="/" class="site_title">
                        <img src="{{asset('/images/logo.png')}}">
                        <span>Valkyria </span>
                    </a>
                </div>
                <div class="clearfix"></div>
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <ul class="nav side-menu" id="side-menu">
                            <li><a href="/admin/orderservicemanager"><i class="fa fa-dashboard"></i> Danh sách yêu cầu </a></li>
                            <li><a href="/admin/checkin"><i class="fa fa-mail-reply"></i> Check in </a></li>
                            <li><a href="/admin/checkout"><i class="fa fa-mail-forward"></i> Check out </a></li>
                            <li><a href="/admin/service"><i class="fa fa-star"></i> Quản lý dịch vụ </a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <label id="product-name">Quản lý khách sạn</label>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            @if (Auth::guest())
                                {{--<a href="{{ url('/login') }}">Đăng nhập</a>--}}
                            @else
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                                   aria-expanded="false">
                                    <img src="{{asset('/images/user.png')}}">
                                    {{ Auth::user()->name }}
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">

                                    <li>
                                        <a href="{{ url('/logout') }}"
                                           onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out pull-right"></i> Đăng xuất
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                              style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            @endif
                        </li>
                    </ul>

                </nav>
            </div>
        </div>

        <div class="right_col" role="main">
            @yield('content')
        </div>
@endsection


