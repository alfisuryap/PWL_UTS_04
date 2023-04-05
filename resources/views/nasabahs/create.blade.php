@extends('nasabahs.layout')
 
@section('content')
 
<div class="container mt-5">
 
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
                <div class="card-header">
                Tambah Nasabah
                </div>
                <div class="card-body">
                    @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('nasabahs.store') }}" id="myForm">
            @csrf
                <div class="form-group">
                    <label for="no_rekening">no_rekening</label> 
                    <input type="text" name="no_rekening" class="form-control" id="no_rekening" aria-describedby="no_rekening" > 
                </div>
                <div class="form-group">
                    <label for="nama">nama</label> 
                    <input type="nama" name="nama" class="form-control" id="nama" aria-describedby="nama" > 
                </div>
                <div class="form-group">
                    <label for="alamat">alamat</label>
                    <input type="alamat" name="alamat" class="form-control" id="alamat" aria-describedby="alamat" > 
                </div>
                <div class="form-group">
                    <label for="jenis_tabungan">jenis_tabungan</label> 
                    <input type="jenis_tabungan" name="jenis_tabungan" class="form-control" id="jenis_tabungan" aria-describedby="jenis_tabungan" > 
                </div>
                <div class="form-group">
                    <label for="saldo">saldo</label> 
                    <input type="saldo" name="saldo" class="form-control" id="saldo" aria-describedby="saldo" > 
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection