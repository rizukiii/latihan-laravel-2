{{-- pemanggilan kerangka html dari halaman main.main.blade.php --}}
@extends('main.main')
{{-- section adalah suatu hal yang sama sepeti include, dan dia punya cara pemanggil yaitu yeild--}}
@section('title', 'Home Wisata')
{{-- section content adalah sebuah content pada section ini --}}
@section('content')
    <main>
        <div class="container mt-3">
            <div class="card">
                <div class="card-header d-flex">
                    <h4 class="card-title">
                        Wisata
                    </h4>
                    <a href="/create" class="btn btn-primary ms-auto">+ Tambah Data</a>
                </div>
                <div class="card-body">
                    <table class="table bg-secodary">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Tahun</th>
                                <th>Harga Tiket</th>
                                <th>Deskripsi</th>
                                <th>Pengaturan</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- forelse biasanya digunakan untuk menampilkan data lebih berguna soalnya ada empty.. --}}
                            {{-- pemanggilannya seperti ini mengunakan as --}}
                            @forelse ($wisata as $item)
                                <tr>
                                    {{-- loop adalah variable perulangan yang sudah disediakan oleh laravel, dia bersifat angka 1 sampai seterusnya dan sudah pasti urut menggunakan iteration--}}
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>{{ $item->tahun }}</td>
                                    <td>{{ $item->harga_tiket }}</td>
                                    {{-- ini adalah contoh substr limt  --}}
                                    <td>{{ Str::limit($item->deskripsi, 50, '...') }}</td>
                                    <td>
                                        {{-- ini adalah aksi aksi yang dibutukan untuk operasional --}}
                                        <a href="/show/{{ $item->id }}" class="btn btn-info text-light">Detail</a>
                                        <a href="/edit/{{ $item->id }}" class="btn btn-warning text-light">Edit</a>
                                        <a href="/delete/{{ $item->id }}" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')">Delete</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    {{-- ini adalah memunculkan data tidak ada jika di data base tidak ada datanya --}}
                                    {{-- colspan adalah banyaknya col pada tabel --}}
                                    <td colspan="7" class="text-center">
                                        <span class="text-secondary">Data Tidak Ada</span>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

@endsection
