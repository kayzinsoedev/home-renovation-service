@extends('layouts.admin_template_auth')

@section('content')

<body class="hold-transition login-page">

<div class="container">
  <div class="row">
    <div class="login-box">

      <div class="login-logo">
        <a href="{{ url('/login') }}">Home Renovation Service Admin</a>
      </div>
      <!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form class="" role="form" action="{{ route('login') }}" method="POST">
        {{ csrf_field() }}

          <div class="form-group {{ $errors->has('email') ? ' has-error' : 'has-feedback' }}">
            <input id="email" type="email" class="form-control" name="email" placeholder="Email" required autofocus>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>

          <div class="form-group {{ $errors->has('password') ? ' has-error' : 'has-feedback' }}">
            <input id="password" type="password" class="form-control" name="password" placeholder="Password" required autofocus>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>

          <div class="row">
            <!-- <div class="col-xs-8">
              <a href="#">I forgot my password</a><br>
            </div> -->
            <!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
  </div>
  <!-- /.row -->
</div>
<!-- /.container -->

@endsection