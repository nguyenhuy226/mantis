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
                <li class="breadcrumb-item" aria-current="page">File Upload</li>
              </ul>
            </div>
            <div class="col-md-12">
              <div class="page-header-title">
                <h2 class="mb-0">File Upload</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->

      <!-- [ Main Content ] start -->
      <div class="row">
        <!-- [ file-upload ] start -->
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              <h5>File Upload</h5>
            </div>
            <div class="card-body">
              <form action="../assets/json/file-upload.php" class="dropzone">
                <div class="fallback">
                  <input name="file" type="file" multiple>
                </div>
              </form>
              <div class="text-center m-t-20">
                <button class="btn btn-primary">Upload Now</button>
              </div>
            </div>
          </div>
        </div>
        <!-- [ file-upload ] end -->
      </div>
      <!-- [ Main Content ] end -->
    </div>
  </section>
  <!-- [ Main Content ] end -->
@endsection

@push('form')
<script src="{{asset('/js/plugins/dropzone-amd-module.min.js')}}"></script>
@endpush