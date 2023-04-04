<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenggajianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        {
            //fungsi eloquent menampilkan data menggunakan pagination
            $penggajian = Penggajian::all(); // Mengambil semua isi tabel
            $posts = Penggajian::orderBy('Nip', 'desc')->paginate(6);
            return view('penggajian.index', compact('penggajian'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
            }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('penggajian.create');
    }
    public function store(Request $request)
 {
 //melakukan validasi data
 $request->validate([
 'Nip' => 'required',
 'Nama' => 'required',
 'Alamat' => 'required',
 'Jabatan' => 'required',
 'Gaji pokok' => 'required',
 ]);
 //fungsi eloquent untuk menambah data
 Penggajian::create($request->all());
 //jika data berhasil ditambahkan, akan kembali ke halaman utama
 return redirect()->route('penggajian.index')
 ->with('success', 'Penggajian Berhasil Ditambahkan');
 }

 public function show($Nip)
 {
 //menampilkan detail data dengan menemukan/berdasarkan Nip
 $Mahasiswa = Penggajian::find($Nip);
 return view('penggajian.detail', compact('Penggajian'));
 }

 public function edit($Nip)
 {
 $Penggajian = Penggajian::find($Nip);
 return view('penggajian.edit', compact('Penggajian'));
 }

 public function update(Request $request, $Nip)
 {
//melakukan validasi data
 $request->validate([
 'Nip' => 'required',
 'Nama' => 'required',
 'Alamat' => 'required',
 'Jabatan' => 'required',
 'Gaji pokok' => 'required',
 ]);

Penggajian::find($Nip)->update($request->all());
//jika data berhasil diupdate, akan kembali ke halaman utama
 return redirect()->route('penggajian.index')
 ->with('success', 'Penggajian Berhasil Diupdate');
 }

 public function destroy( $Nip)
 {
//fungsi eloquent untuk menghapus data
Penggajian::find($Nip)->delete();
 return redirect()->route('penggajian.index')
 -> with('success', 'Penggajian Berhasil Dihapus');
 }
};
