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
                    <li class="breadcrumb-item" aria-current="page">Data</li>
                  </ul>
                </div>
                <div class="col-md-12">
                  <div class="page-header-title">
                    <h2 class="mb-0">Data</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- [ breadcrumb ] end -->
          <div class="row">
            <div class="col-xl-4 col-md-12">
              <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                  <h5>To Do List</h5>
                  <a href="#" class="avtar avtar-xs btn btn-link-primary">
                    <i class="ti ti-circle-plus f-18"></i>
                  </a>
                </div>
                <div class="card-body widget-last-task">
                  <div class="new-task">
                    <div class="to-do-list mb-3">
                      <div class="d-inline-block">
                        <div class="check-task form-check">
                          <input type="checkbox" class="form-check-input" id="customCheck1" checked>
                          <label class="form-check-label" for="customCheck1">Check your Email</label>
                        </div>
                      </div>
                      <div class="float-end"
                        ><a href="#" class="delete_todolist"><i class="far fa-trash-alt"></i></a
                      ></div>
                    </div>
                    <div class="to-do-list mb-3">
                      <div class="d-inline-block">
                        <div class="check-task form-check">
                          <input type="checkbox" class="form-check-input" id="customCheck2" checked>
                          <label class="form-check-label" for="customCheck2">Make YouTube Video</label>
                        </div>
                      </div>
                      <div class="float-end"
                        ><a href="#" class="delete_todolist"><i class="far fa-trash-alt"></i></a
                      ></div>
                    </div>
                    <div class="to-do-list mb-3">
                      <div class="d-inline-block">
                        <div class="check-task form-check">
                          <input type="checkbox" class="form-check-input" id="customCheck3" checked>
                          <label class="form-check-label" for="customCheck3">Create Banner</label>
                        </div>
                      </div>
                      <div class="float-end"
                        ><a href="#" class="delete_todolist"><i class="far fa-trash-alt"></i></a
                      ></div>
                    </div>
                    <div class="to-do-list mb-3">
                      <div class="d-inline-block">
                        <div class="check-task form-check">
                          <input type="checkbox" class="form-check-input" id="customCheck4">
                          <label class="form-check-label" for="customCheck4">Upload Project</label>
                        </div>
                      </div>
                      <div class="float-end"
                        ><a href="#" class="delete_todolist"><i class="far fa-trash-alt"></i></a
                      ></div>
                    </div>
                    <div class="to-do-list mb-3">
                      <div class="d-inline-block">
                        <div class="check-task form-check">
                          <input type="checkbox" class="form-check-input" id="customCheck5">
                          <label class="form-check-label" for="customCheck5">Update Task</label>
                        </div>
                      </div>
                      <div class="float-end"
                        ><a href="#" class="delete_todolist"><i class="far fa-trash-alt"></i></a
                      ></div>
                    </div>
                    <div class="to-do-list mb-3">
                      <div class="d-inline-block">
                        <div class="check-task form-check">
                          <input type="checkbox" class="form-check-input" id="customCheck51">
                          <label class="form-check-label" for="customCheck51">Deploy Project</label>
                        </div>
                      </div>
                      <div class="float-end"
                        ><a href="#" class="delete_todolist"><i class="far fa-trash-alt"></i></a
                      ></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-6">
              <div class="card trafic-card">
                <div class="card-header">
                  <h5>Traffic Sources</h5>
                </div>
                <div class="card-body">
                  <p class="m-b-10"
                    >Social <span class="float-end"><i class="fa fa-caret-down m-r-10"></i>58</span></p
                  >
                  <div class="progress progress-primary">
                    <div class="progress-bar" style="width: 50%"></div>
                  </div>
                  <p class="m-b-10 m-t-30"
                    >Referral <span class="float-end"><i class="fa fa-caret-up m-r-10"></i>20%</span>
                  </p>
                  <div class="progress progress-danger">
                    <div class="progress-bar" style="width: 20%"></div>
                  </div>
                  <p class="m-b-10 m-t-30"
                    >Bounce <span class="float-end"><i class="fa fa-caret-down m-r-10"></i>580</span>
                  </p>
                  <div class="progress progress-warning">
                    <div class="progress-bar" style="width: 40%"></div>
                  </div>
                  <p class="m-b-10 m-t-30"
                    >Internet <span class="float-end"><i class="fa fa-caret-up m-r-10"></i>70%</span>
                  </p>
                  <div class="progress progress-info">
                    <div class="progress-bar" style="width: 90%"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-6">
              <div class="card user-activity-card">
                <div class="card-header d-flex align-items-center justify-content-between">
                  <h5>Team Members</h5>
                  <a href="#" class="link-primary">View all</a>
                </div>
                <div class="card-body">
                  <div class="row align-items-center mb-4">
                    <div class="col-auto p-r-0">
                      <div class="u-img">
                        <img src="../assets/images/user/avatar-4.jpg" alt="user image" class="img-radius cover-img">
                      </div>
                    </div>
                    <div class="col">
                      <a href="#!">
                        <h5 class="m-b-5">David Jones</h5>
                      </a>
                      <p class="text-muted text-sm mb-0">Project Leader</p>
                    </div>
                    <div class="col-auto">
                      <p class="text-muted text-sm m-b-0">5 min ago</p>
                    </div>
                  </div>
                  <div class="row align-items-center mb-4">
                    <div class="col-auto p-r-0">
                      <div class="u-img">
                        <img src="../assets/images/user/avatar-3.jpg" alt="user image" class="img-radius cover-img">
                      </div>
                    </div>
                    <div class="col">
                      <a href="#!">
                        <h5 class="m-b-5">David Jones</h5>
                      </a>
                      <p class="text-muted text-sm mb-0">HR Manager</p>
                    </div>
                    <div class="col-auto">
                      <p class="text-muted text-sm m-b-0">1 min ago</p>
                    </div>
                  </div>
                  <div class="row align-items-center mb-4">
                    <div class="col-auto p-r-0">
                      <div class="u-img">
                        <img src="../assets/images/user/avatar-2.jpg" alt="user image" class="img-radius cover-img">
                      </div>
                    </div>
                    <div class="col">
                      <a href="#!">
                        <h5 class="m-b-5">David Jones</h5>
                      </a>
                      <p class="text-muted text-sm mb-0">Developer</p>
                    </div>
                    <div class="col-auto">
                      <p class="text-muted text-sm m-b-0">Yesterday</p>
                    </div>
                  </div>
                  <div class="row align-items-center">
                    <div class="col-auto p-r-0">
                      <div class="u-img">
                        <img src="../assets/images/user/avatar-1.jpg" alt="user image" class="img-radius cover-img">
                      </div>
                    </div>
                    <div class="col">
                      <a href="#!">
                        <h5 class="m-b-5">David Jones</h5>
                      </a>
                      <p class="text-muted text-sm mb-0">UI/UX Designer</p>
                    </div>
                    <div class="col-auto">
                      <p class="text-muted text-sm m-b-0">02-05-2021</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-6 col-md-12">
              <div class="card latest-update-card">
                <div class="card-header d-flex align-items-center justify-content-between">
                  <h5>Latest Updates</h5>
                  <a href="#" class="link-primary">View all</a>
                </div>
                <div class="card-body">
                  <div class="latest-update-box">
                    <div class="row p-t-20 p-b-30">
                      <div class="col-auto text-end update-meta">
                        <p class="text-muted m-b-0 d-inline-flex">2 hrs ago</p>
                        <i class="feather icon-twitter bg-info update-icon"></i>
                      </div>
                      <div class="col">
                        <a href="#!">
                          <h6>+ 1652 Followers</h6>
                        </a>
                        <p class="text-muted m-b-0">You�re getting more and more followers, keep it up!</p>
                      </div>
                    </div>
                    <div class="row p-b-30">
                      <div class="col-auto text-end update-meta">
                        <p class="text-muted m-b-0 d-inline-flex">4 hrs ago</p>
                        <i class="feather icon-briefcase bg-danger update-icon"></i>
                      </div>
                      <div class="col">
                        <a href="#!">
                          <h6>+ 5 New Products were added!</h6>
                        </a>
                        <p class="text-muted m-b-0">Congratulations!</p>
                      </div>
                    </div>
                    <div class="row p-b-30">
                      <div class="col-auto text-end update-meta">
                        <p class="text-muted m-b-0 d-inline-flex">1 day ago</p>
                        <i class="feather icon-check f-w-600 bg-success update-icon"></i>
                      </div>
                      <div class="col">
                        <a href="#!">
                          <h6>Database backup completed!</h6>
                        </a>
                        <p class="text-muted m-b-0"
                          >Download the <span class="text-primary"> <a href="#!" class="text-primary">latest backup</a> </span>.</p
                        >
                      </div>
                    </div>
                    <div class="row p-b-0">
                      <div class="col-auto text-end update-meta">
                        <p class="text-muted m-b-0 d-inline-flex">2 day ago</p>
                        <i class="feather icon-facebook bg-primary update-icon"></i>
                      </div>
                      <div class="col">
                        <a href="#!">
                          <h6>+2 Friend Requests</h6>
                        </a>
                        <p class="text-muted m-b-10">This is great, keep it up!</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-md-12">
              <div class="card user-activity-card">
                <div class="card-header d-flex align-items-center justify-content-between">
                  <h5>User Activity</h5>
                  <a href="#" class="link-primary">View all</a>
                </div>
                <div class="card-body">
                  <div class="row mb-4">
                    <div class="col-auto p-r-0">
                      <div class="u-img">
                        <img src="../assets/images/user/avatar-4.jpg" alt="user image" class="img-radius cover-img">
                        <span class="profile-img text-danger"><i class="fas fa-circle"></i></span>
                      </div>
                    </div>
                    <div class="col">
                      <div class="float-end">
                        <p class="text-muted text-sm m-b-0">now <i class="ti ti-clock"></i></p>
                      </div>
                      <a href="#!">
                        <h5 class="m-b-5">John Deo</h5>
                      </a>
                      <p class="text-muted text-sm mb-0">Lorem Ipsum is simply dummy text.</p>
                    </div>
                  </div>
                  <div class="row mb-4">
                    <div class="col-auto p-r-0">
                      <div class="u-img">
                        <img src="../assets/images/user/avatar-3.jpg" alt="user image" class="img-radius cover-img">
                        <span class="profile-img text-success"><i class="fas fa-circle"></i></span>
                      </div>
                    </div>
                    <div class="col">
                      <div class="float-end">
                        <p class="text-muted text-sm m-b-0">2 min ago <i class="ti ti-clock"></i></p>
                      </div>
                      <a href="#!">
                        <h5 class="m-b-5">John Deo</h5>
                      </a>
                      <p class="text-muted text-sm mb-0">Lorem Ipsum is simply dummy text.</p>
                    </div>
                  </div>
                  <div class="row mb-4">
                    <div class="col-auto p-r-0">
                      <div class="u-img">
                        <img src="../assets/images/user/avatar-1.jpg" alt="user image" class="img-radius cover-img">
                        <span class="profile-img text-primary"><i class="fas fa-circle"></i></span>
                      </div>
                    </div>
                    <div class="col">
                      <div class="float-end">
                        <p class="text-muted text-sm m-b-0">1 day ago <i class="ti ti-clock"></i></p>
                      </div>
                      <a href="#!">
                        <h5 class="m-b-5">John Deo</h5>
                      </a>
                      <p class="text-muted text-sm mb-0">Lorem Ipsum is simply dummy text.</p>
                    </div>
                  </div>
                  <div class="row mb-4">
                    <div class="col-auto p-r-0">
                      <div class="u-img">
                        <img src="../assets/images/user/avatar-2.jpg" alt="user image" class="img-radius cover-img">
                        <span class="profile-img text-warning"><i class="fas fa-circle"></i></span>
                      </div>
                    </div>
                    <div class="col">
                      <div class="float-end">
                        <p class="text-muted text-sm m-b-0">3 week ago <i class="ti ti-clock"></i></p>
                      </div>
                      <a href="#!">
                        <h5 class="m-b-5">John Deo</h5>
                      </a>
                      <p class="text-muted text-sm mb-0">Lorem Ipsum is simply dummy text.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-6 col-md-12">
              <div class="card table-card">
                <div class="card-header d-flex align-items-center justify-content-between">
                  <h5>Projects</h5>
                  <a href="#" class="link-primary">View all</a>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th> Assigned </th>
                          <th>Name</th>
                          <th>Due Date</th>
                          <th class="text-end">Priority</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="d-inline-block align-middle">
                              <img src="../assets/images/user/avatar-4.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                              <div class="d-inline-block">
                                <h6>John Deo</h6>
                                <p class="text-muted m-b-0">Graphics Designer</p>
                              </div>
                            </div>
                          </td>
                          <td>Able Pro</td>
                          <td>Jun, 26</td>
                          <td class="text-end"><label class="badge bg-light-danger">Low</label></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-inline-block align-middle">
                              <img src="../assets/images/user/avatar-2.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                              <div class="d-inline-block">
                                <h6>Jenifer Vintage</h6>
                                <p class="text-muted m-b-0">Web Designer</p>
                              </div>
                            </div>
                          </td>
                          <td>Mashable</td>
                          <td>March, 31</td>
                          <td class="text-end"><label class="badge bg-light-primary">high</label></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-inline-block align-middle">
                              <img src="../assets/images/user/avatar-3.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                              <div class="d-inline-block">
                                <h6>William Jem</h6>
                                <p class="text-muted m-b-0">Developer</p>
                              </div>
                            </div>
                          </td>
                          <td>Flatable</td>
                          <td>Aug, 02</td>
                          <td class="text-end"><label class="badge bg-light-success">medium</label></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-inline-block align-middle">
                              <img src="../assets/images/user/avatar-2.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                              <div class="d-inline-block">
                                <h6>David Jones</h6>
                                <p class="text-muted m-b-0">Developer</p>
                              </div>
                            </div>
                          </td>
                          <td>Guruable</td>
                          <td>Sep, 22</td>
                          <td class="text-end"><label class="badge bg-light-primary">high</label></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="text-end m-r-20">
                    <a href="#!" class="b-b-primary text-primary">View all Projects</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-md-12">
              <div class="card">
                <div class="card-header">
                  <h5>Product Sales</h5>
                </div>
                <div class="card-body">
                  <div class="row mb-3">
                    <div class="col">
                      <span class="text-muted">Earning Product</span>
                      <h4 class="mt-2">20,569<span class="ms-2">$</span></h4>
                    </div>
                    <div class="col">
                      <span class="text-muted">Yesterday</span>
                      <h4 class="mt-2">580<span class="ms-2">$</span></h4>
                    </div>
                    <div class="col">
                      <span class="text-muted">This Week</span>
                      <h4 class="mt-2">5,789<span class="ms-2">$</span></h4>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <div class="sale-scroll" style="height: 215px; position: relative">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Last Sales</th>
                            <th>Name Product</th>
                            <th>Price</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <h6 class="mb-1 text-success">2136</h6>
                            </td>
                            <td>HeadPhone</td>
                            <td>
                              <h6 class="mb-1 text-success">$ 926.23</h6>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <h6 class="mb-1 text-danger">2546</h6>
                            </td>
                            <td>Iphone 6</td>
                            <td>
                              <h6 class="mb-1 text-danger">$ 485.85</h6>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <h6 class="mb-1 text-primary">2681</h6>
                            </td>
                            <td>Jacket</td>
                            <td>
                              <h6 class="mb-1 text-primary">$ 786.4</h6>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <h6 class="mb-1 text-info">2756</h6>
                            </td>
                            <td>HeadPhone</td>
                            <td>
                              <h6 class="mb-1 text-info">$ 563.45</h6>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <h6 class="mb-1 text-danger">8765</h6>
                            </td>
                            <td>Sofa</td>
                            <td>
                              <h6 class="mb-1 text-danger">$ 769.45</h6>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <h6 class="mb-1 text-warning">3652</h6>
                            </td>
                            <td>Iphone 7</td>
                            <td>
                              <h6 class="mb-1 text-warning">$ 754.45</h6>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <h6 class="mb-1 text-success">7456</h6>
                            </td>
                            <td>Jacket</td>
                            <td>
                              <h6 class="mb-1 text-success">$ 743.23</h6>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-12">
              <div class="card task-card">
                <div class="card-header d-flex align-items-center justify-content-between">
                  <h5>Tasks</h5>
                  <a href="#" class="link-primary">View all</a>
                </div>
                <div class="card-body">
                  <ul class="list-unstyled task-list">
                    <li>
                      <i class="feather icon-check f-w-600 task-icon bg-success"></i>
                      <p class="m-b-5">8:50</p>
                      <h5 class="text-muted"
                        >Call to customer <span class="text-primary"> <a href="#!" class="text-primary">Jacob</a> </span> and discuss the</h5
                      >
                    </li>
                    <li>
                      <i class="task-icon bg-primary"></i>
                      <p class="m-b-5">Sat, 5 Mar</p>
                      <h5 class="text-muted">Design mobile Application</h5>
                    </li>
                    <li>
                      <i class="task-icon bg-danger"></i>
                      <p class="m-b-5">Sun, 17 Feb</p>
                      <h5 class="text-muted"
                        ><span class="text-primary"><a href="#!" class="text-primary">Jeny</a></span>
                        assign you a task
                        <span class="text-primary"><a href="#!" class="text-primary">Mockup Design.</a></span>
                      </h5>
                    </li>
                    <li>
                      <i class="task-icon bg-warning"></i>
                      <p class="m-b-5">Sat, 18 Mar</p>
                      <h5 class="text-muted">Design logo</h5>
                    </li>
                    <li class="p-b-15 m-b-10">
                      <i class="task-icon bg-success"></i>
                      <p class="m-b-5">Sat, 22 Mar</p>
                      <h5 class="text-muted">Design mobile Application</h5>
                    </li>
                  </ul>
                  <div class="text-end">
                    <a href="#!" class="b-b-primary text-primary">View Friend List</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-8 col-md-12">
              <div class="card table-card">
                <div class="card-header d-flex align-items-center justify-content-between">
                  <h5>Application Sales</h5>
                  <a href="#" class="link-primary">View all</a>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover mb-0 table-borderless">
                      <thead>
                        <tr>
                          <th>Application</th>
                          <th>Sales</th>
                          <th>Avg Price</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="d-inline-block align-middle">
                              <h5>Able Pro</h5>
                              <p class="text-muted m-b-0">Powerful Admin Theme</p>
                            </div>
                          </td>
                          <td>16,300</td>
                          <td>$53</td>
                          <td class="text-primary">$15,652</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-inline-block align-middle">
                              <h5>Photoshop</h5>
                              <p class="text-muted m-b-0">Design Software</p>
                            </div>
                          </td>
                          <td>26,421</td>
                          <td>$35</td>
                          <td class="text-primary">$18,785</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-inline-block align-middle">
                              <h5>Guruable</h5>
                              <p class="text-muted m-b-0">Best Admin Template</p>
                            </div>
                          </td>
                          <td>8,265</td>
                          <td>$98</td>
                          <td class="text-primary">$9,652</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-inline-block align-middle">
                              <h5>Flatable</h5>
                              <p class="text-muted m-b-0">Admin App</p>
                            </div>
                          </td>
                          <td>10,652</td>
                          <td>$20</td>
                          <td class="text-primary">$7,856</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="text-center">
                    <a href="#!" class="b-b-primary text-primary">View all Projects</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-8 col-md-12">
              <div class="card table-card">
                <div class="card-header d-flex align-items-center justify-content-between">
                  <h5>Active Tickets</h5>
                  <a href="#" class="link-primary">View all</a>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover table-borderless">
                      <thead>
                        <tr>
                          <th>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="tablcheck1">
                              <label class="form-check-label" for="tablcheck1"> Due </label>
                            </div>
                          </th>
                          <th>User</th>
                          <th>Description</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="tablcheck2">
                              <label class="form-check-label" for="tablcheck2">
                                <span class="mb-0 h5">12</span>
                                <span class="text-muted m-b-0">hours</span>
                              </label>
                            </div>
                          </td>
                          <td>
                            <div class="d-inline-block align-middle">
                              <img src="../assets/images/user/avatar-4.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                              <div class="d-inline-block">
                                <h5 class="text-muted m-b-0 m-t-15">John Deo</h5>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="d-inline-block align-middle">
                              <h5>[#1183] Workaround for OS X selects printing bug</h5>
                              <p class="text-muted m-b-0">Chrome fixed the bug several versions ago, thus rendering this... </p>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="tablcheck3">
                              <label class="form-check-label" for="tablcheck3">
                                <span class="mb-0 h5">16</span>
                                <span class="text-muted m-b-0">hours</span>
                              </label>
                            </div>
                          </td>
                          <td>
                            <div class="d-inline-block align-middle">
                              <img src="../assets/images/user/avatar-3.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                              <div class="d-inline-block">
                                <h5 class="text-muted m-b-0 m-t-15">Jems Win</h5>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="d-inline-block align-middle">
                              <h5>[#1249] Vertically center carousel controls</h5>
                              <p class="text-muted m-b-0">Try any carousel control and reduce the screen width below...</p>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="tablcheck4">
                              <label class="form-check-label" for="tablcheck4">
                                <span class="mb-0 h5">40</span>
                                <span class="text-muted m-b-0">hours</span>
                              </label>
                            </div>
                          </td>
                          <td>
                            <div class="d-inline-block align-middle">
                              <img src="../assets/images/user/avatar-2.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                              <div class="d-inline-block">
                                <h5 class="text-muted m-b-0 m-t-15">Jeny Wiliiam</h5>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="d-inline-block align-middle">
                              <h5>[#1254] Inaccurate small pagination height</h5>
                              <p class="text-muted m-b-0">The height of pagination elements is not consistent with...</p>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="tablcheck41">
                              <label class="form-check-label" for="tablcheck41">
                                <span class="mb-0 h5">16</span>
                                <span class="text-muted m-b-0">hours</span>
                              </label>
                            </div>
                          </td>
                          <td>
                            <div class="d-inline-block align-middle">
                              <img src="../assets/images/user/avatar-3.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                              <div class="d-inline-block">
                                <h5 class="text-muted m-b-0 m-t-15">Jems Win</h5>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="d-inline-block align-middle">
                              <h5>[#1249] Vertically center carousel controls</h5>
                              <p class="text-muted m-b-0">Try any carousel control and reduce the screen width below...</p>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="text-end m-r-20">
                    <a href="#!" class="b-b-primary text-primary">View all Projects</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-12">
              <div class="card latest-posts-card">
                <div class="card-header d-flex align-items-center justify-content-between">
                  <h5>Latest Posts</h5>
                  <a href="#" class="link-primary">View all</a>
                </div>
                <div class="card-body">
                  <div class="row m-b-30">
                    <div class="col-auto p-r-0">
                      <img src="../assets/images/widget/dashborad-1.jpg" alt="user image" class="latest-posts-img">
                    </div>
                    <div class="col">
                      <a href="#!">
                        <h5>Up unpacked friendly</h5>
                      </a>
                      <p class="text-muted m-b-10"><i class="fa fa-play-circle-o"></i> Video | 14 minutes ago </p>
                      <p class="text-muted m-b-0">Lorem Ipsum is simply dummy text of the.</p>
                    </div>
                  </div>
                  <div class="row m-b-30">
                    <div class="col-auto p-r-0">
                      <iframe class="embed-responsive-item latest-posts-img" src="//www.youtube.com/embed/b0fI60sBMV0"></iframe>
                    </div>
                    <div class="col">
                      <a href="#!">
                        <h5>Up unpacked friendly</h5>
                      </a>
                      <p class="text-muted m-b-10"><i class="fa fa-play-circle-o"></i> tutorials | 14 minutes ago</p>
                      <p class="text-muted m-b-0">Lorem Ipsum is simply dummy text of the.</p>
                    </div>
                  </div>
                  <div class="row m-b-30">
                    <div class="col-auto p-r-0">
                      <img src="../assets/images/widget/dashborad-3.jpg" alt="user image" class="latest-posts-img">
                    </div>
                    <div class="col">
                      <a href="#!">
                        <h5>Up unpacked friendly</h5>
                      </a>
                      <p class="text-muted m-b-10"><i class="fa fa-play-circle-o"></i> Video | 14 minutes ago </p>
                      <p class="text-muted m-b-0">Lorem Ipsum is simply dummy text of the.</p>
                    </div>
                  </div>
                  <div class="text-center">
                    <a href="#!" class="b-b-primary text-primary">View Friend List</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-md-12">
              <div class="card feed-card">
                <div class="card-header d-flex align-items-center justify-content-between">
                  <h5>Feeds</h5>
                  <a href="#" class="link-primary">View all</a>
                </div>
                <div class="feed-scroll" style="height: 460px; position: relative">
                  <div class="card-body">
                    <div class="row m-b-25 align-items-center">
                      <div class="col-auto p-r-0">
                        <i class="feather icon-bell bg-light-primary feed-icon"></i>
                      </div>
                      <div class="col">
                        <a href="#!">
                          <h6 class="m-b-5">You have 3 pending tasks. <span class="text-muted float-end f-14">Just Now</span></h6>
                        </a>
                      </div>
                    </div>
                    <div class="row m-b-25 align-items-center">
                      <div class="col-auto p-r-0">
                        <i class="feather icon-shopping-cart bg-light-danger feed-icon"></i>
                      </div>
                      <div class="col">
                        <a href="#!">
                          <h6 class="m-b-5">New order received <span class="text-muted float-end f-14">30 min ago</span> </h6>
                        </a>
                      </div>
                    </div>
                    <div class="row m-b-25 align-items-center">
                      <div class="col-auto p-r-0">
                        <i class="feather icon-file-text bg-light-success feed-icon"></i>
                      </div>
                      <div class="col">
                        <a href="#!">
                          <h6 class="m-b-5">You have 3 pending tasks. <span class="text-muted float-end f-14">Just Now</span></h6>
                        </a>
                      </div>
                    </div>
                    <div class="row m-b-25 align-items-center">
                      <div class="col-auto p-r-0">
                        <i class="feather icon-bell bg-light-primary feed-icon"></i>
                      </div>
                      <div class="col">
                        <a href="#!">
                          <h6 class="m-b-5">You have 4 tasks Done. <span class="text-muted float-end f-14">1 hours ago</span></h6>
                        </a>
                      </div>
                    </div>
                    <div class="row m-b-25 align-items-center">
                      <div class="col-auto p-r-0">
                        <i class="feather icon-file-text bg-light-success feed-icon"></i>
                      </div>
                      <div class="col">
                        <a href="#!">
                          <h6 class="m-b-5">You have 2 pending tasks. <span class="text-muted float-end f-14">Just Now</span></h6>
                        </a>
                      </div>
                    </div>
                    <div class="row m-b-25 align-items-center">
                      <div class="col-auto p-r-0">
                        <i class="feather icon-shopping-cart bg-light-danger feed-icon"></i>
                      </div>
                      <div class="col">
                        <a href="#!">
                          <h6 class="m-b-5">New order received <span class="text-muted float-end f-14">4 hours ago</span> </h6>
                        </a>
                      </div>
                    </div>
                    <div class="row m-b-25 align-items-center">
                      <div class="col-auto p-r-0">
                        <i class="feather icon-shopping-cart bg-light-danger feed-icon"></i>
                      </div>
                      <div class="col">
                        <a href="#!">
                          <h6 class="m-b-5">New order Done <span class="text-muted float-end f-14">Just Now</span></h6>
                        </a>
                      </div>
                    </div>
                    <div class="row m-b-25 align-items-center">
                      <div class="col-auto p-r-0">
                        <i class="feather icon-file-text bg-light-success feed-icon"></i>
                      </div>
                      <div class="col">
                        <a href="#!">
                          <h6 class="m-b-5">You have 5 pending tasks. <span class="text-muted float-end f-14">5 hours ago</span></h6>
                        </a>
                      </div>
                    </div>
                    <div class="row m-b-0 align-items-center">
                      <div class="col-auto p-r-0">
                        <i class="feather icon-bell bg-light-primary feed-icon"></i>
                      </div>
                      <div class="col">
                        <a href="#!">
                          <h6 class="m-b-5">You have 4 tasks Done. <span class="text-muted float-end f-14">2 hours ago</span></h6>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-8 col-md-12">
              <div class="card table-card">
                <div class="card-header d-flex align-items-center justify-content-between">
                  <h5>Latest Customers</h5>
                  <a href="#" class="link-primary">View all</a>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover table-borderless">
                      <thead>
                        <tr>
                          <th></th>
                          <th>Country</th>
                          <th>Name</th>
                          <th class="text-end">Average</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><img src="../assets/images/widget/GERMANY.jpg" alt="" class="img-fluid wid-30"></td>
                          <td>Germany</td>
                          <td>Angelina Jolly</td>
                          <td class="text-end">56.23%</td>
                        </tr>
                        <tr>
                          <td><img src="../assets/images/widget/USA.jpg" alt="" class="img-fluid wid-30"> </td>
                          <td>USA</td>
                          <td>John Deo</td>
                          <td class="text-end">25.23%</td>
                        </tr>
                        <tr>
                          <td><img src="../assets/images/widget/AUSTRALIA.jpg" alt="" class="img-fluid wid-30"></td>
                          <td>Australia</td>
                          <td>Jenifer Vintage</td>
                          <td class="text-end">12.45%</td>
                        </tr>
                        <tr>
                          <td><img src="../assets/images/widget/UK.jpg" alt="" class="img-fluid wid-30"> </td>
                          <td>United Kingdom</td>
                          <td>Lori Moore</td>
                          <td class="text-end">8.65%</td>
                        </tr>
                        <tr>
                          <td><img src="../assets/images/widget/BRAZIL.jpg" alt="" class="img-fluid wid-30"></td>
                          <td>Brazil</td>
                          <td>Allan D�croze</td>
                          <td class="text-end">3.56%</td>
                        </tr>
                        <tr>
                          <td><img src="../assets/images/widget/AUSTRALIA.jpg" alt="" class="img-fluid wid-30"></td>
                          <td>Australia</td>
                          <td>Jenifer Vintage</td>
                          <td class="text-end">12.45%</td>
                        </tr>
                        <tr>
                          <td><img src="../assets/images/widget/USA.jpg" alt="" class="img-fluid wid-30"> </td>
                          <td>USA</td>
                          <td>John Deo</td>
                          <td class="text-end">25.23%</td>
                        </tr>
                        <tr>
                          <td><img src="../assets/images/widget/UK.jpg" alt="" class="img-fluid wid-30"> </td>
                          <td>United Kingdom</td>
                          <td>Lori Moore</td>
                          <td class="text-end">8.65%</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="text-end m-r-20">
                    <a href="#!" class="b-b-primary text-primary">View all Latest Customers</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <div class="card table-card latest-activity-card">
                <div class="card-header d-flex align-items-center justify-content-between">
                  <h5>Latest Order</h5>
                  <a href="#" class="link-primary">View all</a>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover table-borderless">
                      <thead>
                        <tr>
                          <th>Customer</th>
                          <th>Order ID</th>
                          <th>Photo</th>
                          <th>Product</th>
                          <th>Quantity</th>
                          <th>Date</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>John Deo</td>
                          <td>#81412314</td>
                          <td><img src="../assets/images/widget/PHONE1.jpg" alt="" class="img-fluid"></td>
                          <td>Moto G5</td>
                          <td>10</td>
                          <td>17-2-2017</td>
                          <td><label class="badge bg-light-warning">Pending</label></td>
                          <td
                            ><a href="#!"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-success"></i></a
                            ><a href="#!"><i class="feather icon-trash-2 f-w-600 f-16 text-danger"></i></a
                          ></td>
                        </tr>
                        <tr>
                          <td>Jenny William</td>
                          <td>#68457898</td>
                          <td><img src="../assets/images/widget/PHONE2.jpg" alt="" class="img-fluid"></td>
                          <td>iPhone 8</td>
                          <td>16</td>
                          <td>20-2-2017</td>
                          <td><label class="badge bg-light-primary">Paid</label></td>
                          <td
                            ><a href="#!"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-success"></i></a
                            ><a href="#!"><i class="feather icon-trash-2 f-w-600 f-16 text-danger"></i></a
                          ></td>
                        </tr>
                        <tr>
                          <td>Lori Moore</td>
                          <td>#45457898</td>
                          <td><img src="../assets/images/widget/PHONE3.jpg" alt="" class="img-fluid"></td>
                          <td>Redmi 4</td>
                          <td>20</td>
                          <td>17-2-2017</td>
                          <td><label class="badge bg-light-success">Success</label></td>
                          <td
                            ><a href="#!"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-success"></i></a
                            ><a href="#!"><i class="feather icon-trash-2 f-w-600 f-16 text-danger"></i></a
                          ></td>
                        </tr>
                        <tr>
                          <td>Austin Pena</td>
                          <td>#62446232</td>
                          <td><img src="../assets/images/widget/PHONE4.jpg" alt="" class="img-fluid"></td>
                          <td>Jio</td>
                          <td>15</td>
                          <td>25-4-2017</td>
                          <td><label class="badge bg-light-danger">Failed</label></td>
                          <td
                            ><a href="#!"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-success"></i></a
                            ><a href="#!"><i class="feather icon-trash-2 f-w-600 f-16 text-danger"></i></a
                          ></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="text-end m-r-20">
                    <a href="#!" class="b-b-primary text-primary">View all Orders</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-md-6">
              <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                  <h5>Incoming Requests</h5>
                  <a href="#" class="link-primary">View all</a>
                </div>
                <div class="card-body p-0 income-scroll" style="height: 265px; position: relative">
                  <div class="mt-3 mb-3">
                    <span class="px-4 d-block"><i class="fas fa-circle text-primary f-10 m-r-5"></i>Incoming requests</span>
                    <hr>
                    <span class="px-4 d-block"><i class="fas fa-circle text-success f-10 m-r-5"></i>You have 2 pending requests..</span>
                    <hr>
                    <span class="px-4 d-block"><i class="fas fa-circle text-danger f-10 m-r-5"></i>You have 3 pending tasks</span>
                    <hr>
                    <span class="px-4 d-block"><i class="fas fa-circle text-warning f-10 m-r-5"></i>New order received</span>
                    <hr>
                    <span class="px-4 d-block"><i class="fas fa-circle text-info f-10 m-r-5"></i>Incoming requests</span>
                    <hr>
                    <span class="px-4 d-block"
                      ><i class="fas fa-circle text-success f-10 m-r-5"></i>The 3 Golden Rules Professional Design..</span
                    >
                    <hr>
                    <span class="px-4 d-block"><i class="fas fa-circle text-danger f-10 m-r-5"></i>You have 4 pending tasks</span>
                    <hr>
                    <span class="px-4 d-block"><i class="fas fa-circle text-warning f-10 m-r-5"></i>New order received</span>
                  </div>
                </div>
                <div class="card-footer">
                  <h6 class="text-center m-0"><a href="#!">Show more</a></h6>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-6">
              <div class="card table-card">
                <div class="card-header borderless">
                  <h5>Total Revenue</h5>
                </div>
                <div class="card-body px-0 py-0">
                  <div class="table-responsive">
                    <div class="revenue-scroll" style="height: 310px; position: relative">
                      <table class="table table-hover mb-0">
                        <tbody>
                          <tr>
                            <td><i class="fas fa-caret-up text-success f-24"></i></td>
                            <td>Bitcoin</td>
                            <td>
                              <h6 class="text-success">+ $145.85</h6>
                            </td>
                          </tr>
                          <tr>
                            <td><i class="fas fa-caret-down text-danger f-24"></i></td>
                            <td>Ethereum</td>
                            <td>
                              <h6 class="text-danger">- $6.368</h6>
                            </td>
                          </tr>
                          <tr>
                            <td><i class="fas fa-caret-up text-success f-24"></i></td>
                            <td>Ripple</td>
                            <td>
                              <h6 class="text-success">+ $458.63</h6>
                            </td>
                          </tr>
                          <tr>
                            <td><i class="fas fa-caret-down text-danger f-24"></i></td>
                            <td>Neo</td>
                            <td>
                              <h6 class="text-danger">- $5.631</h6>
                            </td>
                          </tr>
                          <tr>
                            <td><i class="fas fa-caret-down text-danger f-24"></i></td>
                            <td>Bitcoin</td>
                            <td>
                              <h6 class="text-danger">- $75.86</h6>
                            </td>
                          </tr>
                          <tr>
                            <td><i class="fas fa-caret-up text-success f-24"></i></td>
                            <td>Ethereum</td>
                            <td>
                              <h6 class="text-success">+ $453.63</h6>
                            </td>
                          </tr>
                          <tr>
                            <td><i class="fas fa-caret-down text-danger f-24"></i></td>
                            <td>Ripple</td>
                            <td>
                              <h6 class="text-danger">+ $786.63</h6>
                            </td>
                          </tr>
                          <tr>
                            <td><i class="fas fa-caret-up text-success f-24"></i></td>
                            <td>Neo</td>
                            <td>
                              <h6 class="text-success">+ $145.85</h6>
                            </td>
                          </tr>
                          <tr>
                            <td><i class="fas fa-caret-down text-danger f-24"></i></td>
                            <td>Bitcoin</td>
                            <td>
                              <h6 class="text-danger">- $6.368</h6>
                            </td>
                          </tr>
                          <tr>
                            <td><i class="fas fa-caret-up text-success f-24"></i></td>
                            <td>Ethereum</td>
                            <td>
                              <h6 class="text-success">+ $458.63</h6>
                            </td>
                          </tr>
                          <tr>
                            <td><i class="fas fa-caret-down text-danger f-24"></i></td>
                            <td>Neo</td>
                            <td>
                              <h6 class="text-danger">- $5.631</h6>
                            </td>
                          </tr>
                          <tr>
                            <td><i class="fas fa-caret-down text-danger f-24"></i></td>
                            <td>Ripple</td>
                            <td>
                              <h6 class="text-danger">- $75.86</h6>
                            </td>
                          </tr>
                          <tr>
                            <td><i class="fas fa-caret-up text-success f-24"></i></td>
                            <td>Bitcoin</td>
                            <td>
                              <h6 class="text-success">+ $453.63</h6>
                            </td>
                          </tr>
                          <tr>
                            <td><i class="fas fa-caret-down text-danger f-24"></i></td>
                            <td>Ethereum</td>
                            <td>
                              <h6 class="text-danger">+ $786.63</h6>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-12">
              <div class="card new-cust-card">
                <div class="card-header">
                  <h5>New Customers</h5>
                </div>
                <div class="customer-scroll" style="height: 415px; position: relative">
                  <div class="card-body p-b-0">
                    <div class="align-middle m-b-25">
                      <img src="../assets/images/user/avatar-1.jpg" alt="user image" class="img-radius align-top m-r-15">
                      <div class="d-inline-block">
                        <a href="#!">
                          <h6>Alex Thompson</h6>
                        </a>
                        <p class="m-b-0">Cheers!</p>
                        <span class="status active"></span>
                      </div>
                    </div>
                    <div class="align-middle m-b-25">
                      <img src="../assets/images/user/avatar-2.jpg" alt="user image" class="img-radius align-top m-r-15">
                      <div class="d-inline-block">
                        <a href="#!">
                          <h6>John Doue</h6>
                        </a>
                        <p class="m-b-0">stay hungry stay foolish!</p>
                        <span class="status active"></span>
                      </div>
                    </div>
                    <div class="align-middle m-b-25">
                      <img src="../assets/images/user/avatar-3.jpg" alt="user image" class="img-radius align-top m-r-15">
                      <div class="d-inline-block">
                        <a href="#!">
                          <h6>Alex Thompson</h6>
                        </a>
                        <p class="m-b-0">Cheers!</p>
                        <span class="status deactive"><i class="far fa-clock m-r-10"></i>30 min ago</span>
                      </div>
                    </div>
                    <div class="align-middle m-b-25">
                      <img src="../assets/images/user/avatar-4.jpg" alt="user image" class="img-radius align-top m-r-15">
                      <div class="d-inline-block">
                        <a href="#!">
                          <h6>John Doue</h6>
                        </a>
                        <p class="m-b-0">Cheers!</p>
                        <span class="status deactive"><i class="far fa-clock m-r-10"></i>10 min ago</span>
                      </div>
                    </div>
                    <div class="align-middle m-b-25">
                      <img src="../assets/images/user/avatar-5.jpg" alt="user image" class="img-radius align-top m-r-15">
                      <div class="d-inline-block">
                        <a href="#!">
                          <h6>Shirley Hoe</h6>
                        </a>
                        <p class="m-b-0">stay hungry stay foolish!</p>
                        <span class="status active"></span>
                      </div>
                    </div>
                    <div class="align-middle m-b-25">
                      <img src="../assets/images/user/avatar-1.jpg" alt="user image" class="img-radius align-top m-r-15">
                      <div class="d-inline-block">
                        <a href="#!">
                          <h6>John Doue</h6>
                        </a>
                        <p class="m-b-0">Cheers!</p>
                        <span class="status active"></span>
                      </div>
                    </div>
                    <div class="align-middle m-b-25">
                      <img src="../assets/images/user/avatar-2.jpg" alt="user image" class="img-radius align-top m-r-15">
                      <div class="d-inline-block">
                        <a href="#!">
                          <h6>James Alexander</h6>
                        </a>
                        <p class="m-b-0">stay hungry stay foolish!</p>
                        <span class="status active"></span>
                      </div>
                    </div>
                    <div class="align-middle m-b-25">
                      <img src="../assets/images/user/avatar-3.jpg" alt="user image" class="img-radius align-top m-r-15">
                      <div class="d-inline-block">
                        <a href="#!">
                          <h6>John Doue</h6>
                        </a>
                        <p class="m-b-0">Cheers!</p>
                        <span class="status deactive"><i class="far fa-clock m-r-10"></i>10 min ago</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-6 col-md-12">
              <div class="card table-card">
                <div class="card-header d-flex align-items-center justify-content-between">
                  <h5>Recent Tickets</h5>
                  <a href="#" class="link-primary">View all</a>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover table-borderless mb-0">
                      <thead>
                        <tr>
                          <th>Subject</th>
                          <th>Department</th>
                          <th>Date</th>
                          <th class="text-end">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Website down for one week</td>
                          <td>Support</td>
                          <td>Today 2:00</td>
                          <td class="text-end"><label class="badge bg-light-success">open</label></td>
                        </tr>
                        <tr>
                          <td>Loosing control on server</td>
                          <td>Support</td>
                          <td>Yesterday</td>
                          <td class="text-end"><label class="badge bg-light-primary">progress</label></td>
                        </tr>
                        <tr>
                          <td>Authorizations keys</td>
                          <td>Support</td>
                          <td>27, Aug</td>
                          <td class="text-end"><label class="badge bg-light-danger">closed</label></td>
                        </tr>
                        <tr>
                          <td>Restoring default settings</td>
                          <td>Support</td>
                          <td>Today 9:00</td>
                          <td class="text-end"><label class="badge bg-light-success">open</label></td>
                        </tr>
                        <tr>
                          <td>Loosing control on server</td>
                          <td>Support</td>
                          <td>Yesterday</td>
                          <td class="text-end"><label class="badge bg-light-primary">progress</label></td>
                        </tr>
                        <tr>
                          <td>Restoring default settings</td>
                          <td>Support</td>
                          <td>Today 9:00</td>
                          <td class="text-end"><label class="badge bg-light-success">open</label></td>
                        </tr>
                        <tr>
                          <td>Loosing control on server</td>
                          <td>Support</td>
                          <td>Yesterday</td>
                          <td class="text-end"><label class="badge bg-light-primary">progress</label></td>
                        </tr>
                        <tr>
                          <td>Authorizations keys</td>
                          <td>Support</td>
                          <td>27, Aug</td>
                          <td class="text-end"><label class="badge bg-light-danger">closed</label></td>
                        </tr>
                      </tbody>
                    </table>
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
