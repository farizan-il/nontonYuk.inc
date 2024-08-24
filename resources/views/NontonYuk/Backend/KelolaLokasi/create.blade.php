{{-- Modal menambahkan daftar film --}}
<div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
    <div class="modal-dialog  modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Menambahkan Lokasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="g-3 mt-3" action="/kelolalokasi" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">

                    <div class="form-group mb-3">
                        <label class="col-form-label">Provinsi</label>
                        <input type="text" class="form-control" name="provinsi" placeholder="Masukan Provinsi">
                    </div>
                    
                    <div class="form-group mb-3">
                        <label class="col-form-label">Kota</label>
                        <input type="text" class="form-control" name="kota" placeholder="Masukan Kota">
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
