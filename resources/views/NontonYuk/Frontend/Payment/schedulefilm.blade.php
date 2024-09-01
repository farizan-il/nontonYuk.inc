@extends('nontonyuk.layouts.frontend.main')

@section('head')
    <title>{{ $title }}</title>
@endsection

@section('color')
    bg-dark
@endsection

@section('content')
    <section class="featured-artist-area section-padding-100 bg-fixed" style="">
        <div class="container">
            <div class="row align-items-end" style="margin-top: 4rem">
                <div class="col-12 col-md-5 col-lg-3 ">
                    <div class="featured-artist-thumb rounded">
                        <img src="{{ asset('image/sampul_film/' . $schedulefilm->sampulFilm) }}" alt="{{ $schedulefilm->sampulFilm }}" class="rounded">
                    </div>
                </div>
                <div class="col-12 col-md-7 col-lg-9">
                    <div class="featured-artist-content">
                        <!-- Section Heading -->
                        <div class="section-heading dark text-left mb-4">
                            <h2 class="mb-2" style="font-size: 2rem"><strong>{{ $schedulefilm->judulFilm }}</strong></h2>
                            @php
                                $genres = explode(',', $schedulefilm->genre);
                                $genres = array_map('trim', $genres);
                            @endphp
                            @foreach($genres as $genre)
                                <h2 class="mr-2 p-1 border border-dark rounded" style="font-size: 0.8rem; display: inline-block; letter-spacing: 0.2rem">
                                    <strong class="fw-bold text-dark">{{ $genre }}</strong>
                                </h2>
                            @endforeach

                            <h2 class="text-dark text-lowercase mt-4" style="letter-spacing: 0.1rem; font-size: 1rem">{{ $schedulefilm->sinopsis }}</h2>
                        </div>
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
    <hr>

    <section class="featured-artist-area py-4 mt-0 bg-fixed">
        <div class="container">
            <div class="row align-items-end" style="margin-top: 2rem">
                <div class="col-12">
                    <div class="featured-artist-content">
                        <!-- Section Heading -->
                        <div class="section-heading dark text-left mb-4">
                            <h2 class="mb-2" style="font-size: 2rem"><strong>JADWAL TAYANG</strong></h2>
                            @foreach ($jadwal as $item)
                                @if ($item->daftar_film_id == $schedulefilm->daftarFilmId)
                                    <a href="#" class="border border-secondary mr-3 p-1 rounded" style="font-size: 1rem">
                                        <strong
                                            class="fw-bold">{{ \Carbon\Carbon::parse($item->tanggal)->format('d M') }}</strong>
                                    </a>
                                @endif
                            @endforeach
                        </div>
                        <hr>
                        <div class="col-12 p-0">
                            <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="false">
                                @foreach ($jadwal as $index => $item)    
                                    <!-- single accordion area -->
                                    <div class="panel single-accordion border">
                                        <h6>
                                            <a role="button" class="rounded collapsed" aria-expanded="false" aria-controls="collapse{{ $index }}"
                                                data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $index }}" style="font-size: 1.3rem">
                                                {{ $item->teater->bioskop->namaBioskop }}
                                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                            </a>
                                        </h6>
                                        <div id="collapse{{ $index }}" class="accordion-content collapse p-4">
                                            <p class="mb-2 text-dark p-0 text-uppercase" style="font-size: 1rem"><strong>{{ $item->teater->namaTeater }} &bull; {{ $item->teater->kelas->namaKelas }} &bull; {{ number_format($item->teater->kelas->harga,0, ',', '.') }}</strong></p>
                                            <a href="{{ route('payment.pilihkursi' , $item->jadwalTayangId) }}" class="border border-dark mr-2 p-1 rounded" style="font-size: 1rem">
                                                <strong
                                                    class="fw-bold">{{ $item->jamTayang }}
                                                </strong>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>                     
                    </div>
                </div>
            </div>
        </div>
    </section>

@section('script')
@endsection
