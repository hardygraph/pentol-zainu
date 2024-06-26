@extends('backend.partial-backend.app')
@section('content')

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

<section id="content" class="table-layout animated fadeIn">

    <!-- -------------- Column Center -------------- -->
    <div class="chute chute-center">

        <div class="panel" id="spy4">
            <div class="panel-heading">
                <span class="panel-title">On-Hover Table</span>
                <h3>tambah</h3>
            </div>
            <table class="table table-striped ">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Work Hours</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>CEO</td>
                    <td>10am - 6pm</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Malory Grimm</td>
                    <td>Manager</td>
                    <td>9am - 6pm</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Don Kihot</td>
                    <td>Manager</td>
                    <td>8am - 5pm</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Susan White</td>
                    <td>CEO</td>
                    <td>9am - 6pm</td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>
</section>

@endsection