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
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Film  <strong>{{ $detailfilm->judulFilm }}</strong></h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                {{-- form edit data film --}}
                                <div class="col-8">
                                    <form action="{{ route('daftarfilm.update', $detailfilm->daftarFilmId) }}" method="POST" enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                    
                                        {{-- Upload untuk sampul film --}}
                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-right col-12 col-md-3 col-lg-3"><strong>Poster Film</strong></label>
                                            <div class="col-sm-12 col-md-7">
                                                <input type="file" class="form-control" name="sampulFilm">
                                                @if($detailfilm->sampulFilm)
                                                    <small>Poster Sebelumnya: <a href="{{ asset('image/sampul_film/' . $detailfilm->sampulFilm) }}" target="_blank">{{ $detailfilm->sampulFilm }}</a></small>
                                                @endif
                                            </div>
                                        </div>
                                        
                                        {{-- Form judul film --}}
                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-right col-12 col-md-3 col-lg-3"><strong>Judul Film</strong></label>
                                            <div class="col-sm-12 col-md-7">
                                                <input type="text" class="form-control" name="judulFilm" value="{{ old('judulFilm', $detailfilm->judulFilm) }}" required>
                                            </div>
                                        </div>
                                        
                                        {{-- Selected untuk genre film --}}
                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-right col-12 col-md-3 col-lg-3"><strong>Genre Film</strong></label>
                                            <div class="col-sm-12 col-md-7">
                                                <select class="form-control selectric" name="genreFilm">
                                                    @foreach ($genre as $item)
                                                        <option value="{{ $item->namaGenre }}" {{ $item->namaGenre == $detailfilm->genreFilm ? 'selected' : '' }}>
                                                            {{ $item->namaGenre }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        
                                        {{-- Text area untuk sinopsis film --}}
                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><strong>Sinopsis</strong></label>
                                            <div class="col-sm-12 col-md-7">
                                                <textarea class="summernote-simple" name="sinopsis">{{ old('sinopsis', $detailfilm->sinopsis) }}</textarea>
                                            </div>
                                        </div>
                                        
                                        {{-- Form durasi film --}}
                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-right col-12 col-md-3 col-lg-3"><strong>Durasi</strong></label>
                                            <div class="col-sm-12 col-md-7">
                                                <input type="text" class="form-control" name="durasi" value="{{ old('durasi', $detailfilm->durasi) }}" required>
                                            </div>
                                        </div>
                                        
                                        {{-- Form rating film --}}
                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-right col-12 col-md-3 col-lg-3"><strong>Rating</strong></label>
                                            <div class="col-sm-12 col-md-7">
                                                <input type="text" class="form-control" name="rating" value="{{ old('rating', $detailfilm->rating) }}" required>
                                            </div>
                                        </div>
                                        
                                        {{-- Form produser film --}}
                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-right col-12 col-md-3 col-lg-3"><strong>Produser</strong></label>
                                            <div class="col-sm-12 col-md-7">
                                                <input type="text" class="form-control" name="produser" value="{{ old('produser', $detailfilm->produser) }}" required>
                                            </div>
                                        </div>
                                        
                                        {{-- Form director film --}}
                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-right col-12 col-md-3 col-lg-3"><strong>Director</strong></label>
                                            <div class="col-sm-12 col-md-7">
                                                <input type="text" class="form-control" name="director" value="{{ old('director', $detailfilm->director) }}" required>
                                            </div>
                                        </div>
                                        
                                        {{-- Form penulis film --}}
                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-right col-12 col-md-3 col-lg-3"><strong>Penulis</strong></label>
                                            <div class="col-sm-12 col-md-7">
                                                <input type="text" class="form-control" name="penulis" value="{{ old('penulis', $detailfilm->penulis) }}" required>
                                            </div>
                                        </div>
                                        
                                        {{-- Form pemeran film --}}
                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-right col-12 col-md-3 col-lg-3"><strong>Pemeran</strong></label>
                                            <div class="col-sm-12 col-md-7">
                                                <input type="text" class="form-control" name="pemeran" value="{{ old('pemeran', $detailfilm->pemeran) }}" required>
                                            </div>
                                        </div>
                                        
                                        {{-- Form distributor film --}}
                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-right col-12 col-md-3 col-lg-3"><strong>Distributor</strong></label>
                                            <div class="col-sm-12 col-md-7">
                                                <input type="text" class="form-control" name="distributor" value="{{ old('distributor', $detailfilm->distributor) }}" required>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row mb-4">
                                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><strong></strong></label>
                                            <div class="col-sm-12 col-md-7">
                                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                            </div>
                                        </div>
                    
                                    </form>
                                </div>

                                {{-- gambar sampul film --}}
                                <div class="col-3">                                    
                                    <div class="chocolat-parent sticky-image border"> 
                                        <a href="{{ asset('image/sampul_film/' . $detailfilm->sampulFilm) }}" target="_blank">
                                            <div class="image-container ">
                                                <img alt="{{ $detailfilm->sampulFilm }}" src="{{ asset('image/sampul_film/' . $detailfilm->sampulFilm) }}" class="img-fluid">
                                            </div>
                                        </a>
                                    </div>
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