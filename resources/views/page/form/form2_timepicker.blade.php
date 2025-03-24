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
                                <li class="breadcrumb-item" aria-current="page">Timepicker</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Timepicker</h2>
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
                                        <input class="form-control" id="pc-timepicker-1" placeholder="Select time"
                                            type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">With Input Group</label>
                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                        <div class="input-group timepicker">
                                            <input class="form-control" id="pc-timepicker-2" placeholder="Select time"
                                                type="text">
                                            <span class="input-group-text">
                                                <i class="feather icon-clock"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">24 Hours</label>
                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                        <input class="form-control" id="pc-timepicker-3" type="text"
                                            placeholder="Select time">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Time Picker w/
                                        Limits</label>
                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                        <input class="form-control" id="pc-timepicker-4" type="text"
                                            placeholder="Select time">
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Preloading Time</label>
                                    <div class="col-lg-4 col-md-9 col-sm-12">
                                        <input class="form-control" id="pc-timepicker-5" type="text"
                                            placeholder="Select time">
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
        document.querySelector('#pc-timepicker-1').flatpickr({
            enableTime: true,
            noCalendar: true
        });
        document.querySelector('#pc-timepicker-2').flatpickr({
            enableTime: true,
            noCalendar: true
        });
        document.querySelector('#pc-timepicker-3').flatpickr({
            enableTime: true,
            noCalendar: true,
            time_24hr: true
        });
        document.querySelector('#pc-timepicker-4').flatpickr({
            enableTime: true,
            noCalendar: true,
            minTime: '16:00',
            maxTime: '22:30'
        });
        document.querySelector('#pc-timepicker-5').flatpickr({
            enableTime: true,
            noCalendar: true,
            defaultDate: '13:45'
        });
    </script>
@endpush
