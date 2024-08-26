{{-- Modal menambahkan daftar film --}}
<div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
    <div class="modal-dialog  modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Menambahkan Bioskop</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="g-3 mt-3" action="/jadwaltayang" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">

                    {{-- form jam tayang --}}
                    <div class="form-group mb-3">
                        <label class="col-form-label">Jam Tayang</label>
                        <input type="time" class="form-control" name="jamTayang">
                    </div>
                    
                    {{-- form tanggal --}}
                    <div class="form-group mb-3">
                        <label class="col-form-label">Tanggal</label>
                        <input type="date" class="form-control" name="tanggal">
                    </div>

                    {{-- selected untuk film --}}
                    <div class="form-group mb-3">
                        <label class="col-form-label">Nama Film</label>
                        <select class="form-control" name="film">
                            @foreach ($datafilm as $item)
                                <option value="{{ $item->daftarFilmId }}">{{ $item->judulFilm }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- selected untuk Kategori --}}
                    <div class="form-group mb-3">
                        <label class="col-form-label">Nama Bisokop</label>
                        <select class="form-control" name="teater">
                            @foreach ($teater as $item)
                                <option value="{{ $item->daftarTeaterId }}">{{ $item->namaTeater }} ({{ $item->kelas->namaKelas }}) - {{ $item->bioskop->namaBioskop }} - {{ $item->bioskop->lokasi->kota }}</option>
                            @endforeach
                        </select>
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
