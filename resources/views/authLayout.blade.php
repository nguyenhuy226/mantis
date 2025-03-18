<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
    @include('widget.head-page-meta')
    @include('widget.head-css')
</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body>
    <!-- [ Pre-loader ] start -->
    @include('widget.loader')
    <!-- [ Pre-loader ] End -->
    @yield('content')
    <!-- [ Main Content ] end -->
    <!-- Required Js -->
    @include('widget.footer-js')


</body>
<!-- [Body] end -->

</html>
