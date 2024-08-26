{{-- Modal menambahkan daftar film --}}
<div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
    <div class="modal-dialog  modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Menambahkan Teater</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="g-3 mt-3" action="/kelolateater" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label class="col-form-label">Nama Teater</label>
                        <input type="text" class="form-control" name="namaTeater" placeholder="Masukan Nama Teater">
                    </div>

                    {{-- selected untuk kelas teater --}}
                    <div class="form-group mb-3">
                        <label class="col-form-label">Kelas Teater</label>
                        <select class="form-control" name="kelasteater">
                            @foreach ($kelasteater as $item)
                                <option value="{{ $item->kelasTeaterId }}">{{ $item->namaKelas }} - Rp{{ number_format($item->harga, 0, ',', '.') }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- selected untuk bioskop --}}
                    <div class="form-group mb-3">
                        <label class="col-form-label">Nama Bioskop</label>
                        <select class="form-control" name="daftarbioskop">
                            @foreach ($bioskop as $item)
                                <option value="{{ $item->daftarBioskopId }}">{{ $item->namaBioskop }}</option>
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
