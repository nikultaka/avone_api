<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('logintitle')</title>
  <style>
    .error {
    color: red;
   
    }
 </style>        

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/theme/admin/css/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('assets/theme/admin/css/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/theme/admin/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/theme/admin/css/style.css') }}">
  {{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script> --}}
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
   <!-- loader Start -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.79/theme-default.min.css">
  <div id="loader" class="loader" style="display: none"></div>

  @php
  $getUserIP = getUserIP(); 
  @endphp
  <script type="text/javascript"> 
    var BASE_URL = "{{ url('/') }}"; 
    var ADMIN = 'admin';
    var USER_IP = '<?php echo $getUserIP?>';
    var mode = 'local';
        if(mode == 'local'){
          var API_PREFIX = 'http://127.0.0.1:8001';
        }
        if(mode == 'live'){
          var API_PREFIX = 'http://127.0.0.1:8000';
        }
</script>
</head>
<body class="hold-transition login-page">
    @yield('adminlogin')

<!-- jQuery -->
<script src="{{ asset('assets/cdn_js/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/cdn_js/bootstrap.min.js') }}"></script>
{{-- validate --}}
<script src="{{ asset('assets/cdn_js/jquery.validate.min.js') }}"></script>
<!-- AdminLTE App -->
 <script src="{{ asset('assets/theme/admin/js/adminlte.js') }}"></script>
    {{-- toastr --}}
 <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
 <script src="{{ asset('assets/admin/js/common.js') }}"></script>
 @yield('footersection')
</body>
</html>
