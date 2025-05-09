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
                <li class="breadcrumb-item" aria-current="page">Checkbox</li>
              </ul>
            </div>
            <div class="col-md-12">
              <div class="page-header-title">
                <h2 class="mb-0">Checkbox</h2>
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
            <div class="card-header">
              <h5>Custom Checkbox</h5>
            </div>
            <div class="card-body">
              <div class="form-group row">
                <label class="col-sm-3 text-sm-end col-form-label pt-0">Checkboxes</label>
                <div class="col-sm-9">
                  <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault"> Default checkbox </label>
                  </div>
                  <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked"> Checked checkbox </label>
                  </div>
                  <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled>
                    <label class="form-check-label" for="flexCheckDisabled"> Disabled checkbox </label>
                  </div>
                  <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckCheckedDisabled" checked disabled>
                    <label class="form-check-label" for="flexCheckCheckedDisabled"> Disabled checked checkbox </label>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 text-sm-end col-form-label pt-0">Inline</label>
                <div class="col-sm-9">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="customCheckinlh1">
                    <label class="form-check-label" for="customCheckinlh1"> 1 </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="customCheckinlh2">
                    <label class="form-check-label" for="customCheckinlh2"> 2 </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="customCheckinlh3" checked>
                    <label class="form-check-label" for="customCheckinlh3"> 3 </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="" id="customCheckinlh4" disabled>
                    <label class="form-check-label" for="customCheckinlh4"> 4 (disabled) </label>
                  </div>
                  <small class="form-text text-muted">Add <code>.form-check-inline</code> to any <code>.custom-control</code></small>
                </div>
              </div>
              <div class="form-group row mb-0">
                <label class="col-sm-3 text-sm-end col-form-label pt-0">Indeterminate</label>
                <div class="col-sm-9">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="custom_Check_int">
                    <label class="form-check-label" for="custom_Check_int"> Indeterminate checkbox </label>
                  </div>
                  <small class="form-text text-muted"><code>document.querySelector('your-checkbox').indeterminate=!0;</code></small>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              <h5>Color Options</h5>
            </div>
            <div class="card-body">
              <form>
                <div class="row g-4">
                  <div class="col-md-6">
                    <div class="form-group mb-0">
                      <div class="form-check mb-2">
                        <input class="form-check-input input-primary" type="checkbox" id="customCheckc1" checked>
                        <label class="form-check-label" for="customCheckc1">primary</label>
                      </div>
                      <div class="form-check mb-2">
                        <input class="form-check-input input-secondary" type="checkbox" id="customCheckc2" checked>
                        <label class="form-check-label" for="customCheckc2">secondary</label>
                      </div>
                      <div class="form-check mb-2">
                        <input class="form-check-input input-success" type="checkbox" id="customCheckc3" checked>
                        <label class="form-check-label" for="customCheckc3">success</label>
                      </div>
                      <div class="form-check mb-2">
                        <input class="form-check-input input-danger" type="checkbox" id="customCheckc4" checked>
                        <label class="form-check-label" for="customCheckc4">danger</label>
                      </div>
                      <div class="form-check mb-2">
                        <input class="form-check-input input-warning" type="checkbox" id="customCheckc5" checked>
                        <label class="form-check-label" for="customCheckc5">warning</label>
                      </div>
                      <div class="form-check mb-2">
                        <input class="form-check-input input-info" type="checkbox" id="customCheckc6" checked>
                        <label class="form-check-label" for="customCheckc6">info</label>
                      </div>
                      <div class="form-check mb-0">
                        <input class="form-check-input input-dark" type="checkbox" id="customCheckc7" checked>
                        <label class="form-check-label" for="customCheckc7">dark</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group mb-0">
                      <div class="form-check mb-2">
                        <input class="form-check-input input-light-primary" type="checkbox" id="customCheckclight1" checked>
                        <label class="form-check-label" for="customCheckclight1">primary light</label>
                      </div>
                      <div class="form-check mb-2">
                        <input class="form-check-input input-light-secondary" type="checkbox" id="customCheckclight2" checked>
                        <label class="form-check-label" for="customCheckclight2">secondary light</label>
                      </div>
                      <div class="form-check mb-2">
                        <input class="form-check-input input-light-success" type="checkbox" id="customCheckclight3" checked>
                        <label class="form-check-label" for="customCheckclight3">success light</label>
                      </div>
                      <div class="form-check mb-2">
                        <input class="form-check-input input-light-danger" type="checkbox" id="customCheckclight4" checked>
                        <label class="form-check-label" for="customCheckclight4">danger light</label>
                      </div>
                      <div class="form-check mb-2">
                        <input class="form-check-input input-light-warning" type="checkbox" id="customCheckclight5" checked>
                        <label class="form-check-label" for="customCheckclight5">warning light</label>
                      </div>
                      <div class="form-check mb-2">
                        <input class="form-check-input input-light-info" type="checkbox" id="customCheckclight6" checked>
                        <label class="form-check-label" for="customCheckclight6">info light</label>
                      </div>
                      <div class="form-check mb-0">
                        <input class="form-check-input input-light-dark" type="checkbox" id="customCheckclight7" checked>
                        <label class="form-check-label" for="customCheckclight7">dark light</label>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- [ form-element ] end -->
      </div>
      <!-- [ Main Content ] end -->
    </div>
  </section>
  <!-- [ Main Content ] end -->
@endsection

@push('form')
<script>
    document.querySelector('#custom_Check_int').indeterminate = !0;
  </script>
@endpush