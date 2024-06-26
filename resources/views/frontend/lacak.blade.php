@extends('frontend.partial-frontend.app')

@section('content')
<div class="page-title page-title-fixed">
    <h3>Status Order</h3>
</div>
<div class="page-title-clear"></div>
<div id="page">
    
    <div class="timeline-cover timeline-cover-center">
        <div data-card-height="250">
            
            <div class="card-center text-center">
                <div class="text-center ">
                    <h3 class="font-26 color-white mt-2 mb-3">Masukkan Order ID</h3>
                </div>
                    <div class="text-center mx-n3">
						<form action="">
							<input class="otp mx-1 rounded-sm text-center font-20 font-900" type="tel" value="●">
							<input class="otp mx-1 rounded-sm text-center font-20 font-900" type="tel" value="●">
							<input class="otp mx-1 rounded-sm text-center font-20 font-900" type="tel" value="●">
							<input class="otp mx-1 rounded-sm text-center font-20 font-900" type="tel" value="●">
							<input class="otp mx-1 rounded-sm text-center font-20 font-900" type="tel" value="●">
                            <input class="otp mx-1 rounded-sm text-center font-20 font-900" type="tel" value="●">
						</form>
                        *Isi Angka Awal dengan Angka 0 untuk menggnapkan isian kolom
					</div>
                    <div class="btn btn-l font-600 font-13  bg-yellow-dark mt-1 rounded-xl">PERIKSA</div>
                    <h2 class="color-white font-24 mb-n2 mt-3">Order #12345678901</h2>
                <p class="color-white opacity-90 font-11 mb-0 mt-2">
                    Atau Hubungi Kami Di
                </p>
                <a href="https://wa.me/6281342757123" class="mb-3 rounded-xl text-start btn btn-m bg-whatsapp btn-icon font-600"><i class="fab fa-whatsapp rounded-xl font-16 text-center"></i>WhatsApp Zainu Pentol</a>
            </div>
            <div class="card-overlay bg-black opacity-80"></div>
        </div> 
    </div>

    <div class="page-content" style="padding-top:80px">
        
        <div class="timeline-body">
            <div class="timeline-deco"></div>

            <div class="timeline-item mt-4">
                <i class="fa fa-clock bg-red-dark color-white shadow-l timeline-icon"></i>
                <div class="timeline-item-content rounded-s">
                    <h5 class="font-400 pt-1 pb-1">
                        Menunggu Konfirmasi<br>
                        <span class="opacity-30">25.05.2025 - 09:40 AM</span>
                    </h5>
                </div>
                
                {{-- <embed type="application/pdf" src="./assets/images/struk.pdf" width="100%" height=""></embed> --}}
            </div>	

            <div class="timeline-item mt-4">
                <i class="fa fa-check bg-yellow-dark color-white shadow-l timeline-icon"></i>
                <div class="timeline-item-content rounded-s">
                    <h5 class="font-400 pt-1 pb-1">
                        Pembayaran dikonfirmasi<br>
                        <span class="opacity-30">25.05.2025 - 09:40 AM</span>
                    </h5>
                    <a href="#" class="btn btn-m mb-3 rounded-xs text-uppercase font-600 shadow-s bg-green-dark">Lihat Struk Pembelian</a>
                </div>
                
                {{-- <embed type="application/pdf" src="./assets/images/struk.pdf" width="100%" height=""></embed> --}}
            </div>					

            <div class="timeline-item">
                <i class="fa fa-calendar bg-blue-dark shadow-l timeline-icon"></i>
                <div class="timeline-item-content rounded-s">
                    <h5 class="font-400 pt-1 pb-1">
                        Menyiapkan Pesanan<br>
                        <span class="opacity-30">25.05.2025 - 10:21 AM</span>
                    </h5>
                </div>
            </div>		
            <div class="timeline-item">
                <i class="fa fa-paper-plane bg-brown-dark shadow-l timeline-icon"></i>
                <div class="timeline-item-content rounded-s">
                    <h5 class="font-400 pt-1 pb-1">
                        Pesanan Dikirim Menggunakan Jasa Kurir<br>
                        <span class="opacity-30">25.05.2025 - 11:32 AM</span>
                    </h5>
                    <a href="#" class="btn btn-m mb-3 rounded-xs text-uppercase font-700 shadow-s bg-blue-dark">Konfimasi Pesanan Diterima</a>
                </div>
            </div>		
            <div class="timeline-item">
                <i class="fa fa-location-pin bg-green-dark shadow-l timeline-icon"></i>
                <div class="timeline-item-content rounded-s">
                    <h5 class="font-400 pt-1 pb-1">
                        Pesanan Telah Sampai<br> Terima Kasih Telah Berbelanja di Zainu Pentol<br>
                        <span class="opacity-30">25.05.2025 - 01:34 PM</span>
                    </h5>
                  
                </div>
            </div>		

        </div>			
    </div>
    
</div>
@endsection