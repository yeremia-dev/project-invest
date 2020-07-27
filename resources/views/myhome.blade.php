@extends('home-layout.home-app')
@section('content')
<nav class="navbar2 navbar-transparent navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        Tentang Kami
                    </a>
                </li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>
<div class="main" style="background-image: url('{{ asset('template/coming/images/bg-yerdev.jpg') }}')">

    <!--    Change the image source '/images/default.jpg' with your favourite image.     -->

    <div class="cover green" data-color="black"></div>

    <!--   You can change the black color for the filter with those colors: blue, green, red, orange       -->

    <div class="container">
        <h1 class="logo">
            Hijrahkan
        </h1>
        <!--  H1 can have 2 designs: "logo" and "logo cursive"           -->

        <div class="content">
            <h4 class="motto">Tertarik lebih lanjut</h4>
            <div class="row justify-content-lg-center justify-content-md-center justify-content-center form-inline subscribe" style="font-family: 'Roboto Slab', serif;">
                <div class="col-auto">
                    <button class="btn btn-success btn-fill btn-lg"style="padding: 10px 20px; opacity: 0.9; font-size: 17px">Take Over / <br> Pindahkan Utang</button>
                </div>
                <div class="col-auto margin-atasnya">
                    <button class="btn btn-success btn-fill btn-lg" style="padding: 20px 50px; opacity: 0.9">Investasi</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
