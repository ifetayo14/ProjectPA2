@extends('layouts.jemaatLayout')

@section('title')
    <title>HKBP TORNAGODANG</title>
@endsection

@section('main-content')

    <section class="banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>HKBP TORNAGODANG</h2>
                        <span>Desa Tornagodang Kec. Habinsaran Kab.Toba</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pricing-tables">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-3">
                    <div class="table-item">
                        <div class="top-content">
                            <h4>Jadwal Ibadah</h4>
                        </div>
                        <ul>
                            <li><a href="#">Sekolah Minggu: 08.00 WIB</a></li>
                            <li><a href="#">Ibadah Remaja: 10.00 WIB</a></li>
                            <li><a href="#">Ibadah Dewasa: 12.00 WIB</a></li>
                            <li><a href="#">Ibadah Sore: 17.00 WIB</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="section-heading">
                        <span>TATA IBADAH</span>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Judul</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><a href="">Tata Ibadah Online 22 Maret 2020, Minggu Letare</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><a href="">Tata Ibadah Online 15 Maret 2020, Minggu Okuli</a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><a href="">Tata Ibadah Online 08 Maret 2020, Minggu Reminiscere</a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><a href="">Tata Ibadah Online 01 Maret 2020, Minggu Invocavit</a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td><a href="">Tata Ibadah Online 23 Februari 2020, Minggu Estomihi</a></td>
                                </tr>
{{--                            @foreach($dataPengumuman as $row)--}}
{{--                                <tr>--}}
{{--                                    <td>{{ $loop->iteration }}</td>--}}
{{--                                    <td><a href="/detailPengumuman/{{ $row['id'] }}" class="table-link">{{ $row['judul'] }}</a></td>--}}
{{--                                    <td>{{ $row['created_at'] }}</td>--}}
{{--                                </tr>--}}
{{--                            @endforeach--}}
                            </tbody>
                        </table>
                    </div>
                    <p>
                        <a href="" style="color: #4883FF">
                            Selengkapnya
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="featured-places" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <span>PENGUMUMAN</span>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Judul</th>
                        <th>Tanggal Pembuatan</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($dataPengumuman as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><a href="/detailPengumuman/{{ $row['id'] }}" class="table-link">{{ $row['judul'] }}</a></td>
                            <td>{{ $row['created_at'] }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <p>
                <a href="" style="color: #4883FF">
                    Selengkapnya
                </a>
            </p>
        </div>
    </section>

@endsection
