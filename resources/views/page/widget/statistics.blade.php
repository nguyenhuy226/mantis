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
                    <li class="breadcrumb-item" aria-current="page">Statistics</li>
                  </ul>
                </div>
                <div class="col-md-12">
                  <div class="page-header-title">
                    <h2 class="mb-0">Statistics</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- [ breadcrumb ] end -->
          <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-lg-3 col-md-6">
              <div class="card">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-8">
                      <h3 class="mb-1">$30200</h3>
                      <p class="text-muted mb-0">All Earnings</p>
                    </div>
                    <div class="col-4 text-end">
                      <i class="ti ti-chart-bar text-secondary f-36"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="card">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-8">
                      <h3 class="mb-1">145</h3>
                      <p class="text-muted mb-0">Task</p>
                    </div>
                    <div class="col-4 text-end">
                      <i class="ti ti-calendar-event text-danger f-36"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="card">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-8">
                      <h3 class="mb-1">290+</h3>
                      <p class="text-muted mb-0">Page Views</p>
                    </div>
                    <div class="col-4 text-end">
                      <i class="ti ti-file-text text-success f-36"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="card">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-8">
                      <h3 class="mb-1">500</h3>
                      <p class="text-muted mb-0">Downloads</p>
                    </div>
                    <div class="col-4 text-end">
                      <i class="ti ti-download text-primary f-36"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-3">
              <div class="card social-widget-card bg-primary">
                <div class="card-body">
                  <h3 class="text-white m-0">1165 +</h3>
                  <span class="m-t-10">Facebook Users</span>
                  <i class="fab fa-facebook"></i>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-3">
              <div class="card social-widget-card bg-info">
                <div class="card-body">
                  <h3 class="text-white m-0">780 +</h3>
                  <span class="m-t-10">Twitter Users</span>
                  <i class="fab fa-twitter"></i>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-3">
              <div class="card social-widget-card bg-dark">
                <div class="card-body">
                  <h3 class="text-white m-0">998 +</h3>
                  <span class="m-t-10">Linked In Users</span>
                  <i class="fab fa-linkedin-in"></i>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-3">
              <div class="card social-widget-card bg-danger">
                <div class="card-body">
                  <h3 class="text-white m-0">650 +</h3>
                  <span class="m-t-10">Youtube Videos</span>
                  <i class="fab fa-youtube"></i>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-md-12">
              <div class="card comp-card">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col">
                      <h5 class="m-b-20">Impressions</h5>
                      <h3>1,563</h3>
                      <p class="m-b-0">May 23 - June 01 (2018)</p>
                    </div>
                    <div class="col-auto">
                      <i class="ti ti-eye bg-light-primary text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-6">
              <div class="card comp-card">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col">
                      <h5 class="m-b-20">Goal</h5>
                      <h3>30,564</h3>
                      <p class="m-b-0">May 28 - June 01 (2018)</p>
                    </div>
                    <div class="col-auto">
                      <i class="ti ti-target bg-light-success text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-6">
              <div class="card comp-card">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col">
                      <h5 class="m-b-20">Impact</h5>
                      <h3>42.6%</h3>
                      <p class="m-b-0">May 30 - June 01 (2018)</p>
                    </div>
                    <div class="col-auto">
                      <i class="ti ti-clock bg-light-warning text-warning"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-xl-3">
              <div class="card">
                <div class="card-body">
                  <h6 class="mb-2 f-w-400 text-muted">Total Page Views</h6>
                  <h4 class="mb-3"
                    >4,42,236 <span class="badge bg-light-primary border border-primary"><i class="ti ti-trending-up"></i> 59.3%</span></h4
                  >
                  <p class="mb-0 text-muted text-sm">You made an extra <span class="text-primary">35,000</span> this year </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-3">
              <div class="card">
                <div class="card-body">
                  <h6 class="mb-2 f-w-400 text-muted">Total Users</h6>
                  <h4 class="mb-3"
                    >78,250 <span class="badge bg-light-success border border-success"><i class="ti ti-trending-up"></i> 70.5%</span></h4
                  >
                  <p class="mb-0 text-muted text-sm">You made an extra <span class="text-success">8,900</span> this year</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-3">
              <div class="card">
                <div class="card-body">
                  <h6 class="mb-2 f-w-400 text-muted">Total Order</h6>
                  <h4 class="mb-3"
                    >18,800 <span class="badge bg-light-warning border border-warning"><i class="ti ti-trending-down"></i> 27.4%</span></h4
                  >
                  <p class="mb-0 text-muted text-sm">You made an extra <span class="text-warning">1,943</span> this year</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-3">
              <div class="card">
                <div class="card-body">
                  <h6 class="mb-2 f-w-400 text-muted">Total Sales</h6>
                  <h4 class="mb-3"
                    >$35,078 <span class="badge bg-light-danger border border-danger"><i class="ti ti-trending-down"></i> 27.4%</span></h4
                  >
                  <p class="mb-0 text-muted text-sm">You made an extra <span class="text-danger">$20,395</span> this year </p>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card bg-success text-white widget-visitor-card">
                <div class="card-body text-center">
                  <h2 class="text-white">1,658</h2>
                  <p class="text-white mb-0">Daily user</p>
                  <i class="ti ti-users d-block f-46 text-white"></i>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card bg-primary text-white widget-visitor-card">
                <div class="card-body text-center">
                  <h2 class="text-white">1K</h2>
                  <p class="text-white mb-0">Daily page view</p>
                  <i class="ti ti-world d-block f-46 text-white"></i>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card bg-danger text-white widget-visitor-card">
                <div class="card-body text-center">
                  <h2 class="text-white">5,678</h2>
                  <p class="text-white mb-0">Last month visitor</p>
                  <i class="ti ti-calendar-stats d-block f-46 text-white"></i>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="card">
                <div class="row g-0">
                  <div class="col-md-6">
                    <div class="card-body bg-primary position-relative h-100">
                      <h6 class="text-white">What would you want to learn today</h6>
                      <p class="text-white text-sm mb-4">Your learning capacity is 80% as daily analytics</p>
                      <div class="row align-items-end">
                        <div class="col-7">
                          <h4 class="text-white">35% Completed</h4>
                          <div class="progress bg-light-success">
                            <div class="progress-bar bg-success" style="width: 40%"></div>
                          </div>
                        </div>
                        <div class="col-5">
                          <img src="../assets/images/widget/reader.svg" alt="img" class="img-fluid img-reader">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card-body">
                      <p class="mb-2">Get started with new basic skills</p>
                      <p class="text-muted mb-3">Last Date 5th Nov 2020</p>
                      <hr class="my-3">
                      <div class="d-flex align-items-center justify-content-between my-3">
                        <div class="user-group">
                          <img src="../assets/images/user/avatar-1.jpg" alt="image">
                          <img src="../assets/images/user/avatar-2.jpg" alt="image">
                          <img src="../assets/images/user/avatar-3.jpg" alt="image">
                        </div>
                        <a href="#" class="avtar avtar-xs btn btn-primary">
                          <i class="ti ti-plus f-18"></i>
                        </a>
                      </div>
                      <p class="text-muted text-sm mb-0">Chrome fixed the bug several versions ago, thus rendering this... </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="card">
                <div class="card-body">
                  <div class="row align-items-center my-2">
                    <div class="col-5">
                      <p class="mb-0">Published Project</p>
                    </div>
                    <div class="col">
                      <div class="progress progress-primary">
                        <div class="progress-bar" style="width: 30%"></div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <p class="mb-0 text-sm text-muted">30%</p>
                    </div>
                  </div>
                  <div class="row align-items-center my-2">
                    <div class="col-5">
                      <p class="mb-0">Completed Task</p>
                    </div>
                    <div class="col">
                      <div class="progress progress-success">
                        <div class="progress-bar" style="width: 90%"></div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <p class="mb-0 text-sm text-muted">90%</p>
                    </div>
                  </div>
                  <div class="row align-items-center my-2">
                    <div class="col-5">
                      <p class="mb-0">Pending Task</p>
                    </div>
                    <div class="col">
                      <div class="progress progress-danger">
                        <div class="progress-bar" style="width: 50%"></div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <p class="mb-0 text-sm text-muted">50%</p>
                    </div>
                  </div>
                  <div class="row align-items-center my-2">
                    <div class="col-5">
                      <p class="mb-0">Issues</p>
                    </div>
                    <div class="col">
                      <div class="progress progress-warning">
                        <div class="progress-bar" style="width: 55%"></div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <p class="mb-0 text-sm text-muted">55%</p>
                    </div>
                  </div>
                  <hr class="my-4">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <img src="../assets/images/widget/target.svg" alt="img" class="img-fluid">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h6>Income Salaries & Budget</h6>
                      <p class="text-muted mb-0">All your income salaries and budget comes here, you can track them or manage them</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- [ Main Content ] end -->
      </div>
      <!-- [ Main Content ] end -->
@endsection
