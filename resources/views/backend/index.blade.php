@extends('backend.partial-backend.app')
@section('content')
            <!-- -------------- Topbar -------------- -->
            <header id="topbar" class="alt">
                <div class="topbar-left">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-icon">
                            <a href="dashboard1.html">
                                <span class="fa fa-home"></span>
                            </a>
                        </li>
                        <li class="breadcrumb-active">
                            <a href="dashboard1.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-link">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-current-item">Dashboard</li>
                    </ol>
                </div>
            </header>
            <!-- -------------- /Topbar -------------- -->
    
            <!-- -------------- Content -------------- -->
            <section id="content" class="table-layout animated fadeIn">
    
                <!-- -------------- Column Center -------------- -->
                <div class="chute chute-center">
    
                    <!-- -------------- Quick Links -------------- -->
                    <div class="row">
                        <div class="col-sm-6 col-xl-3">
                            <div class="panel panel-tile">
                                <div class="panel-body">
                                    <div class="row pv10">
                                        <div class="col-xs-5 ph10"><img src="assets-backend/img/pages/clipart0.png"
                                                                        class="img-responsive mauto" alt=""/></div>
                                        <div class="col-xs-7 pl5">
                                            <h6 class="text-muted">TICKETS ANSWERED</h6>
    
                                            <h2 class="fs50 mt5 mbn">385</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="panel panel-tile">
                                <div class="panel-body">
                                    <div class="row pv10">
                                        <div class="col-xs-5 ph10"><img src="assets-backend/img/pages/clipart1.png"
                                                                        class="img-responsive mauto" alt=""/></div>
                                        <div class="col-xs-7 pl5">
                                            <h6 class="text-muted">PROJECTS LAUNCHED</h6>
    
                                            <h2 class="fs50 mt5 mbn">197</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="panel panel-tile">
                                <div class="panel-body">
                                    <div class="row pv10">
                                        <div class="col-xs-5 ph10"><img src="assets-backend/img/pages/clipart2.png"
                                                                        class="img-responsive mauto" alt=""/></div>
                                        <div class="col-xs-7 pl5">
                                            <h6 class="text-muted">HAPPY CUSTOMERS</h6>
    
                                            <h2 class="fs50 mt5 mbn">6789</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="panel panel-tile">
                                <div class="panel-body">
                                    <div class="row pv10">
                                        <div class="col-xs-5 ph10"><img src="assets-backend/img/pages/clipart3.png"
                                                                        class="img-responsive mauto" alt=""/></div>
                                        <div class="col-xs-7 pl5">
                                            <h6 class="text-muted">UNIQUE INNOVATIONS</h6>
    
                                            <h2 class="fs50 mt5 mbn">256</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <!-- -------------- AllCP Info -------------- -->
    
    
    
                </div>
            </section>
            <!-- -------------- /Content -------------- -->
    
@endsection