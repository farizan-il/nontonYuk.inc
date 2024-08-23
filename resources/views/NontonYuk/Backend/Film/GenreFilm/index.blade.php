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
                                        <i class="fa fa-plus"></i> Tambahkan Genre
                                    </button>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>ID Genre</th>
                                            <th>Nama Genre</th>
                                            <th>Action</th>
                                        </tr>

                                        @foreach ($genre as $item)
                                            <tr>

                                                <td class="text-nowrap">{{ Str::limit($item->genreFilmId, 13, '') }}</td>
                                                <td class="text-nowrap">
                                                    <a href="" class="btn btn-outline-secondary btn-sm disabled fw-bold">
                                                        <strong>{{ $item->namaGenre }}</strong>
                                                    </a>
                                                </td>
                                                <td class="text-nowrap">
                                                    <form action="{{ route('kategorifilm.destroy', $item->genreFilmId) }}" method="post">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('ingin menghapus kategori ini ?')">
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

    @include('nontonyuk.backend.film.genrefilm.index')
@endsection

@section('script')
@endsection
