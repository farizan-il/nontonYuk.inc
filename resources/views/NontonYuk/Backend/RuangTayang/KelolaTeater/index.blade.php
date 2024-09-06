@extends('nontonyuk.layouts.backend.main')

@section('head')
    <title>{{ $title }}</title>
@endsection

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card shadow">
                            <div class="card-header">
                                <h4>Tabel KelolaTeater</h4>
                                <div class="card-header-form d-flex">
                                    <button class="btn btn-primary mr-3" data-toggle="modal" data-target="#exampleModal">
                                        <i class="fa fa-plus"></i> Tambah Teater
                                    </button>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama Teater</th>
                                            <th>Kelas Teater</th>
                                            <th>Harga</th>
                                            <th>Nama Bioskop</th>
                                            <th>Kategori Bioskop</th>
                                            <th>Lokasi</th>
                                            <th>Action</th>
                                        </tr>

                                        @foreach ($dataTeater as $item)
                                            <tr>
                                                <td class="text-nowrap">{{ Str::limit($item->daftarTeaterId, 8, '') }}</td>
                                                <td class="text-nowrap text-dark"><strong>{{ $item->namaTeater }}</strong></td>
                                                <td class="text-nowrap">
                                                    <a href="#" class="btn btn-outline-secondary btn-sm fw-bold">
                                                        <strong>{{ $item->kelas->namaKelas }}</strong>
                                                    </a>
                                                </td>
                                                <td class="text-nowrap">Rp {{ number_format($item->kelas->harga, 2, ',', '.') }}</td>
                                                <td class="text-nowrap">{{ $item->bioskop->namaBioskop }}</td>
                                                <td class="text-nowrap">
                                                    <a href="#" class="{{ $item->bioskop->kategori->warna }} mr-2 p-1 rounded text-white">
                                                        <strong class="fw-bold">{{ $item->bioskop->kategori->namaKategori }}</strong>
                                                    </a>
                                                </td>
                                                <td class="text-nowrap">{{ $item->bioskop->lokasi->kota }}, {{ $item->bioskop->lokasi->provinsi }}</td>
                                                <td class="text-nowrap">
                                                    <a href="{{ route('kelolateater.show', $item->daftarTeaterId) }}" class="btn btn-outline-primary btn-sm" >
                                                        <strong>Detail</strong>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @include('nontonyuk.backend.ruangtayang.kelolateater.create')
@endsection

@section('script')
@endsection
