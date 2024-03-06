<meta charset="utf-8" />
<title>{{ env("APP_NAME") ?? "UFTCL Bo Account" }} {{ !empty($pageName) ? " | {$pageName}" : null }}</title>
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="">
<meta name="author" content="">
<!-- App favicon -->
<link rel="shortcut icon" href="{{ asset('assets/images/uftcl_icon.png') }}">
<!-- Bootstrap Css -->
<link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
<!-- daterangepicker  -->
<link href="{{ asset('assets/libs/daterangepicker/daterangepicker.min.css') }}" rel="stylesheet" />
<!-- Icons Css -->
<link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
<!-- Custom Css-->
<link href="{{ asset('assets/css/custom.css') }}" id="app-style" rel="stylesheet" type="text/css" />

<style type="text/css">
body{
    background-color:#fff !important;
}
</style>

@stack('styles')