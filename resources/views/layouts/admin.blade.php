<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield ('title', 'layouts Admin')</title>

    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}"
        rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:
        200,200i,300,300i,600,600i,900,900i" rel="stylesheet">

    <!--panggil stley dari template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    @stack('styles')

</head>
<body  id="page-top">
    <div id="wrapper">
        @include('layouts.sidebar')
            <div id="content-wrapper" class="d-flex flex-coulumn">

            <div id="content">
                @include ('layouts.token')

            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>

    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span> copyright &copy; SMK TEXMACO {{ date ('y')}}</span>
            </div>
        </div>
    </footer>

</div>

<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
@stack('script')

</body>
</html>