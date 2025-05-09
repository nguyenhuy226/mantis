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
                                <li class="breadcrumb-item" aria-current="page">Uppy</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Uppy</h2>
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
                    <div class="alert alert-primary" role="alert">
                        <div class="alert-text">
                            Uppy is a sleek, modular open source JavaScript file uploader.
                            <br>
                            For more info please visit the plugin's <a class="" href="https://uppy.io/"
                                target="_blank">Demo Page</a> or
                            <a class="" href="https://github.com/transloadit/uppy" target="_blank">GitHub</a>.
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Dashboard Example</h5>
                        </div>
                        <div class="card-body">
                            <div class="pc-uppy" id="pc-uppy-1">
                                <div class="pc-uppy-dashboard"></div>
                                <div class="pc-uppy-progress"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Drag and Drop [ autoProceed is on ]</h5>
                        </div>
                        <div class="card-body">
                            <div class="pc-uppy-3">
                                <div class="for-DragDrop"></div>
                                <div class="for-ProgressBar"></div>
                                <div class="uploaded-files mt-3">
                                    <h5>Uploaded files:</h5>
                                    <ol></ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Drag and Drop [ autoProceed is off ]</h5>
                        </div>
                        <div class="card-body">
                            <div class="pc-uppy-4">
                                <div class="for-DragDrop"></div>
                                <div class="for-ProgressBar"></div>
                                <div class="text-center my-3">
                                    <button class="upload-button btn btn-light-primary">Upload</button>
                                </div>
                                <div class="uploaded-files">
                                    <h5>Uploaded files:</h5>
                                    <ol></ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Status Bar Example</h5>
                        </div>
                        <div class="card-body">
                            <div class="UppyInput form"></div>
                            <div class="UppyInput-Progress"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Popup Upload</h5>
                        </div>
                        <div class="card-body">
                            <div class="pc-uppy" id="pc-uppy-6">
                                <div class="text-center">
                                    <button class="pc-uppy-btn btn btn-light-primary">Open Popup Window</button>
                                </div>
                                <div class="pc-uppy-dashboard"></div>
                                <div class="pc-uppy-progress"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ form-element ] end -->
    </section>
    <!-- [ Main Content ] end -->
@endsection

