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
                                <li class="breadcrumb-item" aria-current="page">Date Range Picker</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Date Range Picker</h2>
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
                            <h5>Preview</h5>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Simple Input</label>
                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                        <input type="text" class="form-control" id="pc-date_range_picker-1"
                                            placeholder="Select date range">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">With Input Group</label>
                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                        <div class="input-group">
                                            <input type="text" id="pc-date_range_picker-2" class="form-control"
                                                placeholder="Select date range">
                                            <span class="input-group-text"><i class="feather icon-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Disable date</label>
                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                        <input type="text" class="form-control" id="pc-date_range_picker-3">
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Predefined Ranges</label>
                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                        <input type="text" class="form-control" id="pc-date_range_picker-4"
                                            placeholder="Select date range">
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
    <script src="{{ asset('/js/plugins/flatpickr.min.js') }}"></script>
    <script>
        // minimum setup
        flatpickr(document.querySelector('#pc-date_range_picker-1'), {
            mode: 'range'
        });
        flatpickr(document.querySelector('#pc-date_range_picker-2'), {
            mode: 'range'
        });
        flatpickr(document.querySelector('#pc-date_range_picker-3'), {
            mode: 'range',
            minDate: 'today',
            dateFormat: 'Y-m-d',
            disable: [
                function(date) {
                    return !(date.getDate() % 8);
                }
            ]
        });
        flatpickr(document.querySelector('#pc-date_range_picker-4'), {
            mode: 'range',
            dateFormat: 'Y-m-d',
            defaultDate: ['2016-10-10', '2016-10-20']
        });
    </script>
@endpush
