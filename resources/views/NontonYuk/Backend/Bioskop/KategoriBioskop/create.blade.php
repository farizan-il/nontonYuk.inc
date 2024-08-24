{{-- Modal menambahkan daftar film --}}
<div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
    <div class="modal-dialog  modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Menambahkan Kategori Bioskop</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="g-3 mt-3" action="/kategoribioskop" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label class="col-form-label">Nama Kategori</label>
                        <input type="text" class="form-control" name="namaKategori" placeholder="Masukan Nama Genre">
                    </div>

                    {{-- form pemilihan warna --}}
                    <div class="form-group">
                        <label class="col-form-label"><strong>Logo Kategori</strong></label>
                        <input type="file" class="form-control" name="logo">
                    </div>

                    {{-- form memilih warna --}}
                    <div class="form-group">
                        <label class="form-label">Warna</label>
                        <div class="row gutters-xs">
                            <div class="col-auto">
                                <label class="colorinput">
                                    <input name="color" type="radio" value="btn-primary" class="colorinput-input" />
                                    <span class="colorinput-color bg-primary"></span>
                                </label>
                            </div>
                            <div class="col-auto">
                                <label class="colorinput">
                                    <input name="color" type="radio" value="btn-secondary" class="colorinput-input" />
                                    <span class="colorinput-color bg-secondary"></span>
                                </label>
                            </div>
                            <div class="col-auto">
                                <label class="colorinput">
                                    <input name="color" type="radio" value="btn-danger" class="colorinput-input" />
                                    <span class="colorinput-color bg-danger"></span>
                                </label>
                            </div>
                            <div class="col-auto">
                                <label class="colorinput">
                                    <input name="color" type="radio" value="btn-warning" class="colorinput-input" />
                                    <span class="colorinput-color bg-warning"></span>
                                </label>
                            </div>
                            <div class="col-auto">
                                <label class="colorinput">
                                    <input name="color" type="radio" value="btn-info" class="colorinput-input" />
                                    <span class="colorinput-color bg-info"></span>
                                </label>
                            </div>
                            <div class="col-auto">
                                <label class="colorinput">
                                    <input name="color" type="radio" value="btn-success" class="colorinput-input" />
                                    <span class="colorinput-color bg-success"></span>
                                </label>
                            </div>
                            <div class="col-auto">
                                <label class="colorinput">
                                    <input name="color" type="radio" value="btn-dark" class="colorinput-input" />
                                    <span class="colorinput-color bg-dark"></span>
                                </label>
                            </div>
                        </div>
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
