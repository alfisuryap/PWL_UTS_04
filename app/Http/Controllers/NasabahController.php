<?php

namespace App\Http\Controllers;

use App\Models\Nasabah;
use Illuminate\Http\Request;

class NasabahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fungsi eloquent menampilkan data menggunakan pagination
        $nasabahs = Nasabah::paginate(6); // Mengambil semua isi tabel
        $posts = Nasabah::orderBy('no_rekening', 'desc')->paginate(7);
        return view('nasabahs.index', compact('nasabahs'))
        ->with('i', (request()->input('page', 1) - 1) * 6);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nasabahs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'no_rekening' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_tabungan' => 'required',
            'saldo' => 'required',
        ]);

        //fungsi eloquent untuk menambah data
        Nasabah::create($request->all());
        
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('nasabahs.index')
            ->with('success', 'Nasabah Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($no_rekening)
    {
        //menampilkan detail data dengan menemukan/berdasarkan Nim Mahasiswa
        $Nasabah = Nasabah::find($no_rekening);
        return view('nasabahs.detail', compact('Nasabah'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($no_rekening)
    {
        //menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk diedit
        $Nasabah = Nasabah::find($no_rekening);
        return view('nasabahs.edit', compact('Nasabah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $no_rekening)
    {
        //melakukan validasi data
        $request->validate([
            'no_rekening' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_tabungan' => 'required',
            'saldo' => 'required',
        ]);

    //fungsi eloquent untuk mengupdate data inputan kita
        Nasabah::find($no_rekening)->update($request->all());
    
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('nasabahs.index')
            ->with('success', 'Nasabah Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($no_rekening)
    {
        //fungsi eloquent untuk menghapus data
        Nasabah::find($no_rekening)->delete();
        return redirect()->route('nasabahs.index')
            -> with('success', 'Nasabah Berhasil Dihapus');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $nasabahs = Nasabah::where('nama', 'like', "%" . $keyword . "%")->paginate(6);
        return view('nasabahs.index', compact('nasabahs'))->with('i', (request()->input('page', 1) - 1) * 6);
    }
}
