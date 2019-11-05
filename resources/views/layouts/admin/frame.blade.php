<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">

    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Valkyria - Quản lý khách sạn</title>

    <script src="{!! asset('js/jquery-1.12.4.js') !!}"></script>
    <script src="{!! asset('js/jquery.min.js') !!}"></script>
    <script src="{!! asset('js/bootstrap.min.js') !!}"></script>

    <link rel="stylesheet" href="{!! asset('css/bootstrap.css') !!}" type="text/css" media="screen" />

    <link rel="stylesheet" href="{!! asset('css/style.css') !!}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{!! asset('css/flexslider.css') !!}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{!! asset('css/jquery-ui.css') !!}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{!! asset('css/font-awesome/css/font-awesome.min.css') !!}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{!! asset('css/custom.min.css') !!}" type="text/css" media="screen" />

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- Custom Theme Style -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->

    <style>
        #brand img {
            width: 40px;
        }

        .nav.navbar-nav.navbar-right {
            width: auto;
        }

        nav {
            text-align: center;
        }

        #product-name {
            font-size: 20px;
            padding: 10px 0;
        }
        body{
            background: #F7F7F7;
        }
    </style>
</head>

<body class="nav-md">


<div class="container body">
    <div class="main_container">
        @yield('maincontent')

    </div>
</div>



<!-- Custom Theme Scripts -->
<script src="{!! asset('js/custom.js') !!}"></script>


</body>

</html>