@push('form')
    <script src="{{ asset('/js/plugins/uppy.min.js') }}"></script>
    <script>
        const Tus = Uppy.Tus;
        const DragDrop = Uppy.DragDrop;
        const ProgressBar = Uppy.ProgressBar;
        const StatusBar = Uppy.StatusBar;
        const FileInput = Uppy.FileInput;
        const Informer = Uppy.Informer;
        const Dashboard = Uppy.Dashboard;
        const Dropbox = Uppy.Dropbox;
        const GoogleDrive = Uppy.GoogleDrive;
        const Instagram = Uppy.Instagram;
        const Webcam = Uppy.Webcam;
        // Function for displaying uploaded files
        const onUploadSuccess = (elForUploadedFiles) =>
            (file, response) => {
                const url = response.uploadURL
                const fileName = file.name

                const li = document.createElement('li')
                const a = document.createElement('a')
                a.href = url
                a.target = '_blank'
                a.appendChild(document.createTextNode(fileName))
                li.appendChild(a)

                document.querySelector(elForUploadedFiles).appendChild(li)
            }
            (function() {
                var id = '#pc-uppy-1';
                var options = {
                    proudlyDisplayPoweredByUppy: false,
                    target: id,
                    inline: true,
                    replaceTargetContent: true,
                    showProgressDetails: true,
                    note: 'No filetype restrictions.',
                    height: 470,
                    metaFields: [{
                            id: 'name',
                            name: 'Name',
                            placeholder: 'file name'
                        },
                        {
                            id: 'caption',
                            name: 'Caption',
                            placeholder: 'describe what the image is about'
                        }
                    ],
                    browserBackButtonClose: true
                }
                var uppyDashboard = new Uppy.Uppy({
                    autoProceed: true,
                    restrictions: {
                        maxFileSize: 1000000, // 1mb
                        maxNumberOfFiles: 5,
                        minNumberOfFiles: 1
                    }
                });
                uppyDashboard.use(Dashboard, options);
                uppyDashboard.use(Tus, {
                    endpoint: 'https://master.tus.io/files/'
                });
                uppyDashboard.use(GoogleDrive, {
                    target: Dashboard,
                    companionUrl: 'https://companion.uppy.io'
                });
                uppyDashboard.use(Dropbox, {
                    target: Dashboard,
                    companionUrl: 'https://companion.uppy.io'
                });
                uppyDashboard.use(Instagram, {
                    target: Dashboard,
                    companionUrl: 'https://companion.uppy.io'
                });
                uppyDashboard.use(Webcam, {
                    target: Dashboard
                });
            })();

        (function() {
            var id = '#pc-uppy-6';
            var options = {
                proudlyDisplayPoweredByUppy: false,
                target: id + ' .pc-uppy-dashboard',
                inline: false,
                replaceTargetContent: true,
                showProgressDetails: true,
                note: 'No filetype restrictions.',
                height: 470,
                metaFields: [{
                        id: 'name',
                        name: 'Name',
                        placeholder: 'file name'
                    },
                    {
                        id: 'caption',
                        name: 'Caption',
                        placeholder: 'describe what the image is about'
                    }
                ],
                browserBackButtonClose: true,
                trigger: id + ' .pc-uppy-btn'
            }
            var uppyDashboard = new Uppy.Uppy({
                autoProceed: true,
                restrictions: {
                    maxFileSize: 1000000, // 1mb
                    maxNumberOfFiles: 5,
                    minNumberOfFiles: 1
                }
            });
            uppyDashboard.use(Dashboard, options);
            uppyDashboard.use(Tus, {
                endpoint: 'https://master.tus.io/files/'
            });
            uppyDashboard.use(GoogleDrive, {
                target: Dashboard,
                companionUrl: 'https://companion.uppy.io'
            });
            uppyDashboard.use(Dropbox, {
                target: Dashboard,
                companionUrl: 'https://companion.uppy.io'
            });
            uppyDashboard.use(Instagram, {
                target: Dashboard,
                companionUrl: 'https://companion.uppy.io'
            });
            uppyDashboard.use(Webcam, {
                target: Dashboard
            });
        })();

        (function() {
            const pc_uppy_3 = new Uppy.Uppy({
                debug: true,
                autoProceed: true
            })
            pc_uppy_3
                .use(DragDrop, {
                    target: '.pc-uppy-3 .for-DragDrop'
                })
                .use(Tus, {
                    endpoint: 'https://tusd.tusdemo.net/files/'
                })
                .use(ProgressBar, {
                    target: '.pc-uppy-3 .for-ProgressBar',
                    hideAfterFinish: false
                })
                .on('upload-success', onUploadSuccess('.pc-uppy-3 .uploaded-files ol'))
        })();

        (function() {
            const pc_uppy_4 = new Uppy.Uppy({
                debug: true,
                autoProceed: false
            })
            pc_uppy_4
                .use(DragDrop, {
                    target: '.pc-uppy-4 .for-DragDrop'
                })
                .use(Tus, {
                    endpoint: 'https://tusd.tusdemo.net/files/'
                })
                .use(ProgressBar, {
                    target: '.pc-uppy-4 .for-ProgressBar',
                    hideAfterFinish: false
                })
                .on('upload-success', onUploadSuccess('.pc-uppy-4 .uploaded-files ol'))

            const uploadBtn = document.querySelector('.pc-uppy-4 button.upload-button')
            uploadBtn.addEventListener('click', function() {
                pc_uppy_4.upload()
            })
        })();
        (function() {
            const pc_uppy_5 = new Uppy.Uppy({
                debug: true,
                autoProceed: true
            })
            pc_uppy_5
                .use(FileInput, {
                    target: '.UppyInput',
                    pretty: false
                })
                .use(Tus, {
                    endpoint: 'https://tusd.tusdemo.net/files/'
                })
                .use(StatusBar, {
                    target: '.UppyInput-Progress',
                    hideUploadButton: true,
                    hideAfterFinish: false
                });
            document.querySelector(".uppy-FileInput-input").classList.add('form-control');
        })();
    </script>
@endpush
