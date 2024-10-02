{{-- pemanggilan kerangka html dari halaman main.main.blade.php --}}
@extends('main.main')
@section('title', 'Create Wisata')
@section('content')
    <main>
        <div class="container mt-3">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        Wisata
                    </h4>
                </div>
                <div class="card-body">
                    <form action="/store" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama"
                                placeholder="Masukan Nama Wisata" />
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat"
                                placeholder="Masukan alamat Wisata" />
                        </div>
                        <div class="mb-3">
                            <label for="tahun" class="form-label">tahun</label>
                            <input type="number" class="form-control" name="tahun" id="tahun" min="1945"
                                max="2500" placeholder="Masukan tahun Wisata di Dirikan" />
                        </div>
                        <div class="mb-3">
                            <label for="harga_tiket" class="form-label">Harga Tiket</label>
                            <input type="number" class="form-control" name="harga_tiket" id="harga_tiket"
                                placeholder="Masukan Harga Tiket Wisata" />
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" id="deskripsi" rows="7"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" value="Submit">
                            Buat
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </main>

@endsection

