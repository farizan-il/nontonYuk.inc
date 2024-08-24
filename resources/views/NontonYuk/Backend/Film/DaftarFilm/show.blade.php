@extends('nontonyuk.layouts.backend.main')

@section('head')
    <title>{{ $title }}</title>

    <style>
        .sticky-image {
            position: -webkit-sticky; /* Untuk Safari */
            position: sticky;
            top: 50px; /* Atur jarak dari atas jika diperlukan */
            z-index: 1000; /* Pastikan gambar tetap berada di atas elemen lain */
        }

    </style>
@endsection

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card ">
                        <div class="card-header">
                            <h4>Detail Film: <strong>{{ $detailfilm->judulFilm }}</strong></h4>
                            
                            <div class="card-header-action">
                                <div class="row d-flex">
                                    <a href="{{ route('daftarfilm.edit', $detailfilm->daftarFilmId) }}" class="btn btn-warning mr-3">
                                        <strong>Edit</strong>
                                    </a>
                                    
                                    <form action="{{ route('daftarfilm.destroy', $detailfilm->daftarFilmId) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button href="#" class="btn btn-danger" onclick="return confirm('ingin menghapus kategori ini ?')">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="mb-2 text-muted">Klik gambar di bawah untuk melihat lebih jelas!</div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="chocolat-parent sticky-image border">
                                        <a href="{{ asset('image/sampul_film/' . $detailfilm->sampulFilm) }}" >
                                            <div class="image-container">
                                                <img alt="{{ $detailfilm->sampulFilm }}" src="{{ asset('image/sampul_film/' . $detailfilm->sampulFilm) }}" class="img-fluid">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <p><strong>judul Film:</strong> {{ $detailfilm->judulFilm }}</p>
                                    <p><strong>Genre:</strong> 
                                        <a href="" class="btn btn-outline-secondary btn-sm disabled fw-bold">
                                            <strong>{{ $detailfilm->genre }}</strong>
                                        </a>
                                    </p>
                                    <p><strong>sinopsis:</strong> {{ $detailfilm->sinopsis }}</p>
                                    <p><strong>durasi :</strong> {{ $detailfilm->durasi }}</p>
                                    <p><strong>Rating:</strong> 
                                        <a href="" class="btn btn-dark btn-sm disabled fw-bold">
                                            <strong>{{ $detailfilm->rating }}</strong>
                                        </a>
                                    </p>
                                    <p><strong>Produser:</strong> {{ $detailfilm->produser }}</p>
                                    <p><strong>Director:</strong> {{ $detailfilm->director }}</p>
                                    <p><strong>Penulis:</strong> {{ $detailfilm->penulis }}</p>
                                    <p><strong>Pemeran:</strong> {{ $detailfilm->pemeran }}</p>
                                    <p><strong>Distributor:</strong> {{ $detailfilm->distributor }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection

@section('script')

@endsection