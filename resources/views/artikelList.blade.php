@extends('layouts.layout')

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
                <a href="{{url('addArtikel')}}" class="btn btn-primary btn-icon-split btn-sm float-right btnAdd">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah Artikel</span>

                </a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    @foreach($dataArtikel as $row)
                        <div class="col-md-4">
                            <img src="{{ $row['image'] }}" alt="">
                        </div>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection
