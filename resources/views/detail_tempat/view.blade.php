@extends('layout.template')

@section('content')
<div class="content">

    <div class="container">
        <div class="row">
            <h2>{{ $detail->details->nama_tempat }}</h2>
        </div>
        <div class="row">
            <div class="col-1"><p>Kota</p></div>
            <div class="col">{{ $detail->loct->nama_kota }}</div>
        </div>
        <div class="row">
            <div class="col-1"><p>No Telp</p></div>
            <div class="col">{{ $detail->no_telp }}</div>
        </div>
        <div class="row">
            <div class="col-1"><p>Waktu Operasional</p></div>
            <div class="col">{{ $detail->waktu_operasional }}</div>
        </div>
        <div class="row">
            <div class="col-1"><p>Link Maps</p></div>
            <div class="col">{{ $detail->link_maps }}</div>
        </div>
        <div class="row">
            <div class="col-1 mt-5"><p>Menu</p></div>
            <div class="col"><img src="{{ asset('storage/'.$detail->menu) }}" class="img-fluid mt-3" style="width: 200px; height:250px;"></div>
        </div>
    </div>
</div>

@endsection