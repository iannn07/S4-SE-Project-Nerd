@extends('layouts.dashboard')
@section('navigation_left')
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="#">
            <span class="align-middle">Ian Admin</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item active" id="dashboard" onclick="selectChannel(this)">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item" id="profile" onclick="selectChannel(this)">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">View Homepage</span>
                </a>
            </li>

            <li class="sidebar-header">
                Edit Profile
            </li>

            <li class="sidebar-item" id="btn" onclick="selectChannel(this)">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="terminal"></i> <span class="align-middle">Edit Home
                        Profile
                    </span>
                </a>
            </li>
            <li class="sidebar-item" id="btn" onclick="selectChannel(this)">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="settings"></i> <span class="align-middle">Edit
                        Journey</span>
                </a>
            </li>
            <li class="sidebar-item" id="btn" onclick="selectChannel(this)">
                <a class="sidebar-link" href="#">
                    <i class="align-middle" data-feather="activity"></i> <span class="align-middle">Edit
                        Job Type</span>
                </a>
            </li>
        </ul>
    </div>
@endsection
@section('content')
    <div class="float-left">
        <main class="content">
            <div class="container-fluid p-0">

                <h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>

                <div class="row">
                    <div class="col d-flex justify-center align-items-center">
                        <div class="w-100">
                            <div class="col-auto">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col mt-0">
                                                <h5 class="card-title">Visitors</h5>
                                            </div>

                                            <div class="col-auto">
                                                <div class="stat text-primary">
                                                    <i class="align-middle" data-feather="users"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="mt-1 mb-3">0</h1>
                                        <div class="mb-0">
                                            <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 0.00%
                                            </span>
                                            <span class="text-muted">Since last week</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col d-flex order-2 order-xxl-3">
                        <div class="card flex-fill w-100">
                            <div class="card-header">

                                <h5 class="card-title mb-0">Browser Usage</h5>
                            </div>
                            <div class="card-body d-flex">
                                <div class="align-self-center w-100">
                                    <div class="py-3">
                                        <div class="chart chart-xs">
                                            <canvas id="chartjs-dashboard-pie"></canvas>
                                        </div>
                                    </div>

                                    <table class="table mb-0">
                                        <tbody>
                                            <tr>
                                                <td>Chrome</td>
                                                <td class="text-end">1</td>
                                            </tr>
                                            <tr>
                                                <td>Firefox</td>
                                                <td class="text-end">2</td>
                                            </tr>
                                            <tr>
                                                <td>IE</td>
                                                <td class="text-end">3</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex order-1 order-xxl-1">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Calendar</h5>
                            </div>
                            <div class="card-body d-flex">
                                <div class="align-self-center w-100">
                                    <div class="chart">
                                        <div id="datetimepicker-dashboard"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="footer">
            <div class="container-fluid">
                <div class="row text-muted">
                    <div class="col-6 text-start">
                        <p class="mb-0">
                            <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>AdminKit</strong></a>
                            -
                            <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>Bootstrap Admin
                                    Template</strong></a> &copy;
                        </p>
                    </div>
                    <div class="col-6 text-end">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
@section('user_script')
@endsection
