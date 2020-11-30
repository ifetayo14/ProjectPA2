@extends('layouts.jemaatLayout')

@section('title')
    <title>Tata Ibadah</title>
@endsection

@section('main-content')
    <section class="featured-places" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <span>TATA IBADAH</span>
                    </div>
                </div>
            </div>

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
                        </a>
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <center>
                                    <th width="550px"><center>Judul</center></th>
                                    <th><center>Tanggal Pembuatan</center></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tataIbadah as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><a href="/detailTataIbadahJemaat/{{ $row['id'] }}" class="table-link">{{ $row['judul'] }}</a></td>
                                    <td>{{ $row['created_at'] }}</td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br>

@endsection
