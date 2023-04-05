@extends('nasabahs.layout')
 
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail Nasabah
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>no_rekening: </b>{{$Nasabah->no_rekening}}</li>
                    <li class="list-group-item"><b>nama: </b>{{$Nasabah->nama}}</li>
                    <li class="list-group-item"><b>alamat: </b>{{$Nasabah->alamat}}</li>
                    <li class="list-group-item"><b>jenis_tabungan: </b>{{$Nasabah->jenis_tabungan}}</li>
                    <li class="list-group-item"><b>saldo: </b>{{$Nasabah->saldo}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('nasabahs.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection