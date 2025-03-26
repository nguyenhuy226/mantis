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
                <li class="breadcrumb-item" aria-current="page">Quill Editor</li>
              </ul>
            </div>
            <div class="col-md-12">
              <div class="page-header-title">
                <h2 class="mb-0">Quill Editor</h2>
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
              <h5>Basic snow theme</h5>
            </div>
            <div class="card-body">
              <div id="pc-quil-1" style="height: 325px">
                <h1 class="ql-align-center">Quill Rich Text Editor</h1>
                <p><br></p>
                <p
                  >Quill is a free, <a href="https://github.com/quilljs/quill/">open source</a> WYSIWYG editor built for the modern web.
                  With its <a href="https://quilljs.com/docs/modules/">modular architecture</a> and expressive
                  <a href="https://quilljs.com/docs/api/">API</a>, it is completely customizable to fit any need.</p
                >
                <p><br></p>
                <iframe
                  class="ql-video ql-align-center"
                  src="https://player.vimeo.com/video/253905163"
                  width="500"
                  height="280"
                  allowfullscreen
                ></iframe>
                <p><br></p>
                <h2 class="ql-align-center">Getting Started is Easy</h2>
                <p><br></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h5>bubble Theme</h5>
            </div>
            <div class="card-body">
              <div id="pc-quil-2" style="height: 325px">
                <h1 class="ql-align-center">Quill Rich Text Editor</h1>
                <p><br></p>
                <p
                  >Quill is a free, <a href="https://github.com/quilljs/quill/">open source</a> WYSIWYG editor built for the modern web.
                  With its <a href="https://quilljs.com/docs/modules/">modular architecture</a> and expressive
                  <a href="https://quilljs.com/docs/api/">API</a>, it is completely customizable to fit any need.</p
                >
                <p><br></p>
                <iframe
                  class="ql-video ql-align-center"
                  src="https://player.vimeo.com/video/253905163"
                  width="500"
                  height="280"
                  allowfullscreen
                ></iframe>
                <p><br></p>
                <h2 class="ql-align-center">Getting Started is Easy</h2>
                <p><br></p>
              </div>
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
<script src="{{asset('/js/plugins/quill.min.js')}}"></script>
    <script>
      (function () {
        var quill = new Quill('#pc-quil-1', {
          modules: {
            toolbar: [
              [
                {
                  header: [1, 2, false]
                }
              ],
              ['bold', 'italic', 'underline'],
              ['image', 'code-block']
            ]
          },
          placeholder: 'Type your text here...',
          theme: 'snow'
        });
      })();
      (function () {
        var Delta = Quill.import('delta');
        var quill = new Quill('#pc-quil-2', {
          modules: {
            toolbar: true
          },
          placeholder: 'Type your text here...',
          theme: 'bubble'
        });
      })();
    </script>
@endpush