@extends('layout')

@section('content')
 <!-- [ Main Content ] start -->
 <section class="pc-container">
    <div class="pc-content">
      <!-- [ breadcrumb ] start -->
      <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
            <div class="col-md-12">
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript: void(0)">Forms</a></li>
                <li class="breadcrumb-item" aria-current="page">ReCaptcha</li>
              </ul>
            </div>
            <div class="col-md-12">
              <div class="page-header-title">
                <h2 class="mb-0">ReCaptcha</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->

      <!-- [ Main Content ] start -->
      <div class="row">
        <!-- [ form-element ] start -->
        <div class="col-sm-12">
          <div class="card">
            <div class="card-body">
              <form>
                <div class="form-group mb-0 row">
                  <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">reCaptcha</label>
                  <div class="col-lg-4 col-md-9 col-sm-12">
                    <div class="g-recaptcha" data-sitekey="6LdnLwgUAAAAAAIb9L3PQlHQgvSCi16sYgbMIMFR"></div>
                  </div>
                  <script src="https://www.google.com/recaptcha/api.js"></script>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- [ form-element ] end -->
    </div>
    <!-- [ Main Content ] end -->
  </section>
  <!-- [ Main Content ] end -->
@endsection
