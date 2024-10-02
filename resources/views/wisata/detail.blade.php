{{-- pemanggilan kerangka html dari halaman main.main.blade.php --}}
@extends('main.main')
@section('title', 'Detail Wisata')
@section('content')
    <main>
        <div class="container mt-3">
            <div class="card">
                <div class="card-header d-flex">
                    <h4 class="card-title">
                        Wisata
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table bg-secodary">
                        <tbody>
                            <tr>
                                <th class="w-25">Nama</th>
                                <td>{{ $wisata->nama }}</td>
                            </tr>
                            <tr>
                                <th class="w-25">Alamat</th>
                                <td>{{ $wisata->alamat }}</td>
                            </tr>
                            <tr>
                                <th class="w-25">Tahun</th>
                                <td>{{ $wisata->tahun }}</td>
                            </tr>
                            <tr>
                                <th class="w-25">Harga Tiket</th>
                                <td>{{ $wisata->harga_tiket }}</td>
                            </tr>
                            <tr>
                                <th class="w-25">Deskirpsi</th>
                                <td>{{ $wisata->deskripsi }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

@endsection
