<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class WisataController extends Controller
{
    public function index()
    {
        $wisata = Wisata::all();
        return view('wisata.index', compact('wisata'));
    }

    // fungsi untuk menampilkan halaman create
    public function create()
    {
        return view('wisata.create');
    }

    //fungsi untuk menjalankan action store ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'alamat' => 'required|string',
            'tahun' => 'required|numeric|max_digits:4',
            'harga_tiket' => 'required|numeric',
            'deskripsi' => 'required|string',
        ]);

        $data = $request->all();

        $wisata = Wisata::create($data);

        if ($wisata) {
            return Redirect()->to('/');
        } else {
            return back();
        }
    }

    // fungsi untuk menampilkan halaman detail
    public function show($id)
    {
        $wisata = Wisata::find($id);
        return view('wisata.detail', compact('wisata'));
    }

    // fungsi untuk menampilkan halaman edit
    public function edit($id)
    {
        $wisata = Wisata::find($id);
        return view('wisata.edit', compact('wisata'));
    }

    //fungsi untuk menjalankan action update ke database
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'alamat' => 'required|string',
            'tahun' => 'required|numeric|max_digits:4',
            'harga_tiket' => 'required|numeric',
            'deskripsi' => 'required|string'
        ]);

        $data = $request->all();
        $wisata = wisata::find($id);
        $wisata->update($data);

        if ($wisata) {
            return redirect()->to('/')->withSuccess('Data Berhasil Disimpan');
        } else {
            return back()->withInput()->withErrors('Data Berhasil Di Ubah');
        };
    }

    public function destroy($id)
    {
        $wisata = Wisata::find($id);
        $wisata->delete();

        if($wisata){
            return redirect()->to('/')->withSuccess('Data Berhasil Dihapus');
        }else{
            return back()->withErrors('Data Gagal Dihapus');
        }
    }
}
