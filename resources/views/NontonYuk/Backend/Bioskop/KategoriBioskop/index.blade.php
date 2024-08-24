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
                                <h4>Tabel Kelola Genre Film</h4>
                                <div class="card-header-form d-flex">
                                    <button class="btn btn-primary mr-3" data-toggle="modal" data-target="#exampleModal">
                                        <i class="fa fa-plus"></i> Kategori Bioskop
                                    </button>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama Kategori Bioskop</th>
                                            <th>Logo</th>
                                            <th>Action</th>
                                        </tr>

                                        @foreach ($kategoribioskop as $item)
                                            <tr>
                                                <td class="text-nowrap">{{ Str::limit($item->kategoriBioskopId, 13, '') }}</td>
                                                <td class="text-nowrap">
                                                    <a href="#" class="btn {{ $item->warna }} btn-sm">
                                                        <strong class="fw-bold">{{ $item->namaKategori }}</strong>
                                                    </a>
                                                </td>
                                                <td class="text-nowrap">
                                                    <a href="{{ asset('image/logo_bioskop/' . $item->logo) }}" target="_blank" class=" fw-bold">
                                                        <i class='bx bx-link bx-tada bx-rotate-90' ></i>
                                                        <strong>Lihat logo</strong>
                                                    </a>
                                                </td>
                                                <td class="text-nowrap">
                                                    <form action="{{ route('kategoribioskop.destroy', $item->kategoriBioskopId) }}" method="post">
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

    @include('nontonyuk.backend.bioskop.kategoribioskop.create')
@endsection

@section('script')
@endsection
