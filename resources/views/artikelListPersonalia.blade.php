@extends('layouts.layoutPersonalia')

@section('title')
    <title>Daftar Artikel</title>
@endsection

@section('main-content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Artikel</h1>

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
                <a href="{{url('addArtikelPersonalia')}}" class="btn btn-primary btn-icon-split btn-sm float-right btnAdd">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah Artikel</span>
                </a>
                <br><br><br>
                @foreach($dataArtikel as $row)
                    <div class="col-md-12">
                        <table>
                            <tr>
                                <td rowspan="4"><img src="{{ asset('uploads/artikel/' . $row -> image) }}" alt="" style="width: 250px; height: 150px"></td>
                                <td></td>
                                <td style="font-size: 14pt"><a href="{{ $row['link'] }}">{{ $row['judul'] }}</a></td>
                            </tr>
                            <tr>
                                <td style="color: #FFF">...</td>
                                <td>
                                    <span style="font-size: 11pt">{{ $row['ringkasan'] }}</span>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <span style="font-size: 8pt">{{ $row['created_at'] }}</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <br><br>
                @endforeach
            </div>
        </div>
    </div>

@endsection
