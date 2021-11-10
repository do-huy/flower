<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ __('Material Dashboard Laravel - Free Frontend Preset for Laravel') }}</title>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('material') }}/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('material') }}/img/favicon.png">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

     <!--Thêm bootstrap bản 4.5.2 -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <!--Thêm bootstrap-fileinput bản 5.1.3 -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.3/css/fileinput.min.css" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!--- Font-awesome CDN --->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">

    <!-- custom css material-dashboard  -->
    <link rel="stylesheet" href="{{ asset('admin/css/material/material-dashboard.css?v=2.1.1') }}">
    <!-- custom css demo  -->
    <link rel="stylesheet" href="{{ asset('admin/css/demo/demo.css') }}">

    <!---Thêm Data-table CDN --->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <!---Thêm Data-table CDN --->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">
    <!-- CSS Files toastr -->
    {{-- <link href="{{ asset('admin/css/toastr/toastr.min.css')}}" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    @yield('css')
    </head>
    <body class="">
        <div class="wrapper">

            @include('admin.layouts.sidebar')

            <div class="main-panel">

                <!-- Navbar -->
                @include('admin.layouts.nav')
                <!-- End Navbar -->

                <!-- Content - Nội dung từng trang -->
                @yield('content')
                <!-- End Content -->

                <!-- Footer -->
                @include('admin.layouts.footer')
                <!-- End Footer -->

            </div>
        </div>
    @include('sweetalert::alert')
    </body>
    <!--   Core JS Files   -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Thêm bootstrap-fileinput bản 5.1.3  -->
    <script src="{{ asset('admin/js/fileinput/fileinput.min.js')}}"></script>
    <!-- Thêm bootstrap-fileinput themes explorer-fa bản 5.1.3  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.3/themes/explorer-fa/theme.min.js"></script>
    <!-- Thêm popper bản 5.1.3  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Thêm bootstrap js mới bản 4.5.2  -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- bootstrap-material-design js file link  -->
    <script src="{{ asset('admin/js/core/bootstrap-material-design.min.js') }}"></script>
    <!-- perfect-scrollbar js file link  -->
    <script src="{{ asset('admin/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
    <!-- moment js file link  -->
    <script src="{{ asset('admin/js/plugins/moment.min.js') }}"></script>
    <!--  Plugin for Sweet Alert -->
    {{-- <script src="{{ asset('admin/js/plugins/sweetalert2.js') }}"></script> --}}
    <!-- Forms Validations Plugin -->
    <script src="{{ asset('admin/js/plugins/jquery.validate.min.js') }}"></script>
    <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src="{{ asset('admin/js/plugins/jquery.bootstrap-wizard.js') }}"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="{{ asset('admin/js/plugins/bootstrap-selectpicker.js') }}"></script>
    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src="{{ asset('admin/js/plugins/bootstrap-datetimepicker.min.js') }}"></script>

    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
    {{-- <script src="{{ asset('admin/js/plugins/jquery.dataTables.min.js') }}"></script> --}}
    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="{{ asset('admin/js/plugins/bootstrap-tagsinput.js') }}"></script>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    {{-- <script src="{{ asset('admin/js/plugins/jasny-bootstrap.min.js') }}"></script> --}}
    <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
    <script src="{{ asset('admin/js/plugins/fullcalendar.min.js') }}"></script>
    <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
    <script src="{{ asset('admin/js/plugins/jquery-jvectormap.js') }}"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{ asset('admin/js/plugins/nouislider.min.js') }}"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <!-- Library for adding dinamically elements -->
    <script src="{{ asset('admin/js/plugins/arrive.min.js') }}"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE'"></script>
    <!-- Chartist JS -->
    <script src="{{ asset('admin/js/plugins/chartist.min.js') }}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('admin/js/plugins/bootstrap-notify.js') }}"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('admin/js/plugins/material-dashboard.js?v=2.1.1') }}"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{ asset('admin/js/plugins/demo.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/settings.js') }}"></script>

    <!-- Thêm data-table js   -->
    <script src="{{ asset('admin/js/plugins/dataTables.min.js')}}"></script>
    <!-- Thêm data-table bootstrap js   -->
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <!-- Thêm data-table reponsive js   -->
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <!-- Thêm data-table js   -->
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>
    <!--  Plugin for Sweet Alert 2 -->
    <script src="{{ asset('admin/js/sweetalert2/sweetalert2.js')}}"></script>
    <!--  Plugin for ckeditor -->
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    {{-- <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script> --}}
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}


    @yield('js')
</html>
