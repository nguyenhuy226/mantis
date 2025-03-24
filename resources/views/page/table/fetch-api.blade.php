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
                    <li class="breadcrumb-item"><a href="javascript: void(0)">Table</a></li>
                    <li class="breadcrumb-item" aria-current="page">Fetch API</li>
                  </ul>
                </div>
                <div class="col-md-12">
                  <div class="page-header-title">
                    <h2 class="mb-0">Fetch API</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- [ breadcrumb ] end -->

          <!-- [ Main Content ] start -->
          <div class="row">
            <!-- [ basic-table ] start -->
            <div class="col-xl-12">
              <div class="card">
                <div class="card-header">
                  <h5>Fetch API</h5>
                </div>
                <div class="card-body table-border-style">
                  <div class="table-responsive">
                    <table class="table" id="pc-dt-fetchapi"> </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ basic-table ] end -->
          </div>
          <!-- [ Main Content ] end -->
        </div>
      </section>
    <!-- [ Main Content ] end -->
@endsection
@push('scripts')
 <!-- datatable Js -->
 <script src="{{asset('/js/plugins/simple-datatables.js')}}"></script>
 <script>
   fetch('../assets/json/datatable.json')
     .then((response) => response.json())
     .then((data) => {
       if (!data.length) {
         return;
       }

       let table = new simpleDatatables.DataTable('#pc-dt-fetchapi', {
         data: {
           headings: Object.keys(data[0]),
           data: data.map((item) => Object.values(item))
         }
       });
     });
 </script>
 <!-- [Page Specific JS] end -->
@endpush