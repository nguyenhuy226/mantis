<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
    @include('widget.head-page-meta')
    @include('widget.head-css')
</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="light">
    @include('widget.layout-vertical')
    <!-- [ Main Content ] start -->
    {{-- <div class="pc-container">
        <div class="pc-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Home</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
                                <li class="breadcrumb-item" aria-current="page">Home</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- [ sample-page ] start -->
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-2 f-w-400 text-muted">Total Page Views</h6>
                            <h4 class="mb-3">4,42,236 <span class="badge bg-light-primary border border-primary"><i
                                        class="ti ti-trending-up"></i> 59.3%</span></h4>
                            <p class="mb-0 text-muted text-sm">You made an extra <span
                                    class="text-primary">35,000</span> this year
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-2 f-w-400 text-muted">Total Users</h6>
                            <h4 class="mb-3">78,250 <span class="badge bg-light-success border border-success"><i
                                        class="ti ti-trending-up"></i> 70.5%</span></h4>
                            <p class="mb-0 text-muted text-sm">You made an extra <span class="text-success">8,900</span>
                                this year</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-2 f-w-400 text-muted">Total Order</h6>
                            <h4 class="mb-3">18,800 <span class="badge bg-light-warning border border-warning"><i
                                        class="ti ti-trending-down"></i> 27.4%</span></h4>
                            <p class="mb-0 text-muted text-sm">You made an extra <span class="text-warning">1,943</span>
                                this year</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-2 f-w-400 text-muted">Total Sales</h6>
                            <h4 class="mb-3">$35,078 <span class="badge bg-light-danger border border-danger"><i
                                        class="ti ti-trending-down"></i> 27.4%</span></h4>
                            <p class="mb-0 text-muted text-sm">You made an extra <span
                                    class="text-danger">$20,395</span> this year
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-xl-8">
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
                <div class="col-md-12 col-xl-4">
                    <h5 class="mb-3">Income Overview</h5>
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-2 f-w-400 text-muted">This Week Statistics</h6>
                            <h3 class="mb-3">$7,650</h3>
                            <div id="income-overview-chart"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-xl-8">
                    <h5 class="mb-3">Recent Orders</h5>
                    <div class="card tbl-card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-borderless mb-0">
                                    <thead>
                                        <tr>
                                            <th>TRACKING NO.</th>
                                            <th>PRODUCT NAME</th>
                                            <th>TOTAL ORDER</th>
                                            <th>STATUS</th>
                                            <th class="text-end">TOTAL AMOUNT</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="#" class="text-muted">84564564</a></td>
                                            <td>Camera Lens</td>
                                            <td>40</td>
                                            <td><span class="d-flex align-items-center gap-2"><i
                                                        class="fas fa-circle text-danger f-10 m-r-5"></i>Rejected</span>
                                            </td>
                                            <td class="text-end">$40,570</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="text-muted">84564564</a></td>
                                            <td>Laptop</td>
                                            <td>300</td>
                                            <td><span class="d-flex align-items-center gap-2"><i
                                                        class="fas fa-circle text-warning f-10 m-r-5"></i>Pending</span>
                                            </td>
                                            <td class="text-end">$180,139</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="text-muted">84564564</a></td>
                                            <td>Mobile</td>
                                            <td>355</td>
                                            <td><span class="d-flex align-items-center gap-2"><i
                                                        class="fas fa-circle text-success f-10 m-r-5"></i>Approved</span>
                                            </td>
                                            <td class="text-end">$180,139</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="text-muted">84564564</a></td>
                                            <td>Camera Lens</td>
                                            <td>40</td>
                                            <td><span class="d-flex align-items-center gap-2"><i
                                                        class="fas fa-circle text-danger f-10 m-r-5"></i>Rejected</span>
                                            </td>
                                            <td class="text-end">$40,570</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="text-muted">84564564</a></td>
                                            <td>Laptop</td>
                                            <td>300</td>
                                            <td><span class="d-flex align-items-center gap-2"><i
                                                        class="fas fa-circle text-warning f-10 m-r-5"></i>Pending</span>
                                            </td>
                                            <td class="text-end">$180,139</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="text-muted">84564564</a></td>
                                            <td>Mobile</td>
                                            <td>355</td>
                                            <td><span class="d-flex align-items-center gap-2"><i
                                                        class="fas fa-circle text-success f-10 m-r-5"></i>Approved</span>
                                            </td>
                                            <td class="text-end">$180,139</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="text-muted">84564564</a></td>
                                            <td>Camera Lens</td>
                                            <td>40</td>
                                            <td><span class="d-flex align-items-center gap-2"><i
                                                        class="fas fa-circle text-danger f-10 m-r-5"></i>Rejected</span>
                                            </td>
                                            <td class="text-end">$40,570</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="text-muted">84564564</a></td>
                                            <td>Laptop</td>
                                            <td>300</td>
                                            <td><span class="d-flex align-items-center gap-2"><i
                                                        class="fas fa-circle text-warning f-10 m-r-5"></i>Pending</span>
                                            </td>
                                            <td class="text-end">$180,139</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="text-muted">84564564</a></td>
                                            <td>Mobile</td>
                                            <td>355</td>
                                            <td><span class="d-flex align-items-center gap-2"><i
                                                        class="fas fa-circle text-success f-10 m-r-5"></i>Approved</span>
                                            </td>
                                            <td class="text-end">$180,139</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#" class="text-muted">84564564</a></td>
                                            <td>Mobile</td>
                                            <td>355</td>
                                            <td><span class="d-flex align-items-center gap-2"><i
                                                        class="fas fa-circle text-success f-10 m-r-5"></i>Approved</span>
                                            </td>
                                            <td class="text-end">$180,139</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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
                            <a href="#"
                                class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">Business
                                Risk Cases<span class="h5 mb-0">Low</span></a>
                        </div>
                        <div class="card-body px-2">
                            <div id="analytics-report-chart"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-xl-8">
                    <h5 class="mb-3">Sales Report</h5>
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-2 f-w-400 text-muted">This Week Statistics</h6>
                            <h3 class="mb-0">$7,650</h3>
                            <div id="sales-report-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xl-4">
                    <h5 class="mb-3">Transaction History</h5>
                    <div class="card">
                        <div class="list-group list-group-flush">
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <div class="avtar avtar-s rounded-circle text-success bg-light-success">
                                            <i class="ti ti-gift f-18"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">Order #002434</h6>
                                        <p class="mb-0 text-muted">Today, 2:00 AM</P>
                                    </div>
                                    <div class="flex-shrink-0 text-end">
                                        <h6 class="mb-1">+ $1,430</h6>
                                        <p class="mb-0 text-muted">78%</P>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <div class="avtar avtar-s rounded-circle text-primary bg-light-primary">
                                            <i class="ti ti-message-circle f-18"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">Order #984947</h6>
                                        <p class="mb-0 text-muted">5 August, 1:45 PM</P>
                                    </div>
                                    <div class="flex-shrink-0 text-end">
                                        <h6 class="mb-1">- $302</h6>
                                        <p class="mb-0 text-muted">8%</P>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <div class="avtar avtar-s rounded-circle text-danger bg-light-danger">
                                            <i class="ti ti-settings f-18"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">Order #988784</h6>
                                        <p class="mb-0 text-muted">7 hours ago</P>
                                    </div>
                                    <div class="flex-shrink-0 text-end">
                                        <h6 class="mb-1">- $682</h6>
                                        <p class="mb-0 text-muted">16%</P>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    @yield('content')
    <!-- [ Main Content ] end -->
    @include('widget.footer-block')

    <!-- [Page Specific JS] start -->
    <script src="{{ asset('/js/plugins/apexcharts.min.js') }}"></script>
    <script src="{{ asset('/js/pages/dashboard-default.js') }}"></script>
    <!-- [Page Specific JS] end -->
    <!-- Required Js -->
    @include('widget.footer-js')
</body>
<!-- [Body] end -->
!-- [Page Specific JS] start -->
<script src="../assets/js/plugins/simple-datatables.js"></script>
<script>
    const dataTable = new simpleDatatables.DataTable('#pc-dt-simple', {
        sortable: false,
        perPage: 5
    });
</script>
<!-- [Page Specific JS] end -->
<div class="offcanvas pct-offcanvas offcanvas-end" tabindex="-1" id="offcanvas_pc_layout">
    <div class="offcanvas-header bg-primary">
        <h5 class="offcanvas-title text-white">Mantis Customizer</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="pct-body" style="height: calc(100% - 60px)">
        <div class="offcanvas-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <a class="btn border-0 text-start w-100" data-bs-toggle="collapse" href="#pctcustcollapse1">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <div class="avtar avtar-xs bg-light-primary">
                                    <i class="ti ti-layout-sidebar f-18"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-1">Theme Layout</h6>
                                <span>Choose your layout</span>
                            </div>
                            <i class="ti ti-chevron-down"></i>
                        </div>
                    </a>
                    <div class="collapse show" id="pctcustcollapse1">
                        <div class="pct-content">
                            <div class="pc-rtl">
                                <p class="mb-1">Direction</p>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="layoutmodertl">
                                    <label class="form-check-label" for="layoutmodertl">RTL</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <a class="btn border-0 text-start w-100" data-bs-toggle="collapse" href="#pctcustcollapse2">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <div class="avtar avtar-xs bg-light-primary">
                                    <i class="ti ti-brush f-18"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-1">Theme Mode</h6>
                                <span>Choose light or dark mode</span>
                            </div>
                            <i class="ti ti-chevron-down"></i>
                        </div>
                    </a>
                    <div class="collapse show" id="pctcustcollapse2">
                        <div class="pct-content">
                            <div class="theme-color themepreset-color theme-layout">
                                <a href="#!" class="active" onclick="layout_change('light')"
                                    data-value="false"><span><img src="../assets/images/customization/default.svg"
                                            alt="img"></span><span>Light</span></a>
                                <a href="#!" class="" onclick="layout_change('dark')"
                                    data-value="true"><span><img src="../assets/images/customization/dark.svg"
                                            alt="img"></span><span>Dark</span></a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <a class="btn border-0 text-start w-100" data-bs-toggle="collapse" href="#pctcustcollapse3">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <div class="avtar avtar-xs bg-light-primary">
                                    <i class="ti ti-color-swatch f-18"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-1">Color Scheme</h6>
                                <span>Choose your primary theme color</span>
                            </div>
                            <i class="ti ti-chevron-down"></i>
                        </div>
                    </a>
                    <div class="collapse show" id="pctcustcollapse3">
                        <div class="pct-content">
                            <div class="theme-color preset-color">
                                <a href="#!" class="active" data-value="preset-1"><span><img
                                            src="../assets/images/customization/theme-color.svg"
                                            alt="img"></span><span>Theme 1</span></a>
                                <a href="#!" class="" data-value="preset-2"><span><img
                                            src="../assets/images/customization/theme-color.svg"
                                            alt="img"></span><span>Theme 2</span></a>
                                <a href="#!" class="" data-value="preset-3"><span><img
                                            src="../assets/images/customization/theme-color.svg"
                                            alt="img"></span><span>Theme 3</span></a>
                                <a href="#!" class="" data-value="preset-4"><span><img
                                            src="../assets/images/customization/theme-color.svg"
                                            alt="img"></span><span>Theme 4</span></a>
                                <a href="#!" class="" data-value="preset-5"><span><img
                                            src="../assets/images/customization/theme-color.svg"
                                            alt="img"></span><span>Theme 5</span></a>
                                <a href="#!" class="" data-value="preset-6"><span><img
                                            src="../assets/images/customization/theme-color.svg"
                                            alt="img"></span><span>Theme 6</span></a>
                                <a href="#!" class="" data-value="preset-7"><span><img
                                            src="../assets/images/customization/theme-color.svg"
                                            alt="img"></span><span>Theme 7</span></a>
                                <a href="#!" class="" data-value="preset-8"><span><img
                                            src="../assets/images/customization/theme-color.svg"
                                            alt="img"></span><span>Theme 8</span></a>
                                <a href="#!" class="" data-value="preset-9"><span><img
                                            src="../assets/images/customization/theme-color.svg"
                                            alt="img"></span><span>Theme 9</span></a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item pc-boxcontainer">
                    <a class="btn border-0 text-start w-100" data-bs-toggle="collapse" href="#pctcustcollapse4">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <div class="avtar avtar-xs bg-light-primary">
                                    <i class="ti ti-border-inner f-18"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-1">Layout Width</h6>
                                <span>Choose fluid or container layout</span>
                            </div>
                            <i class="ti ti-chevron-down"></i>
                        </div>
                    </a>
                    <div class="collapse show" id="pctcustcollapse4">
                        <div class="pct-content">
                            <div class="theme-color themepreset-color boxwidthpreset theme-container">
                                <a href="#!" class="active" onclick="change_box_container('false')"
                                    data-value="false"><span><img src="../assets/images/customization/default.svg"
                                            alt="img"></span><span>Fluid</span></a>
                                <a href="#!" class="" onclick="change_box_container('true')"
                                    data-value="true"><span><img src="../assets/images/customization/container.svg"
                                            alt="img"></span><span>Container</span></a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <a class="btn border-0 text-start w-100" data-bs-toggle="collapse" href="#pctcustcollapse5">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <div class="avtar avtar-xs bg-light-primary">
                                    <i class="ti ti-typography f-18"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h6 class="mb-1">Font Family</h6>
                                <span>Choose your font family.</span>
                            </div>
                            <i class="ti ti-chevron-down"></i>
                        </div>
                    </a>
                    <div class="collapse show" id="pctcustcollapse5">
                        <div class="pct-content">
                            <div class="theme-color fontpreset-color">
                                <a href="#!" class="active" onclick="font_change('Public-Sans')"
                                    data-value="Public-Sans"><span>Aa</span><span>Public Sans</span></a>
                                <a href="#!" class="" onclick="font_change('Roboto')"
                                    data-value="Roboto"><span>Aa</span><span>Roboto</span></a>
                                <a href="#!" class="" onclick="font_change('Poppins')"
                                    data-value="Poppins"><span>Aa</span><span>Poppins</span></a>
                                <a href="#!" class="" onclick="font_change('Inter')"
                                    data-value="Inter"><span>Aa</span><span>Inter</span></a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="collapse show">
                        <div class="pct-content">
                            <div class="d-grid">
                                <button class="btn btn-light-danger" id="layoutreset">Reset Layout</button>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
</body>
<!-- [Body] end -->

</html>
