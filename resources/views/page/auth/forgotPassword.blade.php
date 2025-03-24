@extends('authLayout')

@section('content')
<div class="auth-main">
    <div class="auth-wrapper v3">
      <div class="auth-form">
        <div class="auth-header">
          <a href="#"><img src="../assets/images/logo-dark.svg" alt="img"></a>
        </div>
        <div class="card my-5">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-end mb-4">
              <h3 class="mb-0"><b>Forgot Password</b></h3>
              <a href="#" class="link-primary">Back to Login</a>
            </div>
            <div class="form-group mb-3">
              <label class="form-label">Email Address</label>
              <input type="email" class="form-control" id="floatingInput" placeholder="Email Address">
            </div>
            <p class="mt-4 text-sm text-muted">Do not forgot to check SPAM box.</p>
            <div class="d-grid mt-3">
              <button type="button" class="btn btn-primary">Send Password Reset Email</button>
            </div>
          </div>
        </div>
        <div class="auth-footer row">
          <!-- <div class=""> -->
            <div class="col my-1">
              <p class="m-0">Copyright © <a href="#">Codedthemes</a></p>
            </div>
            <div class="col-auto my-1">
              <ul class="list-inline footer-link mb-0">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                <li class="list-inline-item"><a href="#">Contact us</a></li>
              </ul>
            </div>
          <!-- </div> -->
        </div>
      </div>
    </div>
  </div>
@endsection
