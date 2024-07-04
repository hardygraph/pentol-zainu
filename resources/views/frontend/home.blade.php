@extends('frontend.partial-frontend.app')

@section('content')
<div class="page-title page-title-fixed">
    <h3>Selamat Datang</h3>
</div>
<div class="page-title-clear"></div>
<div class="page-content">

    <div class="card card-style">
        <div class="content">
            <h4>Enjoy Your Healthy
                Delicious Food</h4>
            <p>
                Makanan adalah obat yang lebih baik daripada obat. Seseorang tidak bisa berpikir dengan baik,
                mencintai dengan baik, dan tidur nyenyak jika belum makan dengan baik.
            </p>

            <div class="splide single-slider slider-has-arrows slider-no-dots" id="single-slider-1">
                <div class="splide__track">
                    <div class="splide__list">
                        <div class="splide__slide mx-3">
                            <div data-card-height="300" class="card bg-5 mb-0 rounded-m shadow-l">
                                <img src="{{asset ('./assets/images/food/th10.jpeg') }}" alt="" srcset="" width="100%">
                                <div class="card-bottom text-center mb-3">
                                    <h2 class="color-white text-uppercase font-900 mb-0">ZainuPentol</h2>
                                    <p class="under-heading color-white">"Pentol Enak, Harga Merakyat"</p>
                                </div>
                                <div class="card-overlay bg-gradient"></div>
                            </div>
                        </div>
                        <div class="splide__slide mx-3">
                            <div data-card-height="300" class="card bg-6 mb-0 rounded-m shadow-l">
                                <img src="{{ asset('./assets/images/food/th_4.jpg') }}" alt="" srcset="" width="100%">
                                <div class="card-bottom text-center mb-3">
                                    <h2 class="color-white text-uppercase font-900 mb-0">ZainuPentol</h2>
                                    <p class="under-heading color-white">"Teman Setia Dikala Lapar"</p>
                                </div>
                                <div class="card-overlay bg-gradient"></div>
                            </div>
                        </div>
                        <div class="splide__slide mx-3">
                            <div data-card-height="300" class="card bg-9 mb-0 rounded-m shadow-l">
                                <img src="{{ asset('./assets/images/food/th_3.jpg') }}" alt="" srcset="" width="100%">
                                <div class="card-bottom text-center mb-3">
                                    <h2 class="color-white text-uppercase font-900 mb-0">ZainuPentol</h2>
                                    <p class="under-heading color-white">“Bukan Sekedar Pentol, Ini Legenda
                                        Rasa”</p>
                                </div>
                                <div class="card-overlay bg-gradient"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="card card-style">
        <div class="content mb-0 mt-3" id="tab-group-1">
            <div class="tab-controls tabs-small tabs-rounded" data-highlight="bg-highlight">
                <a href="#" data-active data-bs-toggle="collapse" data-bs-target="#tab-1ab">Pentol</a>
                <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-2ab">Minuman</a>
                <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-3ab">Snack</a>
            </div>

            <div class="clearfix mb-4"></div>
            <div data-bs-parent="#tab-group-1" class="collapse show" id="tab-1ab">
                @foreach ($pentolan as $biji)
                <div class="d-flex mb-4">
                    <div class="align-self-center">
                        <img src="{{ asset('uploads/pentol/' . $biji->image) }}" class="rounded-sm me-3" width="40">
                    </div>
                    <div class="align-self-center">
                        <p class="color-highlight font-14 mb-n2">Pentol &nbsp;<span class="badge bg-transparent border border-red-dark color-red-dark ms-2 rounded-sm">Sisa {{ $biji->stok }}</span></p>
                        <h6 class="font-15 line-height-s mt-1 mb-1">{{ $biji->pentol }}</h6>
                    </div>
                    <div class="ms-auto ps-3 align-self-center text-center">
                        <p class="color-highlight font-10 mb-n2">per biji</p>
                        <h6 class="font-15 mb-0">Rp. <span id="hargaBiji">{{ $biji->harga }}</span>,- &nbsp;</h6>

                    </div>
                    <div class="stepper rounded-xs float-end">
                        <a href="#" class="stepper-sub" onclick="kurangBijiPentol()"><i class="fa fa-minus color-red-dark"></i></a>
                        <input type="number" min="0" max="{{ $biji->stok }}" value="0" id="bijiQty" name="bijiQty">
                        <a href="#" class="stepper-add" onclick="tambahBijiPentol()"><i class="fa fa-plus color-green-dark"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
            <div data-bs-parent="#tab-group-1" class="collapse" id="tab-2ab">
                @foreach ($minuman as $gelas)
                <div class="d-flex mb-4">
                    <div class="align-self-center">
                        <img src="{{ asset('uploads/minuman/' . $gelas->image) }}" class="rounded-sm me-3" width="40">
                    </div>
                    <div class="align-self-center">
                        <p class="color-highlight font-14 mb-n2">Minuman &nbsp;<span class="badge bg-transparent border border-red-dark color-red-dark ms-2 rounded-sm">Sisa {{ $gelas->stok }}</span></p>
                        <h6 class="font-15 line-height-s mt-1 mb-1">{{ $gelas->minuman }}</h6>
                    </div>
                    <div class="ms-auto ps-3 align-self-center text-center">
                        <p class="color-highlight font-10 mb-n2">per gelas</p>
                        <h6 class="font-15 mb-0">Rp. <span id="hargaGelas">{{ $gelas->harga }}</span>,- &nbsp;</h6>

                    </div>
                    <div class="stepper rounded-xs float-end">
                        <a href="#" class="stepper-sub" onclick="kurangGelas(event)"><i class="fa fa-minus color-red-dark"></i></a>
                        <input type="number" min="0" max="{{ $gelas->stok }}" value="0" id="gelasQty" name="gelasQty">
                        <a href="#" class="stepper-add" onclick="tambahGelas(event)"><i class="fa fa-plus color-green-dark"></i></a>
                    </div>
                </div>
                @endforeach

            </div>
            <div data-bs-parent="#tab-group-1" class="collapse" id="tab-3ab">
                @foreach ($snack as $bungkus)
                <div class="d-flex mb-4">
                    <div class="align-self-center">
                        <img src="{{ asset('uploads/snack/' . $bungkus->image) }}" class="rounded-sm me-3" width="40">
                    </div>
                    <div class="align-self-center">
                        <p class="color-highlight font-14 mb-n2">Snack &nbsp;<span class="badge bg-transparent border border-red-dark color-red-dark ms-2 rounded-sm">Sisa {{ $bungkus->stok }}</span></p>
                        <h6 class="font-15 line-height-s mt-1 mb-1">{{ $bungkus->snack }}</h6>
                    </div>
                    <div class="ms-auto ps-3 align-self-center text-center">
                        <p class="color-highlight font-10 mb-n2">per bungkus</p>
                        <h6 class="font-15 mb-0">Rp. <span id="hargaSnack">{{ $bungkus->harga }}</span>,- &nbsp;</h6>

                    </div>
                    <div class="stepper rounded-xs float-end">
                        <a href="#" class="stepper-sub" onclick="kurangSnack(event)"><i class="fa fa-minus color-red-dark"></i></a>
                        <input type="number" min="0" max="{{ $bungkus->stok }}" value="0" id="snackQty" name="snackQty">
                        <a href="#" class="stepper-add" onclick="tambahSnack(event)"><i class="fa fa-plus color-green-dark"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="card card-style">
            <div class="content mt-3">
                <div class="row mb-0">

                    <div class="col-6">
                        <h4 class="opacity-50 font-13">Total &nbsp;<span class="badge bg-transparent border border-red-dark color-red-dark ms-2"> 5 </span></h4>
                    </div>
                    <div class="col-6 text-end">
                        <h4 class="font-13 opacity-50" id="totalHarga">0</h4>
                    </div>
                    <div class="col-6">
                        <h4 class="opacity-50 font-13">Diskon &nbsp;<span class="badge bg-transparent border border-red-dark color-red-dark ms-2">0 %</span></h4>
                    </div>
                    <div class="col-6 text-end">
                        <h4 class="font-13 opacity-50">Rp.0</h4>
                    </div>

                    <div class="col-12 pb-3"></div>
                    <div class="col-6">
                        <h4>Sub Total</h4>
                    </div>
                    <div class="col-6 text-end">
                        <h4 class="font-15 mb-0"><span id="subTotalHarga">0</span>,-</h4>
                    </div>

                </div>

            </div>

            <a href="#"
                class="btn btn-full me-3 ms-3 btn-l font-13 font-600 rounded-s shadow-l mb-4 gradient-highlight"><i
                    class="fas fa-cart-plus"></i>&nbsp;Place Order</a>

        </div>

    </div>

