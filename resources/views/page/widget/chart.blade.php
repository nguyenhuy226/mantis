@extends('layout')

@section('content')
    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pc-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0)">Widget</a></li>
                                <li class="breadcrumb-item" aria-current="page">Chart</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Chart</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-2 f-w-400 text-muted">Total Users</h6>
                            <h4 class="mb-0">78,250 <span class="badge bg-light-primary border border-primary"><i
                                        class="ti ti-trending-up"></i> 70.5%</span></h4>
                        </div>
                        <div id="total-value-graph-1"></div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-2 f-w-400 text-muted">Total Order</h6>
                            <h4 class="mb-0">18,800 <span class="badge bg-light-warning border border-warning"><i
                                        class="ti ti-trending-down"></i> 27.4%</span></h4>
                        </div>
                        <div id="total-value-graph-2"></div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-2 f-w-400 text-muted">Total Sales</h6>
                            <h4 class="mb-0">$35,078 <span class="badge bg-light-warning border border-warning"><i
                                        class="ti ti-trending-down"></i> 27.4%</span></h4>
                        </div>
                        <div id="total-value-graph-3"></div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-2 f-w-400 text-muted">Total Marketing</h6>
                            <h4 class="mb-0">4,42,236 <span class="badge bg-light-primary border border-primary"><i
                                        class="ti ti-trending-up"></i> 59.3%</span></h4>
                        </div>
                        <div id="total-value-graph-4"></div>
                    </div>
                </div>

                <div class="col-md-12 col-xl-7">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="mb-0">Unique Visitor</h5>
                        <ul class="nav nav-pills justify-content-end mb-0" id="chart-tab-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="chart-tab-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#chart-tab-home" type="button" role="tab"
                                    aria-controls="chart-tab-home" aria-selected="true">Month</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="chart-tab-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#chart-tab-profile" type="button" role="tab"
                                    aria-controls="chart-tab-profile" aria-selected="false">Week</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="tab-content" id="chart-tab-tabContent">
                                <div class="tab-pane" id="chart-tab-home" role="tabpanel"
                                    aria-labelledby="chart-tab-home-tab" tabindex="0">
                                    <div id="visitor-chart-1"></div>
                                </div>
                                <div class="tab-pane show active" id="chart-tab-profile" role="tabpanel"
                                    aria-labelledby="chart-tab-profile-tab" tabindex="0">
                                    <div id="visitor-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xl-5">
                    <h5 class="mb-3">Income Overview</h5>
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-2 f-w-400 text-muted">This Week Statistics</h6>
                            <h3 class="mb-3">$7,650</h3>
                            <div id="income-overview-chart"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-xl-4">
                    <h5 class="mb-3">Analytics Report</h5>
                    <div class="card">
                        <div class="list-group list-group-flush">
                            <a href="#"
                                class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">Company
                                Finance Growth<span class="h5 mb-0">+45.14%</span></a>
                            <a href="#"
                                class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">Company
                                Expenses Ratio<span class="h5 mb-0">0.58%</span></a>
                        </div>
                        <div class="card-body px-2">
                            <div id="analytics-report-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xl-8">
                    <h5 class="mb-3">Income Overview</h5>
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-3 align-items-center">
                                <div class="col">
                                    <p class="mb-1 text-danger">$1,12,900 (45.67%)</p>
                                    <p class="mb-1 text-muted">Compare to : 01 Dec 2021-08 Jan 2022</p>
                                </div>
                                <div class="col-auto">
                                    <ul class="nav nav-pills justify-content-end mb-0" id="income-tab-tab"
                                        role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="income-tab-profile-tab"
                                                data-bs-toggle="pill" data-bs-target="#income-tab-profile" type="button"
                                                role="tab" aria-controls="income-tab-profile"
                                                aria-selected="false">Week</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="income-tab-home-tab" data-bs-toggle="pill"
                                                data-bs-target="#income-tab-home" type="button" role="tab"
                                                aria-controls="income-tab-home" aria-selected="true">Month</button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-auto">
                                    <select class="form-select p-r-35">
                                        <option>By Volume</option>
                                        <option>By Margin</option>
                                        <option>By Sales</option>
                                    </select>
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="avtar avtar-s btn btn-outline-secondary">
                                        <i class="ti ti-download f-18"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="tab-content" id="income-tab-tabContent">
                                <div class="tab-pane show active" id="income-tab-profile" role="tabpanel"
                                    aria-labelledby="income-tab-profile-tab" tabindex="0">
                                    <div id="income-overview-tab-chart"></div>
                                </div>
                                <div class="tab-pane" id="income-tab-home" role="tabpanel"
                                    aria-labelledby="income-tab-home-tab" tabindex="0">
                                    <div id="income-overview-tab-chart-1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-xl-7">
                    <h5 class="mb-3">Sales Report</h5>
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-2 f-w-400 text-muted">This Week Statistics</h6>
                            <h3 class="mb-0">$7,650</h3>
                            <div id="sales-report-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xl-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="mb-2">Acquisition Channels</h6>
                                    <p class="mb-0 text-muted">Marketing</P>
                                </div>
                                <h4 class="text-primary">-128</h4>
                            </div>
                            <div id="acquisition-chart"></div>
                        </div>
                        <div class="list-group list-group-flush">
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <div class="avtar avtar-s rounded-circle text-secondary bg-light-secondary">
                                            <i class="ti ti-device-analytics f-18"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">Top Channels</h6>
                                        <p class="mb-0 text-muted">Today, 2:00 AM</P>
                                    </div>
                                    <div class="flex-shrink-0 text-end">
                                        <h6 class="mb-1">+ $1,430</h6>
                                        <p class="mb-0 text-muted">35%</P>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <div class="avtar avtar-s rounded-circle text-primary bg-light-primary">
                                            <i class="ti ti-file-text f-18"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">Top Pages</h6>
                                        <p class="mb-0 text-muted">Today 6:00 AM</P>
                                    </div>
                                    <div class="flex-shrink-0 text-end">
                                        <h6 class="mb-1">- $1430</h6>
                                        <p class="mb-0 text-muted">35%</P>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
    <!-- [ Main Content ] end -->
@endsection
