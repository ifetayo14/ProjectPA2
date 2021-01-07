@extends('layouts.layout')

@section('title')
    <title>Data Jemaat HKBP Matio</title>
@endsection

@section('main-content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Jemaat HKBP Matio</h1>

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
                <a href="{{url('addJemaatMatio')}}" class="btn btn-primary btn-icon-split btn-sm float-right btnAdd">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah Jemaat Baru</span>
                </a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th style="width: 20px">Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th style="width: 20px">Umur</th>
                        <th style="width: 20px">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($dataJemaat as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{$row['nama']}}</td>
                            <td>{{$row['gender']}}</td>
                            <td>{{$row['alamat']}}</td>
                            <td>{{$row['umur']}}</td>
                            <td style="text-align: center">
                                <form action="/deleteJemaatMatio/{{ $row -> id }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                                <a href="/editJemaatMatio/{{ $row -> id }}" style="color: white" class="btn btn-primary">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
