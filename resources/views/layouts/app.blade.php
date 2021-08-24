<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('application.webAppName') }} | {{ $title }}</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/custom-style.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/custom.css') }}">
    @livewireStyles

    <!-- jQuery -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('assets/dist/js/demo.js') }}"></script>
    <!-- Sweet Alert -->
    <script src="{{ asset('assets/plugins/sweetalert2/sweetalert2.all.js') }}"></script>
    <!-- Stripe js -->
    <script src="https://js.stripe.com/v3/"></script>
</head>

<body class="hold-transition sidebar-mini">
    <div class="loading">Processing...</div>
    <!-- Site wrapper -->
    <div class="wrapper">
        <livewire:navbar />
        <livewire:side-bar />

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <livewire:page-navigation :title="$title" />
            <!-- Main content -->
            {{ $slot }}
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <livewire:footer />

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    @include('sweetalert::alert')
    <!-- ./wrapper -->
    <script>
        const BASEURL = "{{ url('') }}"
    </script>
    <script src="{{ asset('assets/dist/js/custom.js') }}"></script>
    @livewireScripts
</body>

</html>