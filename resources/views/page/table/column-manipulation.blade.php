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
                    <li class="breadcrumb-item" aria-current="page">Column Manipulation</li>
                  </ul>
                </div>
                <div class="col-md-12">
                  <div class="page-header-title">
                    <h2 class="mb-0">Column Manipulation</h2>
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
                  <h5>Column Manipulation</h5>
                </div>
                <div class="card-body table-border-style">
                  <div class="table-responsive">
                    <table class="table" id="pc-dt-column-manipulation"> </table>
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
 <script type="module">
      import { DataTable } from '../assets/js/plugins/module.js';
      const columnData = [
        {
          // Select the first column ...
          select: 0,
          // ...add a random number (age) to the cells
          render: (data) => `${data} (${Math.floor(Math.random() * (70 - 18)) + 18})`
        },
        {
          // select the fourth column ...
          select: 3,
          // ... let the instance know we have datetimes in it ...
          type: 'date',
          // ... pass the correct datetime format ...
          format: 'YYYY/DD/MM',
          // ... sort it ...
          sort: 'desc'
        }
      ];
      // Customise our labels
      const labelData = {
        placeholder: 'Search students...',
        searchTitle: 'Search within students',
        perPage: 'students per page',
        noRows: 'No students to display',
        info: 'Showing {start} to {end} of {rows} students (Page {page} of {pages} pages)'
      };
      // Instantiate
      fetch('../assets/json/datatable.json')
        .then((response) => response.json())
        .then((data) => {
          const datatable = new DataTable('table', {
            data: {
              headings: Object.keys(data[0]),
              data: data.map((item) => Object.values(item))
            },
            columns: columnData,
            labels: labelData,
            type: 'string'
          });
          // Wait for the instance to finish rendering
          // and add a new column
          datatable.on('datatable.init', () => {
            fetch('../assets/json/datatable.column.json')
              .then((response) => response.json())
              .then((column) => {
                // Render a button
                column.render = (value, _td, rowIndex, _cellIndex) =>
                  `<span style="width: 45px" class="d-inline-block">${value}</span> <button type='button' data-id='${rowIndex}' class='btn btn-sm btn-primary mx-2 notify'>Click Me</button>`;
                // the dataIndex property is the correct index of the row in the data array, not the rowIndex
                // which will be -1 if not rendered or wrong if the we're not on page 1
                datatable.columns.add(column);
              });
          });
          datatable.dom.addEventListener('click', (e) => {
            if (e.target.nodeName === 'BUTTON') {
              const index = parseInt(e.target.getAttribute('data-id'), 10);
              const row = datatable.data.data[index];
              let message = [
                'This is row ',
                e.target.closest('tr').rowIndex + 1,
                ' of ',
                datatable.options.perPage,
                ' rendered rows and row ',
                index + 1,
                ' of ',
                datatable.data.length,
                ' total rows.'
              ];
              const data = [].slice.call(row).map((cell) => cell.data);
              message = message.join('');
              message = `${message}\n\nThe row data is:\n${JSON.stringify(data)}`;
              alert(message);
            }
          });
        });
    </script>
@endpush