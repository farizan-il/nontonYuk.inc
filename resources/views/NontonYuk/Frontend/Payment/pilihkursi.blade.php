@extends('nontonyuk.layouts.frontend.main')

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
            font-size: 14px;
            font-weight: normal;
            
        }

        /* Hover Effect */
        .seat:hover::before {
            content: attr(data-seat);
            color: #007bff;
        }

        /* Hover Effect on Seat */
        .seat-avalaible:hover {
            background-color: #a0d1ff;
            border-color: #007bff;
        }

        .seat.selected {
            background-color: #4376b5;
            color: #ffffff;
        }

    </style>
@endsection

@section('color')
    bg-dark
@endsection

@section('content')
    <section class="featured-artist-area section-padding-100 bg-fixed">
        <div class="container">
            <div class="row align-items-end" style="margin-top: 4rem">
                <div class="section-heading style-2">
                    <h2>Pilih Kursi Bioskop</h2>
                </div>
                <div class="col-12 col-md-8 col-lg-9">
                    <div class="featured-artist-thumb">
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
                                            <div class="m-2 kolom-seat text-secondary"><strong>{{ $kolom }}</strong></div>
                                            @foreach ($kursiList as $kursiItem)
                                                @if($kursiItem->seat == 'gap')
                                                    <div class="m-2"></div>
                                                @else
                                                    @if ($kursiItem->isBooking == 1)
                                                        <div class="seat bg-secondary text-white" data-bs-toggle="tooltip" data-bs-placement="top" title="Dibooking">
                                                            <span class="seat-number">{{ $kursiItem->row }}{{ $kursiItem->seat }}</span>
                                                        </div>
                                                    @else
                                                        {{-- element kursi yang di klik user --}}
                                                        <div class="seat seat-available" data-price="{{ $kursiItem->teater->kelas->harga }}" data-seat="{{ $kursiItem->row }}{{ $kursiItem->seat }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Harga Rp. {{ number_format($kursiItem->teater->kelas->harga, 0, ',', '.') }}">
                                                            <span class="seat-number"></span>
                                                        </div>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="featured-artist-content">
                        <!-- Section Heading -->
                        <div class="section-heading dark text-left mb-4">
                            <h2 class="mb-2" style="font-size: 0.8rem; letter-spacing: 0"><strong>{{ $teatertayang->teater->bioskop->namaBioskop }}</strong></h2>
                            <h2 class="mb-2" style="font-size: 0.8rem; letter-spacing: 0"><strong>{{ $teatertayang->teater->namaTeater }} - {{ $teatertayang->teater->kelas->namaKelas }}</strong></h2>
                            <hr>
                            <div class="mt-30">
                                <form action="#" method="post">
                                    <input type="hidden" class="form-control form-control-sm" id="kursipilihan" value="{{ $teatertayang->jadwalTayangId }}" readonly>
                                    <div class="form-group">
                                        <label class="text-dark" for="kursipilih">Kursi yang dipilih</label>
                                        <input type="text" class="form-control form-control-sm" id="kursipilih" readonly value="">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-dark" for="totalharga">Total Harga</label>
                                        <input type="text" class="form-control form-control-sm" id="totalharga" readonly value="">
                                    </div>
                                    <button type="submit" class="btn btn-dark btn-sm rounded">Pilih Pembayaran</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const seatAvailableElements = document.querySelectorAll('.seat-available');
        const seatInput = document.getElementById('kursipilih');
        const priceInput = document.getElementById('totalharga');
        let selectedSeats = [];
        let totalPrice = 0;

        seatAvailableElements.forEach(seat => {
            seat.addEventListener('click', function () {
                const seatData = seat.getAttribute('data-seat');
                const seatPrice = parseInt(seat.getAttribute('data-price'));

                // Toggle selection
                if (selectedSeats.includes(seatData)) {
                    selectedSeats = selectedSeats.filter(s => s !== seatData);
                    totalPrice -= seatPrice;
                    seat.classList.remove('selected');
                } else {
                    selectedSeats.push(seatData);
                    totalPrice += seatPrice;
                    seat.classList.add('selected');
                }

                // Update form inputs
                seatInput.value = selectedSeats.join(', ');
                priceInput.value = `Rp. ${totalPrice.toLocaleString('id-ID')}`;
            });
        });
    });
</script>
@endsection
