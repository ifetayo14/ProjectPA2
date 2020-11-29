@extends('layouts.layout')

@section('title')
    <title>Tata Ibadah</title>
@endsection

@section('main-content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tata Ibadah</h1>

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
                <a href="{{url('addTataIbadah')}}" class="btn btn-primary btn-icon-split btn-sm float-right btnAdd">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah Tata Ibadah</span>
                </a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Judul</th>
                        <th>Tanggal Pembuatan</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tataIbadah as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><a href="/detailTataIbadah/{{ $row['id'] }}" class="table-link">{{ $row['judul'] }}</a></td>
                            <td>{{ $row['created_at'] }}</td>
                            <td>
                                <form action="/tataIbadah/{{ $row -> id }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
