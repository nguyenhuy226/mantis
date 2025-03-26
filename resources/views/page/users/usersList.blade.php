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
                                <li class="breadcrumb-item"><a href="javascript: void(0)">Profile</a></li>
                                <li class="breadcrumb-item" aria-current="page">User List</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">User List</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->

            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- [ sample-page ] start -->
                <div class="col-sm-12">
                    <div class="card table-card">
                        <div class="card-body">
                            <div class="text-end p-4 pb-0">
                                <a href="{{ route('users.create') }}"
                                    class="btn btn-primary d-inline-flex align-item-center">
                                    <i class="ti ti-plus f-18"></i> Add User
                                </a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover" id="pc-dt-simple">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>ID</th>
                                            <th>User Name</th>
                                            <th>Contact</th>
                                            <th>Age</th>
                                            <th>Country</th>
                                            <th>Status</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($userList as $user)
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox">
                                                    </div>
                                                </td>
                                                <td>{{ $user->id }}</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-auto pe-0">
                                                            <img src="{{ $user->image ? asset('/images/user/' . $user->image) : asset('/images/user/avatar-2.jpg') }}"
                                                                alt="user-image" class="wid-40 rounded-circle hei-40">
                                                        </div>
                                                        <div class="col">
                                                            <h5 class="mb-0">{{ $user->name }}</h5>
                                                            <p class="text-muted f-12 mb-0">{{ $user->email }}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{ $user->phone }}</td>
                                                <td>45</td>
                                                <td>United Kingdom</td>
                                                <td><span
                                                        class="badge  {{ $user->status === 1 ? 'bg-light-success' : ($user->status === 0 ? 'bg-light-danger' : 'bg-light-primary') }}  rounded-pill f-12">{{ $user->name_status }}</span>
                                                </td>
                                                <td class="text-center">
                                                    <ul class="list-inline me-auto mb-0">
                                                        <li class="list-inline-item align-bottom">
                                                            <a href="{{ route('users.show', ['user' => $user->id]) }}"
                                                                class="avtar avtar-xs btn-link-secondary">
                                                                <i class="ti ti-eye f-18"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item align-bottom">
                                                            <a href="#" class="avtar avtar-xs btn-link-primary">
                                                                <i class="ti ti-edit-circle f-18"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item align-bottom">
                                                            <form action="{{ route('users.destroy', $user->id) }}"
                                                                id="delete-form-{{ $user->id }}" method="POST"
                                                                class="mx-2">
                                                                @csrf
                                                                @method('DELETE')
                                                                <a onclick="event.preventDefault(); if(confirm('Bạn có chắc chắn muốn xóa không?')) { document.getElementById('delete-form-{{ $user->id }}').submit(); }"
                                                                    class="avtar avtar-xs btn-link-danger">
                                                                    <i class="ti ti-trash f-18"></i>
                                                                </a>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ sample-page ] end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
    <div class="modal fade" id="user-modal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header border-0 pb-0">
                    <h5 class="mb-0">Customer Details</h5>
                    <a href="#" class="avtar avtar-s btn-link-danger" data-bs-dismiss="modal">
                        <i class="ti ti-x f-20"></i>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body position-relative">
                                    <div class="position-absolute end-0 top-0 p-3">
                                        <span class="badge bg-primary">Relationship</span>
                                    </div>
                                    <div class="text-center mt-3">
                                        <div class="chat-avtar d-inline-flex mx-auto">
                                            <img class="rounded-circle img-fluid wid-60"
                                                src="../assets/images/user/avatar-5.jpg" alt="User image">
                                        </div>
                                        <h5 class="mb-0">Aaron Poole</h5>
                                        <p class="text-muted text-sm">Manufacturing Director</p>
                                        <hr class="my-3">
                                        <div class="row g-3">
                                            <div class="col-4">
                                                <h5 class="mb-0">45</h5>
                                                <small class="text-muted">Age</small>
                                            </div>
                                            <div class="col-4 border border-top-0 border-bottom-0">
                                                <h5 class="mb-0">86%</h5>
                                                <small class="text-muted">Progress</small>
                                            </div>
                                            <div class="col-4">
                                                <h5 class="mb-0">7634</h5>
                                                <small class="text-muted">Visits</small>
                                            </div>
                                        </div>
                                        <hr class="my-3">
                                        <div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
                                            <i class="ti ti-mail"></i>
                                            <p class="mb-0">bo@gmail.com</p>
                                        </div>
                                        <div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
                                            <i class="ti ti-phone"></i>
                                            <p class="mb-0">+1 (247) 849-6968</p>
                                        </div>
                                        <div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
                                            <i class="ti ti-map-pin"></i>
                                            <p class="mb-0">Lesotho</p>
                                        </div>
                                        <div class="d-inline-flex align-items-center justify-content-between w-100">
                                            <i class="ti ti-link"></i>
                                            <a href="#" class="link-primary">
                                                <p class="mb-0">https://anshan.dh.url</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Personal Details</h5>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0 pt-0">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p class="mb-1 text-muted">Full Name</p>
                                                    <h6 class="mb-0">Aaron Poole</h6>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="mb-1 text-muted">Father Name</p>
                                                    <h6 class="mb-0">Mr. Ralph Sabatini</h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item px-0">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p class="mb-1 text-muted">Country</p>
                                                    <h6 class="mb-0">Lesotho</h6>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="mb-1 text-muted">Zip Code</p>
                                                    <h6 class="mb-0">247 849</h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item px-0 pb-0">
                                            <p class="mb-1 text-muted">Address</p>
                                            <h6 class="mb-0">647 Punam Center, Ulabifgu, Myanmar (Burma) - 41487</h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5>About me</h5>
                                </div>
                                <div class="card-body">
                                    <p class="mb-0">Hello, I’m Aaron Poole Manufacturing Director based in international
                                        company, Void
                                        jiidki me na fep juih ced gihhiwi launke cu mig tujum peodpo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="user-edit_add-modal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Edit Customer</h5>
                    <a href="#" class="avtar avtar-s btn-link-danger" data-bs-dismiss="modal">
                        <i class="ti ti-x f-20"></i>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-3 text-center mb-3">
                            <div class="user-upload wid-75">
                                <img src="../assets/images/user/avatar-5.jpg" alt="img" class="img-fluid">
                                <label for="uplfile" class="img-avtar-upload">
                                    <i class="ti ti-camera f-24 mb-1"></i>
                                    <span>Upload</span>
                                </label>
                                <input type="file" id="uplfile" class="d-none">
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="form-group">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Status</label>
                                <select class="form-select">
                                    <option>Select Status</option>
                                    <option>Complicated</option>
                                    <option>Single</option>
                                    <option>Relationship</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Location</label>
                                <textarea class="form-control" rows="3" placeholder="Enter Location"></textarea>
                            </div>
                            <div class="form-check form-switch d-flex align-items-center justify-content-between p-0">
                                <label class="form-check-label h5 pe-3 mb-0" for="customSwitchemlnot1">Make Contact Info
                                    Public
                                    <span class="text-muted w-75 d-block text-sm f-w-400 mt-2">Means that anyone viewing
                                        your profile will
                                        be able to see your contacts details</span>
                                </label>
                                <input class="form-check-input h4 m-0 position-relative" type="checkbox"
                                    id="customSwitchemlnot1" checked="">
                            </div>
                            <hr class="my-3">
                            <div class="form-check form-switch d-flex align-items-center justify-content-between p-0">
                                <label class="form-check-label h5 pe-3 mb-0" for="customSwitchemlnot2">Available to hire
                                    <span class="text-muted w-75 d-block text-sm f-w-400 mt-2">Toggling this will let your
                                        teammates know
                                        that you are available for acquiring new projects</span>
                                </label>
                                <input class="form-check-input h4 m-0 position-relative" type="checkbox"
                                    id="customSwitchemlnot2" checked="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <ul class="list-inline me-auto mb-0">
                        <li class="list-inline-item align-bottom">
                            <a href="#" class="avtar avtar-s btn-link-danger w-sm-auto" data-bs-toggle="tooltip"
                                title="Delete">
                                <i class="ti ti-trash f-18"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="flex-grow-1 text-end">
                        <button type="button" class="btn btn-link-danger" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
@endsection
