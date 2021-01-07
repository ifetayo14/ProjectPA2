@extends('layouts.layout')
@section('title')
    <title>Edit Data Jemaat</title>
@endsection

@section('main-content')
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Edit Data Jemaat</h1>
                        </div>
                        <form class="user" method="POST" action="/updateJemaatSibosur/{{ $jemaatSibosur -> id }}'">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <input type="text" name="nama" class="form-control form-control-user @error('nama') is-invalid @enderror" value="{{ $jemaatSibosur -> nama }}" id="exampleFirstName" placeholder="Nama">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="text" name="gender" class="form-control form-control-user @error('gender') is-invalid @enderror" value="{{ $jemaatSibosur -> gender }}" id="exampleRepeatPassword" placeholder="Jenis Kelamin (L/P)">
                                </div>
                                <div class="col-sm-6">
                                    <input type="number" name="umur" class="form-control form-control-user @error('umur') is-invalid @enderror" value="{{ $jemaatSibosur -> umur }}" id="exampleFirstName" placeholder="Umur">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="alamat" class="form-control form-control-user @error('alamat') is-invalid @enderror" value="{{ $jemaatSibosur -> alamat }}" id="exampleFirstName" placeholder="Alamat">
                            </div>
                            <button href="#" class="btn btn-primary btn-user btn-block">
                                Simpan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
