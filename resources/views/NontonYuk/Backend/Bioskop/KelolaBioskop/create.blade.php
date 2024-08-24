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
            <form class="g-3 mt-3" action="/daftarbioskop" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">

                    {{-- form nama bioskop --}}
                    <div class="form-group mb-3">
                        <label class="col-form-label">Nama Bioskop</label>
                        <input type="text" class="form-control" name="Bioskop" placeholder="Masukan Nama Genre">
                    </div>

                    {{-- selected untuk lokasi --}}
                    <div class="form-group mb-3">
                        <label class="col-form-label">Nama Bioskop</label>
                        <select class="form-control" name="lokasi">
                            @foreach ($lokasi as $item)
                                <option value="{{ $item->lokasiBioskopId }}">{{ $item->kota }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- selected untuk Kategori --}}
                    <div class="form-group mb-3">
                        <label class="col-form-label">Kategori Bioskop</label>
                        <select class="form-control" name="kategori">
                            @foreach ($kategori as $item)
                                <option value="{{ $item->kategoriBioskopId }}">{{ $item->namaKategori }}</option>
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