</div>
<script>
        const bijiInput = document.getElementById('bijiQty');
        const gelasInput = document.getElementById('gelasQty');
        const snackInput = document.getElementById('snackQty');

        const hargaBiji = parseInt(document.getElementById('hargaBiji').textContent.replace(/[^\d]/g, ''));
        const hargaGelas = parseInt(document.getElementById('hargaGelas').textContent.replace(/[^\d]/g, ''));
        const hargaSnack = parseInt(document.getElementById('hargaSnack').textContent.replace(/[^\d]/g, ''));


        const totalHargaElement = document.getElementById('totalHarga');
        const subTotalHargaElement = document.getElementById('subTotalHarga');
        const totalHargaMainElement = document.getElementById('totalHarga');

        const diskonPersentase = 11;
        const diskonElement = document.getElementById('diskon');
        const diskonHargaElement = document.getElementById('diskonHarga');


        function updateTotal() {
            const qtyBiji = parseInt(bijiInput.value);
            const totalHargaBiji = hargaBiji * qtyBiji;

            const qtyGelas = parseInt(gelasInput.value);
            const totalHargaGelas = hargaGelas * qtyGelas;

            const qtySnack = parseInt(snackInput.value);

            const totalHargaSnack = hargaSnack * qtySnack;


            const totalHarga = totalHargaBiji + totalHargaGelas + totalHargaSnack;
            totalHargaElement.textContent = formatRupiah(totalHarga);



            const subTotal = totalHarga;
            subTotalHargaElement.textContent = formatRupiah(subTotal);
        }




        function formatRupiah(angka) {
            return new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR',
                minimumFractionDigits: 0
            }).format(angka).replace(/,00$/, '');
        }

        function debounce(func, wait) {
            let timeout;
            return function(...args) {
                clearTimeout(timeout);
                timeout = setTimeout(() => func.apply(this, args), wait);
            };
        }

        const debouncedUpdateTotal = debounce(updateTotal, 100);




        // snack
        function kurangSnack() {
            if (snackInput.value > 0) {
                snackInput.value = parseInt(snackInput.value) - 1;
                debouncedUpdateTotal();
            } else {
                snackInput.value = 0;
            }
        }

        function tambahSnack() {
            snackInput.value = parseInt(snackInput.value) + 1;
            debouncedUpdateTotal();

        }



        // minuman
        gelasInput.addEventListener('input', function() {
            if (this.value < 0) {
                this.value = 0;
            }
            debouncedUpdateTotal();
        });
        function kurangGelas() {
            if (gelasInput.value > 0) {
                gelasInput.value = parseInt(gelasInput.value) - 1;
            } else {
                gelasInput.value = 0;
            }
            debouncedUpdateTotal();
        }

        function tambahGelas() {
            if (gelasInput.value < {{ $gelas->stok }}) {
                gelasInput.value = parseInt(gelasInput.value) + 1;
            }
            debouncedUpdateTotal();
        }



        // pentol
        const debouncedUpdateTotalPentol = debounce(updateTotal, 300);
        function tambahBijiPentol() {
            debouncedUpdateTotal();
        }
        function kurangBijiPentol(event) {
            if (bijiInput.value >= 0) {
                bijiInput.value = parseInt(bijiInput.value) - 1;
            } else {
                bijiInput.value = 0;
            }
            debouncedUpdateTotal();
        }




</script>
@endsection
