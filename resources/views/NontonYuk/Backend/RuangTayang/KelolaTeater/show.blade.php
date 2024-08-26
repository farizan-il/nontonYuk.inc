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
                                <div class="mb-2 text-muted">Tata letak kursi di {{ $detail->namaTeater }}</div>
                                <div class="row">
                                    <div class="col-8">
                                        <!-- Screen -->
                                        <div class="screen mb-5"><strong>LAYAR BIOSKOP</strong></div>
                            
                                        <!-- Seat Layout -->
                                        <div class="seat-layout">
                                            <!-- Seats -->
                                            <div class="seats">
                                                <!-- Row 1 -->
                                                <div class="seat-row">
                                                    <div class="m-2 kolom-seat">A</div>
                                                    <div class="seat">A1</div>
                                                    <div class="seat">A2</div>
                                                    <div class="seat">A3</div>
                                                    <div class="seat">A4</div>
                                                    <div class="m-2"></div>
                                                    <div class="seat">A5</div>
                                                    <div class="seat">A6</div>
                                                    <div class="seat">A7</div>
                                                    <div class="seat">A8</div>
                                                </div>
                                                <!-- Row 2 -->
                                                <div class="seat-row">
                                                    <div class="m-2 kolom-seat">B</div>
                                                    <div class="seat">B1</div>
                                                    <div class="seat">B2</div>
                                                    <div class="seat">B3</div>
                                                    <div class="seat">B4</div>
                                                    <div class="m-2"></div>
                                                    <div class="seat">B5</div>
                                                    <div class="seat">B6</div>
                                                    <div class="seat">B7</div>
                                                    <div class="seat">B8</div>
                                                </div>
                                                <!-- Row 3 -->
                                                <div class="seat-row">
                                                    <div class="m-2 kolom-seat">C</div>
                                                    <div class="seat">C1</div>
                                                    <div class="seat">C2</div>
                                                    <div class="seat">C3</div>
                                                    <div class="seat">C4</div>
                                                    <div class="m-2"></div>
                                                    <div class="seat">C5</div>
                                                    <div class="seat">C6</div>
                                                    <div class="seat">C7</div>
                                                    <div class="seat">C8</div>
                                                </div>
                                                <!-- Row 4 -->
                                                <div class="seat-row">
                                                    <div class="m-2 kolom-seat">D</div>
                                                    <div class="seat">D1</div>
                                                    <div class="seat">D2</div>
                                                    <div class="seat">D3</div>
                                                    <div class="seat">D4</div>
                                                    <div class="m-2"></div>
                                                    <div class="seat">D5</div>
                                                    <div class="seat">D6</div>
                                                    <div class="seat">D7</div>
                                                    <div class="seat">D8</div>
                                                </div>
                                            </div>

                                            <!-- Row Labels -->
                                            <div class="d-flex justify-content-center mb-2">
                                                <div class="seat-label m-4"></div>
                                                <div class="seat-label m-4 numberSeat">1</div>
                                                <div class="seat-label m-4 numberSeat">2</div>
                                                <div class="seat-label m-4 numberSeat">3</div>
                                                <div class="seat-label m-4 numberSeat">4</div>
                                                <div class="seat-label m-3"></div>
                                                <div class="seat-label m-4 numberSeat">5</div>
                                                <div class="seat-label m-4 numberSeat">6</div>
                                                <div class="seat-label m-4 numberSeat">7</div>
                                                <div class="seat-label m-4 numberSeat">8</div>
                                            </div>
                                        </div>
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
    
@endsection