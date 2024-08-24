@extends('nontonyuk.layouts.backend.main')

@section('head')
    <title>{{ $title }}</title>

    <style>
        .sticky-action {
            position: -webkit-sticky; /* Untuk browser Webkit */
            position: sticky;
            right: 0; /* Posisi dari tepi kanan */
            background-color: white; /* Background untuk memastikan visibilitas */
            z-index: 1; /* Pastikan berada di atas elemen lain */
        }

        /* CSS untuk memastikan tombol Detail juga sticky */
        .sticky-cell {
            position: -webkit-sticky; /* Untuk browser Webkit */
            position: sticky;
            right: 0; /* Posisi dari tepi kanan */
            background-color: white; /* Background untuk memastikan visibilitas */
            z-index: 1; /* Pastikan berada di atas elemen lain */
        }
    </style>
@endsection

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card shadow">
                            <div class="card-header">
                                <h4>Tabel Kelola Film</h4>
                                <div class="card-header-form d-flex">
                                    <div data-toggle="tooltip" data-placement="left" title="" data-original-title="Menambahkan Film">
                                        <a class="btn btn-primary mr-3" href="/daftarfilm/create">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                    <form>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search">
                                            <div class="input-group-btn">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup"
                                                        data-checkbox-role="dad" class="custom-control-input"
                                                        id="checkbox-all">
                                                    <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </th>
                                            <th>Judul Film</th>
                                            <th>Rating</th>
                                            <th>Genre</th>
                                            <th>Produser</th>
                                            <th>Director</th>
                                            <th>Penulis</th>
                                            <th>Pemeran</th>
                                            <th>Distributor</th>
                                            <th class="sticky-cell">Action</th>
                                        </tr>
                                        @foreach ($daftarfilm as $item)
                                        <tr>
                                            <td class="p-0 text-center">
                                                <div class="custom-checkbox custom-control">
                                                    <input type="checkbox" data-checkboxes="mygroup"
                                                        class="custom-control-input" id="checkbox-1">
                                                    <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                                </div>
                                            </td>
                                            <td class="text-nowrap">{{ $item->judulFilm }}</td>
                                            {{-- <td class="text-nowrap">{{ Str::limit($item->sinopsis, 10, '') }}..</td> --}}
                                            <td class="text-nowrap">
                                                <div class="badge badge-secondary">
                                                    <strong>{{ $item->rating }}</strong>
                                                </div>
                                            </td>
                                            <td class="text-nowrap">
                                                <a href="" class="btn btn-outline-secondary btn-sm disabled fw-bold">
                                                    <strong>{{ $item->genre }}</strong>
                                                </a>
                                            </td>
                                            <td class="text-nowrap">{{ $item->produser }}</td>
                                            <td class="text-nowrap">{{ $item->director }}</td>
                                            <td class="text-nowrap">{{ $item->penulis }}</td>
                                            
                                            <td class="text-nowrap">{{ $item->pemeran }}</td>
                                            <td class="text-nowrap">{{ $item->distributor }}</td>
                                            <td class="text-nowrap sticky-cell">
                                                <a href="{{ route('daftarfilm.show', $item->daftarFilmId) }}" class="btn btn-primary">
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

    {{-- Modal menambahkan daftar film --}}
    <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
