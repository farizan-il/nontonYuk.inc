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
                                <h4>Tabel Kelola Bioskop</h4>
                                <div class="card-header-form d-flex">
                                    <button class="btn btn-primary mr-3" data-toggle="modal" data-target="#exampleModal">
                                        <i class="fa fa-plus"></i> Tambah Bioskop
                                    </button>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>ID Bisokop</th>
                                            <th>Nama Bioskop</th>
                                            <th>Kategori Bioskop</th>
                                            <th>Lokasi</th>
                                            <th>Action</th>
                                        </tr>

                                        @foreach ($bioskop as $item)
                                            <tr>
                                                <td class="text-nowrap">{{ Str::limit($item->daftarBioskopId, 13, '') }}</td>
                                                <td class="text-nowrap">{{ $item->namaBioskop }}</td>
                                                <td class="text-nowrap">
                                                    <a href="#" class="btn {{ $item->kategori->warna }} btn-sm">
                                                        <strong class="fw-bold">{{ $item->kategori->namaKategori }}</strong>
                                                    </a>
                                                </td>
                                                <td class="text-nowrap">{{ $item->lokasi->kota }}, {{ $item->lokasi->provinsi }}</td>
                                                <td class="text-nowrap">
                                                    <form action="{{ route('daftarbioskop.destroy', $item->daftarBioskopId) }}" method="post">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('ingin menghapus kategori ini ?')">
                                                            <strong>Hapus</strong>
                                                        </button>
                                                    </form>
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

    @include('nontonyuk.backend.bioskop.kelolabioskop.create')
@endsection

@section('script')
@endsection
