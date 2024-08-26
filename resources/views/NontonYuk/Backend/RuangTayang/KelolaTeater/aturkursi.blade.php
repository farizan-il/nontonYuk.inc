@extends('nontonyuk.layouts.backend.main')

@section('head')
    <title>{{ $title }}</title>
    <style>
        /* Screen */
        .screen {
            text-align: center;
            font-weight: bold;
            background-color: #ccc;
            padding: 10px;
            border-radius: 5px;
        }

        /* Seat Layout */
        .seat-layout {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .row-labels {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 10px;
            font-weight: bold;
        }

        /* Seat Row */
        .seat-row {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 10px;
        }

        /* Seat */
        .seat {
            position: relative;
            width: 40px;
            height: 40px;
            border-radius: 10px;
            background-color: #eee;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            border: 1px solid #ddd;
        }

        /* Seat Number */
        .seat::before {
            content: attr(data-seat);
            position: absolute;
            top: 5px;
            left: 5px;
            font-size: 12px;
            font-weight: normal;
            color: #555;
        }

        /* Hover Effect */
        .seat:hover::before {
            content: attr(data-seat);
            color: #000;
        }

        /* Hover Effect on Seat */
        .seat:hover {
            background-color: #a0d1ff;
            border-color: #007bff;
        }

        .seat-layout {
            overflow-x: auto;
            white-space: nowrap;
            max-width: 100%;
        }

    </style>
@endsection

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card ">
                            <div class="card-header">
                                <h4>Detail <strong>{{ $detail->namaTeater }}</strong></h4>
                                
                                <div class="card-header-action">
                                    <div class="row d-flex">
                                        <a href="{{ route('kelolateater.aturkursi', $detail->daftarTeaterId ) }}" class="btn btn-primary mr-3">
                                            <strong>Atur Kursi</strong>
                                        </a>

                                        <a href="{{ route('kelolateater.edit', $detail->daftarTeaterId) }}" class="btn btn-outline-warning mr-3">
                                            <strong>Edit</strong>
                                        </a>

                                        <form action="{{ route('kelolateater.destroy', $detail->daftarTeaterId) }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button href="#" class="btn btn-outline-danger" onclick="return confirm('ingin menghapus kategori ini ?')">Hapus</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="mb-2 text-muted mr-4">Tata letak kursi di {{ $detail->namaTeater }}</div>
                                <div class="row">
                                    <div class="col-8">
                                        <!-- Screen -->
                                        <div class="screen mb-5"><strong>LAYAR BIOSKOP</strong></div>
                            
                                        <!-- Seat Layout yang terbentuk dari inputan di form -->
                                        <div class="seat-layout" id="seatLayout"></div>
                                    </div>

                                    {{-- detail teater --}}
                                    <div class="col-4">
                                        <p><strong>Nama :</strong> {{ $detail->namaTeater }}</p>
                                        <p><strong>Kelas :</strong> 
                                            <a href="" class="btn btn-outline-secondary btn-sm disabled fw-bold">
                                                <strong>{{ $detail->kelas->namaKelas }}</strong>
                                            </a>
                                        </p>
                                        <p><strong>Nama Bioskop :</strong> {{ $detail->bioskop->namaBioskop }}</p>
                                        <p><strong>Lokasi :</strong> {{ $detail->bioskop->lokasi->kota }}, {{ $detail->bioskop->lokasi->provinsi }}</p>

                                        <hr>

                                        {{-- Atur kolom kursi --}}
                                        <div class="form-group row mb-4">
                                            <label class="col-form-label col-11"><strong>Kolom Kursi</strong></label>
                                            <input type="text" class="form-control col-10 ml-3" id="columns" name="Kolom" placeholder="Cukup gunakan 1 Koma [ABCD..]">
                                            
                                        </div>

                                        {{-- Atur number kursi --}}
                                        <div class="form-group row mb-4">
                                            <label class="col-form-label col-11"><strong>Number Kursi</strong></label>
                                            <input type="text" class="form-control col-10 ml-3" id="numbers" name="Kolom" placeholder="Gunakan koma 2x untuk jarak [1,2,,3,4,..]">
                                        </div>

                                        <button class="btn btn-sm btn-dark" onclick="generateSeatLayout()">Atur Tata Letak</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
  
@endsection

@section('script')
<script>
    function generateSeatLayout() {
        const columns = document.getElementById('columns').value.replace(/\s+/g, '').split(',');
        const numbers = document.getElementById('numbers').value.replace(/\s+/g, '').split(',');

        const seatLayout = document.getElementById('seatLayout');
        seatLayout.innerHTML = ''; // Clear previous layout

        columns.forEach(column => {
            const row = document.createElement('div');
            row.classList.add('seat-row');

            const columnDiv = document.createElement('div');
            columnDiv.classList.add('m-2', 'kolom-seat');
            columnDiv.innerText = column;
            row.appendChild(columnDiv);

            numbers.forEach(number => {
                if (number === '') {
                    const spacer = document.createElement('div');
                    spacer.classList.add('m-2');
                    row.appendChild(spacer);
                } else {
                    const seat = document.createElement('div');
                    seat.classList.add('seat');
                    seat.innerText = column + number;
                    row.appendChild(seat);
                }
            });

            seatLayout.appendChild(row);
        });

        // Generate Row Labels
        const labels = document.createElement('div');
        labels.classList.add('d-flex', 'justify-content-center', 'mb-2');
        labels.innerHTML = '<div class="seat-label m-4"></div>'; // Spacer for the row label

        numbers.forEach(number => {
            if (number === '') {
                const spacer = document.createElement('div');
                spacer.classList.add('seat-label', 'm-3');
                labels.appendChild(spacer);
            } else {
                const label = document.createElement('div');
                label.classList.add('seat-label', 'm-4', 'numberSeat');
                label.innerText = number;
                labels.appendChild(label);
            }
        });

        seatLayout.appendChild(labels);
    }
</script>
@endsection