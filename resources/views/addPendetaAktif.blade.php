@extends('layouts.layout')
@section('title')
    <title>Tambah Pendeta Baru</title>
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
                            <h1 class="h4 text-gray-900 mb-4">Tambah Pendeta Aktif</h1>
                        </div>
                        @if(count($errors)>0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors-> all() as $error)
                                        <li>
                                            {{$error}}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if(\Session::has('success'))
                            <div class="alert alert-success">
                                <p>
                                    {{\Session::get('success')}}
                                </p>
                            </div>
                        @endif
                        <form class="user" method="POST" action="{{url('penAktif')}}">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" class="form-control form-control-user" id="exampleFirstName" placeholder="Nama">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <br>
                                    <input type="text" name="birthPlace" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Tempat Lahir">
                                </div>
                                <div class="col-sm-6">
                                    Tanggal Lahir
                                    <input type="date" name="birthDate" class="form-control form-control-user" id="exampleInputPassword" placeholder="Tanggal Pembuatan">
                                </div>
                            </div>
                            <div class="form-group">
                                Tanggal Mulai Bertugas
                                <input type="date" name="dutyBegin" class="form-control form-control-user" id="exampleInputPassword" placeholder="Tanggal Mulai Bertugas">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="text" name="gender" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Jenis Kelamin (L/P)">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" name="workPlace" class="form-control form-control-user" id="exampleFirstName" placeholder="Tempat Bertugas">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="address" class="form-control form-control-user" id="exampleFirstName" placeholder="Alamat">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control form-control-user" id="exampleFirstName" placeholder="Email">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2">
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="+62" disabled>
                                </div>
                                <div class="col-sm-10">
                                    <input type="number" name="phoneNumber" class="form-control form-control-user" id="exampleFirstName" placeholder="Nomor Telepon">
                                </div>
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
