{{-- Modal menambahkan daftar film --}}
<div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
    <div class="modal-dialog  modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Menambahkan Genre Film</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="g-3 mt-3" action="/kategorifilm" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Genre</label>
                        <input type="text" class="form-control" name="genre" placeholder="Masukan Nama Genre">
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