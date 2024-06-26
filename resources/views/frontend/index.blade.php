@extends('frontend.partial-frontend.app')

@section('content')

<div class="page-content pb-0">
    <div class="card rounded-0 mb-0" data-card-height="cover-full">
        <div class="card-center text-center">
            <h1 class="font-22 font-700 color-highlight mb-n1">Selamat Datang</h1>
            <h1 class="font-40 font-800 pb-4">ZainuPentol</h1>
            <h4 class="opacity-60 boxed-text-xl">
                Selamat Berbelanja Jajanan Pentol <br>
                “Pentol Mantap, Bikin Nagih Terus”
            </h4>
            <a href="{{ route('home') }}" class="close-menu btn btn-3d btn-xxl gradient-blue font-13 btn-m font-600 mt-3 rounded-s">Get Started</a> <br>
            <a href="{{ route('pentol') }}" class="close-menu btn btn-3d btn-xs gradient-blue font-13 btn-m font-600 mt-3 rounded-s"><i class="fa fa-sign-in" style=""></i>&nbsp; Admin Login</a>
        </div>
    </div>
</div>
@endsection