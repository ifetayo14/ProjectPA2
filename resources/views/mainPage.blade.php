@extends('layouts.jemaatLayout')

@section('title')
    <title>HKBP TORNAGODANG - RESSORT MARANATHA</title>
@endsection

@section('main-content')

<section class="banner" id="top">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="banner-caption">
                    <div class="line-dec"></div>
                    <h2>Ressort Maranatha</h2>
                    <span>Kecamatan Habinsaran Kabupaten Toba Samosir</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="featured-places" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <span>GEREJA</span>
                    <h2>Gereja Ressort Maranatha</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <a href="{{url('gerejaPage') }}">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="thumb">
                            <img src="templ/img/tornagodang2.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <h4>HKBP Tormagodang</h4>
                            <span>Desa Tornagodang Kec. Habinsaran Kab.Toba</span>
                            <br>
                        </div>
                    </div>
                </div>
            </a>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="featured-item">
                    <div class="thumb">
                        <img src="templ/img/pardomuan.jpg" alt="">
                    </div>
                    <div class="down-content">
                        <h4>HKBP Pardomuan</h4>
                        <span>Desa Taon Marisi Kec. Habinsaran Kab.Toba </span>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="featured-item">
                    <div class="thumb">
                        <img src="templ/img/sibosur.jpg" alt="">
                    </div>
                    <div class="down-content">
                        <h4>HKBP Oikumene Sibosur</h4>
                        <span>Desa Sibosur Kec. Habinsaran Kab.Toba</span>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="item featured-item">
                    <div class="thumb">
                        <img src="templ/img/matio.jpg" alt="">
                    </div>
                    <div class="down-content">
                        <h4>HKBP Matio</h4>
                        <span>Desa Matio Kec. Habinsaran Kab.Toba</span>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pricing-tables">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <span>JADWAL</span>
                    <h2>Jadwal Ibadah Tiap Minggu</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="table-item">
                    <div class="top-content">
                        <h4>HKBP Tormagodang</h4>
                    </div>
                    <ul>
                        <li><a href="#">Sekolah Minggu: 08.00 WIB</a></li>
                        <li><a href="#">Ibadah Remaja: 10.00 WIB</a></li>
                        <li><a href="#">Ibadah Dewasa: 12.00 WIB</a></li>
                        <li><a href="#">Ibadah Sore: 17.00 WIB</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="table-item">
                    <div class="top-content">
                        <h4>HKBP Pardomuan</h4>
                    </div>
                    <ul>
                        <li><a href="#">Sekolah Minggu: 08.00 WIB</a></li>
                        <li><a href="#">Ibadah Remaja: 09.30 WIB</a></li>
                        <li><a href="#">Ibadah Dewasa: 11.30 WIB</a></li>
                        <li><a href="#">Ibadah Sore: 17.00 WIB</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="table-item">
                    <div class="top-content">
                        <h4>HKBP Oikumene Sibosur</h4>
                    </div>
                    <ul>
                        <li><a href="#">Sekolah Minggu: 07.30 WIB</a></li>
                        <li><a href="#">Ibadah Remaja: 09.00 WIB</a></li>
                        <li><a href="#">Ibadah Dewasa: 11.00 WIB</a></li>
                        <li><a href="#">Ibadah Sore: 17.30 WIB</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="table-item">
                    <div class="top-content">
                        <h4>HKBP Matio</h4>
                    </div>
                    <ul>
                        <li><a href="#">Sekolah Minggu: 08.00 WIB</a></li>
                        <li><a href="#">Ibadah Remaja: 10.00 WIB</a></li>
                        <li><a href="#">Ibadah Dewasa: 12.00 WIB</a></li>
                        <li><a href="#">Ibadah Sore: 17.00 WIB</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br>
</section>

<section class="popular-places" id="popular">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <span>ARTIKEL</span>
                    <h2>Kumpulan Renungan, Ilustrasi, dan Artikel Rohani</h2>
                </div>
            </div>
        </div>
        <div class="owl-carousel owl-theme">
            @foreach($dataArtikel as $row)
            <div class="item popular-item">
                <div class="thumb">
                    <a href="{{ $row['link'] }}">
                        <img src="{{ asset('uploads/artikel/' . $row -> image) }}" alt="">
                        <div class="text-content">
                            <h4>{{ $row['judul'] }}</h4>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <br><br>
</section>

@endsection
