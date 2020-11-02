@extends('layouts.layout')

@section('title')
    <title>Data Kas</title>
@endsection

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Kas</h1>

    <div class="row">
        <div class="col-xl-12 col-lg-7">

            <br>

            <div class="card shadow">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Gereja</th>
                                <th>Bulan</th>
                                <th>Pemasukan (Rp)</th>
                                <th>Pengeluaran (Rp)</th>
                                <th>Total (Rp)</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($kasGereja as $row)
                            <tr>
                                <td>{{ $loop -> iteration}}</td>
                                <td><a href="/detailKasGereja/{{ $row['id'] }}" class="table-link">{{ $row['nama_gereja'] }}</a></td>
                                <td>{{ $row['bulan'] }}</td>
                                <td>{{ $row['pemasukan'] }}</td>
                                <td>{{ $row['pengeluaran'] }}</td>
                                <td>{{ $row['total'] }}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
