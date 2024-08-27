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
                                        @if ($kursi->isEmpty())
                                            <a href="{{ route('kelolateater.aturkursi', $detail->daftarTeaterId ) }}" class="btn btn-primary mr-3">
                                                <strong>Tambahkan Kursi</strong>
                                            </a>
                                        @else
                                            <a href="{{ route('kelolateater.aturkursi', $detail->daftarTeaterId ) }}" class="btn btn-outline-primary mr-3">
                                                <strong>Edit Kursi</strong>
                                            </a>
                                        @endif

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
                                        <div class="seat-layout" id="seatLayout">
                                            
                                            @if ($kursi->isEmpty())
                                                <div class="seats">
                                                    <div>Kursi tidak tersedia, silahkan tambahkan kursi terlebih dahulu</div>
                                                </div>
                                            @else
                                                <!-- Seats -->
                                                <div class="seats">
                                                    @foreach ($kursi->groupBy('kolom.kolom') as $kolom => $kursiList)
                                                        <div class="seat-row">
                                                            <div class="m-2 kolom-seat">{{ $kolom }}</div>
                                                            @foreach ($kursiList as $kursiItem)
                                                                @if($kursiItem->seat == 'gap')
                                                                    <div class="m-2"></div>
                                                                @else
                                                                    <div class="seat">
                                                                        <span class="seat-number">{{ $kursiItem->kolom->kolom }}{{ $kursiItem->seat }}</span>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endforeach
                                                </div>
                                    
                                                <!-- Row Labels -->
                                                <div class="d-flex justify-content-center mb-2">
                                                    <div class="seat-label m-4"></div>
                                                    @foreach ($row as $item)
                                                        @if ($item->nomor == 'gap')
                                                            <div class="seat-label m-3"></div>
                                                        @else   
                                                            <div class="seat-label m-4 numberSeat">{{ $item->nomor }}</div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            @endif

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