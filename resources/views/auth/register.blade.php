<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PNC Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('template/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('template/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('template/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('template/dist/css/AdminLTE.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('template/plugins/iCheck/square/blue.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
  
  <body class="hold-transition register-page">
      <div class="register-box">
        <div class="register-logo">
            <a href="#"><b>PNC</b> KOTAK SARAN</a>
          </div>

          <div class="register-box-body">
            <p class="login-box-msg">Register a new membership</p>

            <form action="{{ route('register') }}" method="post">
            {{ csrf_field() }}

              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} has-feedback ">
                <input type="text" class="form-control col-md-4" placeholder="Name" value="{{ old('name') }}" required autofocus>
          
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
          
                  @if ($errors->has('name'))
                    <span class="help-block col-md-8">
                      <strong>{{ $errors->first('name') }}</strong>
                    </span>
                  @endif
              </div>
      
              <div class="form-group{{ $errors->has('nim') ? ' has-error' : '' }} has-feedback ">
                <input type="text" class="form-control col-md-4" placeholder="NIM/NPAK" value="{{ old('nim') }}" required>
          
                  <span class="glyphicon glyphicon glyphicon-pencil form-control-feedback"></span>

                  @if ($errors->has('nim'))
                    <span class="help-block col-md-8">
                      <strong>{{ $errors->first('nim') }}</strong>
                    </span>
                  @endif
              </div>
  
              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                <input type="email" class="form-control col-md-4" placeholder="Email" value="{{ old('email') }}" required>

                <span class="glyphicon glyphicon-envelope form-control-feedback col-md-8"></span>

                @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
                @endif
              </div>
            
              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                
                <input type="password" class="form-control" placeholder="Password" required>
                  <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                  @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                  @endif
              </div>

              <div class="form-group has-feedback">
                
                <input type="password" class="form-control" placeholder="Retype password" required>
                  
                  <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
             </div>

            <div class="row">
              <div class="col-xs-8">
                <div class="checkbox icheck">
                  <label>
                    <input type="checkbox" class="form-check-input" {{ old('remember') ? 'checked' : '' }}> I agree to the <a href="#">terms</a>
                  </label>
                </div>
              </div>

              <!-- /.col -->
              <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
              </div>
              <!-- /.col -->
            </div>

    </form>
    <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="{{asset('template/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('template/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('template/plugins/iCheck/icheck.min.js')}}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
