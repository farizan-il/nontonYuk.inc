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
                                                    <div class="badge badge-light">
                                                        <strong>{{ $item->namaGenre }}</strong>
                                                    </div>
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

    {{-- Modal menambahkan daftar film --}}
    <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Menambahkan Genre Film</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="g-3 mt-3" action="/kategorifilm" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama Genre</label>
                            <input type="text" class="form-control" name="genre" placeholder="Masukan Nama Genre">
                          </div>
                    </div>
                    <div class="modal-footer bg-whitesmoke br">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
