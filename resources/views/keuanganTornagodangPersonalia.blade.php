@extends('layouts.layoutPersonalia')

@section('title')
    <title>Data Keuangan HKBP Tornagodang</title>
@endsection

@section('main-content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Keuangan HKBP Tornagodang</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        @if($message = Session::get('success'))
            <div class="alert alert-success">
                <p>
                    {{$message}}
                </p>
            </div>
        @endif
        <div class="card-body">
            <div class="table-responsive">
                <a href="{{url('addKeuanganTornagodang')}}" class="btn btn-primary btn-icon-split btn-sm float-right btnAdd">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah Data Baru</span>
                </a>
                <table style="font-size: 10pt" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Keterangan</th>
                        <th>Bulan</th>
                        <th>Pemasukan</th>
                        <th>Pengeluaran</th>
                        <th>Tanggal Masukan</th>
                        {{--                        <th style="width: 20px">Aksi</th>--}}
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $totPemasukan = 0;
                    $totPengeluaran = 0;
                    $total = 0;
                    ?>
                    @foreach($dataKeuangan as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{$row['keterangan']}}</td>
                            <td>{{$row['bulan']}}</td>
                            <td>
                                @if( $row['pemasukan'] != "" )
                                    Rp. {{$row['pemasukan']}}
                                @endif
                            </td>
                            <td>
                                @if( $row['pengeluaran'] != "" )
                                    Rp. {{$row['pengeluaran']}}
                                @endif
                            </td>
                            <td>{{$row['created_at']}}</td>
                            <td style="text-align: center">
                                <form action="/deleteKeuanganTornagodang/{{ $row -> id }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        <?php
                        $totPemasukan = $totPemasukan + $row['pemasukan'];
                        $totPengeluaran = $totPengeluaran + $row['pengeluaran'];
                        ?>
                    @endforeach
                    <tr style="font-weight: bold">
                        <td style="font-size: 14pt" colspan="3" rowspan="2">
                            Total
                        </td>
                        <td>
                            <?php
                            echo 'Rp. ' . $totPemasukan;
                            ?>
                        </td>
                        <td>
                            <?php
                            echo 'Rp. ' . $totPengeluaran;
                            ?>
                        </td>
                        <td colspan="2"></td>
                    </tr>
                    <tr style="font-weight: bold">
                        <td colspan="2" style="text-align: center">
                            <?php
                            $total = $totPemasukan - $totPengeluaran;
                            echo 'Rp. ' . $total;
                            ?>
                        </td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
