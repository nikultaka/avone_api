@extends('Admin.layouts.login.index')
@section('logintitle', 'Admin Forgot Password')
@section('adminlogin')
    <div class="login-box">
        <div class="login-logo">
            <p>Logo</p>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Enter your register email</p>
                @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <ul>
                            <li>{!! \Session::get('success') !!}</li>
                        </ul>
                    </div>
                @endif
                @if (\Session::has('error'))
                    <div class="alert alert-danger">
                        <ul>
                            <li>{!! \Session::get('error') !!}</li>
                        </ul>
                    </div>
                @endif
                @if (count($errors))
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong>Some problems with your input.
                        <br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                    <form method="POST" action="{{ route('admin-forgot-send-mail') }}">
                    {{-- <form method="POST" onsubmit="return false"  id="forgot_enter_email_form" name="forgot_enter_email_form"> --}}
                        @csrf
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                            <div class="input-group-append">
                                <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                            </div>
                        </div>

                      
                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <a href="{{route('admin-login')}}">Log In</a>
                                </div>
                            </div>
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Send mail</button>
                            </div>
                        </div>

                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
@endsection

@section('footersection')
    <script type="text/javascript" src="{{ asset('assets/admin/js/forgot_password.js') }}"></script>
@endsection
