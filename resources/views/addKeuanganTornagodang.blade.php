@extends('layouts.layout')
@section('title')
    <title>Tambah Data Baru</title>
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
                            <h1 class="h4 text-gray-900 mb-4">Tambah Data Baru</h1>
                        </div>
                        <form class="user" method="POST" action="{{url('storeKeuanganTornagodang')}}">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="keterangan" class="form-control form-control-user" id="exampleFirstName" placeholder="Keterangan">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label for="exampleRepeatPassword">Bulan:</label>
                                    <select class="form-control" id="exampleRepeatPassword" name="bulan">
                                        <option></option>
                                        <option>Januari</option>
                                        <option>Februari</option>
                                        <option>Maret</option>
                                        <option>April</option>
                                        <option>Mei</option>
                                        <option>Juni</option>
                                        <option>Juli</option>
                                        <option>Agustus</option>
                                        <option>September</option>
                                        <option>Oktober</option>
                                        <option>November</option>
                                        <option>Desember</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="number" name="pemasukan" class="form-control form-control-user" id="exampleFirstName" placeholder="Pemasukan">
                            </div>
                            <div class="form-group">
                                <input type="number" name="pengeluaran" class="form-control form-control-user" id="exampleFirstName" placeholder="Pengeluaran">
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
