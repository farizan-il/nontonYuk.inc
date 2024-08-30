@extends('nontonyuk.layouts.frontend.main')

@section('head')
    <title>{{ $title }}</title>
    <style>
        .featured-artist-area{
            background-image: url(/image/sampul_film/gf-sampul.jpg); 
            background-size: cover; 
            background-repeat: no-repeat; 
            filter: brightness(50%);
        }
    </style>
@endsection

@section('content')
<section class="featured-artist-area section-padding-100 bg-fixed">
    <div class="container">
        <div class="row align-items-end" style="margin-top: 4rem">
            <div class="col-12 col-md-5 col-lg-4">
                <div class="featured-artist-thumb">
                    <img src="{{ asset('image/sampul_film/' . $film->sampulFilm) }}" alt="{{ $film->sampulFilm }}" class="rounded">
                </div>
            </div>
            <div class="col-12 col-md-7 col-lg-8">
                <div class="featured-artist-content">
                    <!-- Section Heading -->
                    <div class="section-heading white text-left mb-30">
                        <h2 style="font-size: 2rem"><strong>{{ $film->judulFilm }}</strong></h2>
                        @foreach ($kategori as $item)
                            @if ($film->daftarFilmId == $item->daftar_film_id)
                                {{-- @if ($item->teater->)
                                    
                                @else
                                    
                                @endif --}}
                                <a href="#" class="mt-3 btn {{$item->teater->bioskop->kategori->warna}} disabled btn-sm">
                                    <strong class="fw-bold">{{ $item->teater->bioskop->kategori->namaKategori }}</strong>
                                </a>
                            @endif
                        @endforeach
                    </div>
                    <p>{{ $film->sinopsis }}</p>
                    <div class="song-play-area rounded">
                        <div class="song-name">
                            <p>Tonton Trailer</p>
                        </div>
                        <div class="d-flex">
                            <audio preload="auto" controls></audio>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
    
@endsection