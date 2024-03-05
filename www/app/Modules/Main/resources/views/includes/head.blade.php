<title>{{ env("APP_NAME") ?? "Online BO" }} {{ !empty($pageName) ? " | {$pageName}" : null }}</title>
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!-- App favicon --> 
<link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
<!-- App favicon -->
<link rel="shortcut icon" href="{{ asset('assets/images/uftcl_icon.png') }}">

<!-- bootstrap css -->
<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<!-- plugin css -->
<link href="{{ asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
<!-- preloader css -->
<link rel="stylesheet" href="{{ asset('assets/css/preloader.min.css') }}" type="text/css" />
<!-- sweetalert2 css -->
<link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Icons css -->
<link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" /> 
<!-- select2  -->
<link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" />
<!-- daterangepicker  -->
<link href="{{ asset('assets/libs/daterangepicker/daterangepicker.min.css') }}" rel="stylesheet" />
<!-- twitter-bootstrap-wizard css -->
<link href="{{ asset('assets/libs/twitter-bootstrap-wizard/prettify.css') }}" rel="stylesheet">

<!-- app css-->
<link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
<!-- custom css-->
<link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css" />

@stack("styles")

{{-- Jquery --}}
<script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>