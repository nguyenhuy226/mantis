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
                                <li class="breadcrumb-item" aria-current="page">Clipboard</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Clipboard</h2>
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
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Copy text from another
                                        element</label>
                                    <div class="col-lg-6 col-md-9 col-sm-12">
                                        <div class="input-group mb-2">
                                            <input type="text" class="form-control" id="pc-clipboard-1"
                                                placeholder="Type some value to copy">
                                            <a href="#" class="btn btn-lg btn-primary" data-clipboard="true"
                                                data-clipboard-target="#pc-clipboard-1"><i
                                                    class="feather icon-copy"></i></a>
                                        </div>
                                        <small>You can do by adding a <code>data-clipboard-target</code> attribute in your
                                            trigger element</small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Cut text from another
                                        element</label>
                                    <div class="col-lg-6 col-md-9 col-sm-12">
                                        <textarea class="form-control mb-2" id="pc-clipboard-3" rows="6">
    Lorem ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga.</textarea>
                                        <small>you can define a <code>data-clipboard-action</code> attribute to specify if
                                            you want to either <code>copy</code> or
                                            <code>cut</code> content</small><br>
                                        <button class="btn btn-danger mt-2" data-clipboard="true"
                                            data-clipboard-action="cut" data-clipboard-target="#pc-clipboard-3">
                                            Cut to clipboard</button>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Copy text from
                                        attribute</label>
                                    <div class="col-lg-6 col-md-9 col-sm-12">
                                        <button class="btn btn-success mb-2" data-clipboard="true"
                                            data-clipboard-text="Just because you can doesn't mean you should — clipboard.js">
                                            Copy to clipboard
                                        </button>
                                        <br>
                                        <small>You can just include a <code>data-clipboard-text</code> attribute in your
                                            trigger element</small>
                                    </div>
                                </div>
                                <div class="form-group mb-0 row">
                                    <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">Copy From Container</label>
                                    <div class="col-lg-6 col-md-9 col-sm-12">
                                        <div id="pc-clipboard-4"
                                            style="border: 4px solid rgba(234, 234, 234, 0.5); padding: 10px">Lorem ipsum
                                            cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois
                                            divoltis porris, paradis.
                                            Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio,
                                            in elementis mé pra quem é
                                            amistosis quis leo. Manduma pindureta quium dia nois paga.</div>
                                        <a href="#" class="btn btn-primary mt-2" data-clipboard="true"
                                            data-clipboard-target="#pc-clipboard-4">
                                            Copy to clipboard</a>
                                    </div>
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

@push('form')
    <script src="{{ asset('/js/plugins/clipboard.min.js') }}"></script>
    <script>
        // basic example
        new ClipboardJS('[data-clipboard=true]').on('success', function(e) {
            e.clearSelection();
            alert('Copied!');
        });
    </script>
@endpush
