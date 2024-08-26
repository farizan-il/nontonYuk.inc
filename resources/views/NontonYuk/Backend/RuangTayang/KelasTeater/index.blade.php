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
                                <h4>Tabel Kelola kelas Teater</h4>
                                <div class="card-header-form d-flex">
                                    <button class="btn btn-primary mr-3" data-toggle="modal" data-target="#exampleModal">
                                        <i class="fa fa-plus"></i> Kelas Teater
                                    </button>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama Kelas</th>
                                            <th>Harga</th>
                                            <th>Action</th>
                                        </tr>

                                        @foreach ($kelasTeater as $item)
                                            <tr>
                                                <td class="text-nowrap">{{ Str::limit($item->kelasTeaterId, 8, '') }}</td>
                                                <td class="text-nowrap text-dark"><strong>{{ $item->namaKelas }}</strong></td>
                                                <td class="text-nowrap">Rp {{ number_format($item->harga, 2, ',', '.') }}</td>
                                                <td class="text-nowrap">
                                                    <form action="{{ route('daftarbioskop.destroy', $item->kelasTeaterId) }}" method="post">
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

    @include('nontonyuk.backend.ruangtayang.kelasteater..create')
@endsection

@section('script')
@endsection
