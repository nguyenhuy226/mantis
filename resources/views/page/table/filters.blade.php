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
                    <li class="breadcrumb-item" aria-current="page">Filters</li>
                  </ul>
                </div>
                <div class="col-md-12">
                  <div class="page-header-title">
                    <h2 class="mb-0">Filters</h2>
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
                  <h5>Filters</h5>
                </div>
                <div class="card-body table-border-style">
                  <div class="table-responsive" id="pc-dt-filter"> </div>
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
   const dtt = document.createElement('table');
   dtt.classList.add('table');
   const data = {
     headings: ['Name', 'Job', 'Company', 'Ext.', 'Start Date', 'Email', 'Phone No.'],
     data: [
       ['Hedwig F. Nguyen', 'Manager', 'Arcu Vel Foundation', '9875', '03/27/2017', 'nunc.ullamcorper@metusvitae.com', '070 8206 9605'],
       ['Genevieve U. Watts', 'Manager', 'Eget Incorporated', '9557', '07/18/2017', 'Nullam.vitae@egestas.edu', '0800 025698'],
       ['Kyra S. Baldwin', 'Manager', 'Lorem Vitae Limited', '3854', '04/14/2016', 'in@elita.org', '0800 237 8846'],
       ['Stephen V. Hill', 'Manager', 'Eget Mollis Institute', '8820', '03/03/2016', 'eu@vel.com', '0800 682 4591'],
       [
         'Vielka Q. Chapman',
         'Manager',
         'Velit Pellentesque Ultricies Institute',
         '2307',
         '06/25/2017',
         'orci.Donec.nibh@mauriserateget.edu',
         '0800 181 5795'
       ],
       ['Ocean W. Curtis', 'Manager', 'Eu Ltd', '6868', '08/24/2017', 'cursus.et@cursus.edu', '(016977) 9585'],
       ['Kato F. Tucker', 'Manager', 'Vel Lectus Limited', '4713', '11/06/2017', 'Duis@Lorem.edu', '070 0981 8503'],
       ['Robin J. Wise', 'Manager', 'Curabitur Dictum PC', '3285', '02/09/2017', 'blandit@montesnascetur.edu', '0800 259158'],
       ['Uriel H. Guerrero', 'Assistant', 'Mauris Inc.', '2294', '02/11/2018', 'vitae@Innecorci.net', '0500 948772'],
       ['Yasir W. Benson', 'Assistant', 'At Incorporated', '3897', '01/13/2017', 'ornare.elit.elit@atortor.edu', '0391 916 3600'],
       ['Shafira U. French', 'Assistant', 'Nisi Magna Incorporated', '5116', '07/23/2016', 'metus.In.nec@bibendum.ca', '(018013) 26699'],
       ['Casey E. Hood', 'Assistant', 'Lorem Vitae Odio Consulting', '7079', '05/05/2017', 'justo.Praesent@sitamet.ca', '0800 570796'],
       ['Caleb X. Finch', 'Assistant', 'Elit Associates', '3629', '09/19/2016', 'condimentum@eleifend.com', '056 1551 7431']
     ]
   };

   document.querySelector('#pc-dt-filter').appendChild(dtt);

   window.dt = new simpleDatatables.DataTable(dtt, {
     data,
     filters: {
       Job: ['Assistant', 'Manager']
     },
     columns: [
       {
         select: 4,
         type: 'date',
         format: 'MM/DD/YYYY'
       }
     ]
   });
 </script>
 <!-- [Page Specific JS] end -->
@endpush