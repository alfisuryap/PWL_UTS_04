@extends('nasabahs.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>DATA NASABAH BANK JD</h2>
            </div><br>

                <form class="form-left my-2" method="get" action="{{ route('search') }}">
                        <div class="form-group w-70 mb-3">
                            <input type="text" name="search" class="form-control w-50 d-inline" id="search" placeholder="Masukkan Nama">
                            <button type="submit" class="btn btn-primary mb-1">Search</button>
                            <a class="btn btn-success right" href="{{ route('nasabahs.create') }}" style="margin-left:8cm"> Input Data Nasabah</a>
                        </div>
                </form>
            </div>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        
        <table class="table table-bordered">
            <tr>
                <th>no_rekening</th>
                <th>nama</th>
                <th>alamat</th>
                <th>jenis_tabungan</th>
                <th>saldo</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($nasabahs as $Nasabah)
            <tr>
        
                <td>{{ $Nasabah->no_rekening }}</td>
                <td>{{ $Nasabah->nama }}</td>
                <td>{{ $Nasabah->alamat }}</td>
                <td>{{ $Nasabah->jenis_tabungan }}</td>
                <td>{{ $Nasabah->saldo }}</td>
                <td>
                <form action="{{ route('nasabahs.destroy',$Nasabah->no_rekening) }}" method="POST">
        
                    <a class="btn btn-info" href="{{ route('nasabahs.show',$Nasabah->no_rekening) }}">Show</a>
                    
                    <a class="btn btn-primary" href="{{ route('nasabahs.edit',$Nasabah->no_rekening) }}">Edit</a>
                    
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                </td>
            </tr>
            @endforeach
        </table>
        {!! $nasabahs->withQueryString()->links('pagination::bootstrap-5') !!}
    </div>
@endsection