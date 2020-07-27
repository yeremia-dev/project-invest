<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <title>Hijrahkan</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="{{ asset('template/coming/css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('template/coming/css/coming-sssoon.css') }} " rel="stylesheet" />
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" />

    <style type="text/css">
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 99999;
            background-color: #fff;
        }
        .preloader .loading {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            font: 14px arial;
        }
    </style>


    <!--     Fonts     -->
{{--    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">--}}
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/20131db450.js"></script>
    <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>

    <script>
        $(document).ready(function(){
            setTimeout(function () {
                $(".preloader").fadeOut();
            }, 1500);
        })
    </script>

</head>

<body>

<div class="preloader">
    <div class="loading">
        <img src="{{ asset('img/gif/spin.gif') }}" width="80">
    </div>
</div>

@yield('content')
{{--    <div class="footer">--}}
{{--        <div class="container">--}}
{{--            Made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>. Free download <a href="http://www.creative-tim.com/product/coming-sssoon-page">here.</a>--}}
{{--        </div>--}}
{{--    </div>--}}
</body>
<script src="{{ asset('template/coming/js/jquery-1.10.2.js') }}" type="text/javascript"></script>
<script src="{{ asset('template/coming/js/bootstrap.min.js') }}" type="text/javascript"></script>

</html>
