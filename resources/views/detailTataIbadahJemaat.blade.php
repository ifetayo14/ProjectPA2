<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>
        Detail Pengumuman
    </title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="templ/newTemp/css/bootstrap.min.css">
    <link rel="stylesheet" href="templ/newTemp/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="templ/newTemp/css/fontAwesome.css">
    <link rel="stylesheet" href="templ/newTemp/css/hero-slider.css">
    <link rel="stylesheet" href="templ/newTemp/css/owl-carousel.css">
    <link rel="stylesheet" href="templ/newTemp/css/datepicker.css">
    <link rel="stylesheet" href="{{url('templ/newTemp/css/templatemo-style.css')}}">
    <link href="{{url('templ/css/sb-admin-2.min.css')}}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <script src="templ/newTemp/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <!--
        Venue Template
        http://www.templatemo.com/tm-522-venue
    -->
</head>

<body>

<div class="wrap">
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <button id="primary-nav-button" type="button">Menu</button>
                    <a href="index.html"><div class="logo">
                            <img src="{{url('templ/img/logoApp.png')}}" alt="">
                        </div></a>
                    <nav id="primary-nav" class="dropdown cf">
                        <ul class="dropdown menu">
                            <li class='active'><a href="{{url('/')}}">Beranda</a></li>
                            <li><a href="{{url('/tataIbadahList')}}">Tata Ibadah</a>
                            </li>
                            <li><a class="scrollTo"  href="{{url('/pengumumanJemaat')}}">Pengumuman</a></li>
                            <li><a class="scrollTo" href="{{url('/artikel')}}">Artikel</a></li>
                            <li><a class="scrollTo" href="{{url('/index')}}">Login</a></li>
                        </ul>
                    </nav><!-- / #primary-nav -->
                </div>
            </div>
        </div>
    </header>
</div>

<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4 pengDetTitle">
            <h1 class="h4 mb-0 text-gray-800">{{ $tataIbadah -> judul }}</h1>
        </div>

        <hr style="background-color: gray; height: 0.6pt; margin-left: 2pt; margin-right: 2pt;">

        <div class="pengContent">
            {!! $tataIbadah -> isi !!}
        </div>

        <div class="pengFooter">
            <hr style="background-color: gray; height: 0.4pt; margin-left: 2pt; margin-right: 2pt;">
            <div class="createdAt">
                {{ $tataIbadah -> created_at }}
            </div>
        </div>
    </div>
</div>
<br><br>



<div class="sub-footer">
    <p>COPYRIGHT &copy; KELOMPOK 10 KREN 2020</p>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
<script>window.jQuery || document.write('<script src="templ/newTemp/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

<script src="templ/newTemp/js/vendor/bootstrap.min.js"></script>

<script src="templ/newTemp/js/datepicker.js"></script>
<script src="templ/newTemp/js/plugins.js"></script>
<script src="templ/newTemp/js/main.js"></script>
</body>
</html>
