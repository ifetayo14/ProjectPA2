@extends('layouts.jemaatLayout')

@section('title')
    <title>Artikel</title>
@endsection

@section('main-content')
<section class="popular-places-artikel" id="popular">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <span>ARTIKEL</span>
                    <h2>Kumpulan Renungan, Ilustrasi, dan Artikel Rohani</h2>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            @foreach($dataArtikel as $row)
                <div class="col-md-12">
                    <table>
                        <tr>
                            <td rowspan="4">
                                <img src="{{ asset('uploads/artikel/' . $row -> image) }}" alt="" style="width: 250px; height: 150px">
                            </td>
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
                    <br><br>
                </div>
            @endforeach
        </div>
    </div>
</section>
<br>

@endsection

