@extends('nontonyuk.layouts.backend.main')

@section('head')
@endsection

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Menambahkan Film</h4>
                            </div>
                            <div class="card-body">
                                <form action="/daftarfilm" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    {{-- upload untuk sampul film --}}
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-right col-12 col-md-3 col-lg-3"><strong>Sampul Film</strong></label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="file" class="form-control" name="sampulFilm">
                                        </div>
                                    </div>
                        
                                    {{-- form judul film --}}
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-right col-12 col-md-3 col-lg-3"><strong>Judul Film</strong></label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" class="form-control" name="judulFilm">
                                        </div>
                                    </div>
                        
                                    {{-- selected untuk genre film --}}
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-right col-12 col-md-3 col-lg-3"><strong>Genre Film</strong></label>
                                        <div class="col-sm-12 col-md-7">
                                            <select class="form-control selectric" name="genreFilm">
                                                @foreach ($genre as $item)
                                                    <option value="{{ $item->namaGenre }}">{{ $item->namaGenre }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                        
                                    {{-- text area untuk sinopsis film --}}
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><strong>Sinopsis</strong></label>
                                        <div class="col-sm-12 col-md-7">
                                            <textarea class="summernote-simple" name="sinopsis"></textarea>
                                        </div>
                                    </div>
                        
                                    {{-- form durasi film --}}
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-right col-12 col-md-3 col-lg-3"><strong>Durasi</strong></label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" class="form-control" name="durasi">
                                        </div>
                                    </div>
                        
                                    {{-- form rating film --}}
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-right col-12 col-md-3 col-lg-3"><strong>Rating</strong></label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" class="form-control" name="rating">
                                        </div>
                                    </div>
                        
                                    {{-- form produser film --}}
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-right col-12 col-md-3 col-lg-3"><strong>Produser</strong></label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" class="form-control" name="produser">
                                        </div>
                                    </div>
                        
                                    {{-- form director film --}}
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-right col-12 col-md-3 col-lg-3"><strong>Director</strong></label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" class="form-control" name="director">
                                        </div>
                                    </div>
                        
                                    {{-- form penulis film --}}
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-right col-12 col-md-3 col-lg-3"><strong>Penulis</strong></label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" class="form-control" name="penulis">
                                        </div>
                                    </div>
                        
                                    {{-- form pemeran film --}}
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-right col-12 col-md-3 col-lg-3"><strong>Pemeran</strong></label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" class="form-control" name="pemeran">
                                        </div>
                                    </div>
                        
                                    {{-- form distributor film --}}
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-right col-12 col-md-3 col-lg-3"><strong>Distributor</strong></label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" class="form-control" name="distributor">
                                        </div>
                                    </div>
                        
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"><strong></strong></label>
                                        <div class="col-sm-12 col-md-7">
                                            <button type="submit" class="btn btn-primary">Tambahkan</button>
                                        </div>
                                    </div>
                                </form>
                                
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
