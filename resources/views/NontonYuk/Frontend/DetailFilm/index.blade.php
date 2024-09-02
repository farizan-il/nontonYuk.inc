@extends('nontonyuk.layouts.frontend.main')

@section('head')
    <title>{{ $title }}</title>
    <style>
        .featured-artist-area{
            background-image: url(/image/sampul_film/tm-sampul.png); 
            background-size: cover; 
            background-repeat: no-repeat;
        }
    </style>
@endsection

@section('content')
<section class="featured-artist-area section-padding-100 bg-fixed">
    <div class="container">
        <div class="row align-items-end" style="margin-top: 4rem">
            <div class="col-12 col-md-5 col-lg-3 ">
                <div class="featured-artist-thumb rounded">
                    <img src="{{ asset('image/sampul_film/' . $film->sampulFilm) }}" alt="{{ $film->sampulFilm }}" class="rounded">
                </div>
            </div>
            <div class="col-12 col-md-7 col-lg-9">
                <div class="featured-artist-content">
                    <!-- Section Heading -->
                    <div class="section-heading white text-left mb-4">
                        <h2 class="mb-2" style="font-size: 2rem"><strong>{{ $film->judulFilm }}</strong></h2>
                        @foreach ($kategori as $item)
                            @if ($film->daftarFilmId == $item->daftar_film_id)
                                {{-- @if ($item->teater->)
                                    
                                @else
                                    
                                @endif --}}
                                <a href="#" class="{{ $item->teater->bioskop->kategori->warna }} mr-2 p-1 rounded" style="font-size: 0.8rem">
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

{{-- buy ticket --}}
<section class="oneMusic-buy-now-area has-fluid p-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="load-more-btn text-center wow fadeInUp " data-wow-delay="300ms">
                    <a href="{{ route('payment.show' , $film->daftarFilmId) }}" class="btn oneMusic-btn rounded">Beli Tiket <i class="fa fa-angle-double-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- trailer dan video --}}
<section class="latest-albums-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading style-2">
                    <h2>Video dan Trailer Film</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="albums-slideshow2 owl-carousel">
                    <div class="single-album p-2 rounded">
                        <img class="rounded" src="{{ asset('image/sampul_film/trailer.jpg') }}" 
                            alt="" 
                            style="width: 340px; object-fit: cover;">
                        <div class="album-info">
                            <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h5>
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