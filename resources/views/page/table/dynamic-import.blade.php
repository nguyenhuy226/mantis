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
                    <li class="breadcrumb-item" aria-current="page">Dynamic Import</li>
                  </ul>
                </div>
                <div class="col-md-12">
                  <div class="page-header-title">
                    <h2 class="mb-0">Dynamic Import</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- [ breadcrumb ] end -->

          <!-- [ Main Content ] start -->
          <div class="row">
            <!-- [ Dynamic Import ] start -->
            <div class="col-xl-12">
              <div class="card">
                <div class="card-header">
                  <h5>Dynamic Import</h5>
                </div>
                <div class="card-body table-border-style">
                  <div class="table-responsive">
                    <table class="table" id="pc-dt-dynamic-import"> </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- [ Dynamic Import ] end -->
          </div>
          <!-- [ Main Content ] end -->
        </div>
      </section>
    <!-- [ Main Content ] end -->
@endsection
@push('scripts')
 <!-- datatable Js -->
 <script type="module">
    import {
      DataTable,
      convertCSV
    } from "../assets/js/plugins/module.js"
    const dataTable = new DataTable("#pc-dt-dynamic-import")
    const convertedData = convertCSV({
      type: "csv",
      data:"Name,Ext.,City,Start Date|Hammett Gordon,8101,Wah,1998/06/09|Kyra Moses,3796,Quenast,1998/07/07|Kelly Cameron,4836,Fontaine-Valmont,1999/02/07|Theodore Duran,8971,Dhanbad,1999/04/07|Hammett Gordon,8101,Wah,1998/06/09|Kyra Moses,3796,Quenast,1998/07/07|Kelly Cameron,4836,Fontaine-Valmont,1999/02/07|Theodore Duran,8971,Dhanbad,1999/04/07|Hammett Gordon,8101,Wah,1998/06/09|Kyra Moses,3796,Quenast,1998/07/07|Kelly Cameron,4836,Fontaine-Valmont,1999/02/07|Theodore Duran,8971,Dhanbad,1999/04/07|Hammett Gordon,8101,Wah,1998/06/09|Kyra Moses,3796,Quenast,1998/07/07|Kelly Cameron,4836,Fontaine-Valmont,1999/02/07|Theodore Duran,8971,Dhanbad,1999/04/07",
      headings: true,
      columnDelimiter: ",",
      lineDelimiter: "|"
    })
    dataTable.insert(convertedData)
  </script>
 <!-- [Page Specific JS] end -->
@endpush