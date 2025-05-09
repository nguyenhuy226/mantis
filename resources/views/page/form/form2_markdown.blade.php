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
                                <li class="breadcrumb-item" aria-current="page">Markdown</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Markdown</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->

            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- [ form-element ] start -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>SimpleMDE Markdown Editor</h5>
                        </div>
                        <div class="card-body">
                            <textarea class="form-control" id="pc_demo1">
    # Intro
    Go ahead, play around with the editor! Be sure to check out **bold** and *italic* styling, or even [links](https://google.com). You can type the Markdown syntax, use the toolbar, or use shortcuts like `cmd-b` or `ctrl-b`.

    ## Lists
    Unordered lists can be started using the toolbar or by typing `* `, `- `, or `+ `. Ordered lists can be started by typing `1. `.

    #### Unordered
    * Lists are a piece of cake
    * They even auto continue as you type
    * A double enter will end them
    * Tabs and shift-tabs work too

    #### Ordered
    1. Numbered lists...
    2. ...work too!

    ## What about images?
    ![Yes](https://i.imgur.com/sZlktY7.png)
                      </textarea>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5>Autosaving</h5>
                        </div>
                        <div class="card-body">
                            <textarea id="pc_demo2" class="form-control">
    # This one autosaves!
    By default, it saves every 10 seconds, but this can be changed. When this textarea is included in a form, it will automatically forget the saved value when the form is submitted.
                      </textarea>
                        </div>
                    </div>
                    <div class="card d-none d-md-flex">
                        <div class="card-header">
                            <h5>Hidden toolbar and status bar</h5>
                        </div>
                        <div class="card-body">
                            <textarea id="pc_demo3">
    # This one is bare
    You can also choose to hide the statusbar and/or toolbar for a simple and clean appearance. This one also checks for misspelled words as you type!
                      </textarea>
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
    <script src="{{asset('/js/plugins/simplemde.min.js')}}"></script>
    <script>
        (function() {
            new SimpleMDE({
                element: document.querySelector('#pc_demo1')
            });
        })();
        (function() {
            new SimpleMDE({
                element: document.getElementById('pc_demo2'),
                autosave: {
                    enabled: true,
                    unique_id: 'demo2'
                }
            });
        })();
        (function() {
            new SimpleMDE({
                element: document.getElementById('pc_demo3'),
                status: false,
                toolbar: false
            });
        })();
    </script>
@endpush
