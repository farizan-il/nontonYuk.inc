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
                                <h4>Tabel Jadwal Tayang</h4>
                                <div class="card-header-form d-flex">
                                    <div class="card-header-form d-flex">
                                        <button class="btn btn-outline-primary mr-2" data-toggle="modal" data-target="#exampleModal">
                                            Tambah Jadwal Tayang
                                        </button>
                                    </div>

                                    {{-- Pencarian dan Filter --}}
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#searchModal">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>Judul Film</th>
                                            <th>Jam Tayang</th>
                                            <th>Tanggal Tayang</th>
                                            <th>Nama Bioskop</th>
                                            <th>Nama Teater</th>
                                            <th>Lokasi</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($jadwaltayang as $item)
                                        <tr>
                                            <td class="text-nowrap">{{ $item->film->judulFilm }}</td>
                                            <td class="text-nowrap">
                                                <a href="#" class="btn btn-outline-secondary btn-sm  fw-bold">
                                                    <strong>{{ $item->jamTayang }}</strong>
                                                </a>
                                            </td>
                                            <td class="text-nowrap">{{ \Carbon\Carbon::parse($item->tanggal)->format('d-m-Y') }}</td>
                                            <td class="text-nowrap">{{ $item->teater->bioskop->namaBioskop }}</td>
                                            <td class="text-nowrap">{{ $item->teater->namaTeater }}</td>
                                            <td class="text-nowrap">{{ $item->teater->bioskop->lokasi->kota }}</td>
                                            <td class="text-nowrap sticky-cell">
                                                <a href="{{ route('jadwaltayang.show', $item->jadwalTayangId) }}" class="btn btn-primary">
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
    {{-- Modal untuk Pencarian --}}
    <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="searchModalLabel">Filter Pencarian</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="GET" action="{{ route('jadwaltayang.index') }}">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" id="search" name="search" placeholder="Contoh pencarian detail [film, nama bioskop, lokasi]">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('nontonyuk.backend.jadwaltayang.create')
@endsection

@section('script')

@endsection
