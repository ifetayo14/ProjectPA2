@extends('layouts.layout')

@section('main-content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Pendeta Aktif</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <a href="{{url('addPendetaAktif')}}" class="btn btn-primary btn-icon-split btn-sm float-right btnAdd">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah Pendeta Aktif</span>
                </a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Bertugas</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><a href="">Valentine Trihandayani</a></td>
                        <td>26</td>
                        <td>Perempuan</td>
                        <td>Balige</td>
                        <td>
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                                <span><i class="fas fa-tools"></i></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{url('/editPendetaAktif')}}">Edit</a>
                                <a class="dropdown-item" href="#">Hapus</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="">Leonard Halomoan Sihombing</a></td>
                        <td>36</td>
                        <td>Laki-laki</td>
                        <td>Tarutung</td>
                        <td>
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                                <span><i class="fas fa-tools"></i></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{url('/editPendetaAktif')}}">Edit</a>
                                <a class="dropdown-item" href="#">Hapus</a>
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <td><a href="">Faustine B A Ompusunggu</a></td>
                        <td>48</td>
                        <td>Laki-laki</td>
                        <td>Porsea</td>
                        <td>
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                                <span><i class="fas fa-tools"></i></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{url('/editPendetaAktif')}}">Edit</a>
                                <a class="dropdown-item" href="#">Hapus</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="{{url('/detailPendetaAktif')}}" class="table-link">Putri Siburian</a></td>
                        <td>43</td>
                        <td>Perempuan</td>
                        <td>Sitoluama</td>
                        <td>
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                                <span><i class="fas fa-tools"></i></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{url('/editPendetaAktif')}}">Edit</a>
                                <a class="dropdown-item" href="#">Hapus</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="">Martin Simanjuntak</a></td>
                        <td>29</td>
                        <td>Laki-laki</td>
                        <td>Laguboti</td>
                        <td>
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                                <span><i class="fas fa-tools"></i></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{url('/editPendetaAktif')}}">Edit</a>
                                <a class="dropdown-item" href="#">Hapus</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="">Saut Raja Marihot Tua Sihotang</a></td>
                        <td>53</td>
                        <td>Laki-laki</td>
                        <td>Samosir</td>
                        <td>
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                                <span><i class="fas fa-tools"></i></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{url('/editPendetaAktif')}}">Edit</a>
                                <a class="dropdown-item" href="#">Hapus</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="">Sri Hartini Manurung</a></td>
                        <td>24</td>
                        <td>Perempuan</td>
                        <td>Garoga</td>
                        <td>
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                                <span><i class="fas fa-tools"></i></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{url('/editPendetaAktif')}}">Edit</a>
                                <a class="dropdown-item" href="#">Hapus</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="">Exalanty Hutabarat</a></td>
                        <td>55</td>
                        <td>Perempuan</td>
                        <td>Soposurung</td>
                        <td>
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                                <span><i class="fas fa-tools"></i></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{url('/editPendetaAktif')}}">Edit</a>
                                <a class="dropdown-item" href="#">Hapus</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="">Chindy Hutapea</a></td>
                        <td>Perempuan</td>
                        <td>33</td>
                        <td>Tambunan</td>
                        <td>
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                                <span><i class="fas fa-tools"></i></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{url('/editPendetaAktif')}}">Edit</a>
                                <a class="dropdown-item" href="#">Hapus</a>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
