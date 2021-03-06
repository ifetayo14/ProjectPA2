@extends('layouts.layoutPersonalia')

@section('title')
    <title>Detail Pengumuman</title>
@endsection

@section('main-content')
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4 pengDetTitle">
                <h1 class="h4 mb-0 text-gray-800">Pengumuman {{ $pengumuman -> judul}}</h1>
            </div>

            <hr style="background-color: gray; height: 0.6pt; margin-left: 2pt; margin-right: 2pt;">

            <div class="pengContent">
                Shalom, di beritahukan bahwa :<br>

                {!!$pengumuman -> isi!!}
                <br>
                Terima kasih, <br>

                Salam. <br><br>

                Sitoluama,{{$pengumuman -> created_at}}<br><br>

            </div>
            <center>
                <a href="/editPengumumanGerejaPersonalia/{{ $pengumuman -> id }}" class="btn btn-primary">Edit</a>
                <form action="/detailPengumumanPersonalia/{{ $pengumuman -> id }}" method="POST" class="d-inline">
                         @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </center>
            <br>
        </div>
    </div>
@endsection
