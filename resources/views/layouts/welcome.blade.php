<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="/js/vegas.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="/js/vegas.min.js"></script>
        
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
   


<nav class="navbar navbar-default navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Social Media Canvas</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      
      <ul class="nav navbar-nav navbar-right">
        <li><p class="navbar-text">Já tem uma conta? faça seu</p></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
            <ul id="login-dp" class="dropdown-menu">
                <li>
                     <div class="row">
                            <div class="col-md-12">
                                Login via
                                <div class="social-buttons">
                                    <a href="{{ url('/auth/facebook') }}" class="btn btn-fb" style="width: 100%"><i class="fa fa-facebook"></i> Facebook</a>
                                </div>
                                ou
                                 <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" style="padding-left: 15px;padding-right: 15px;">
                                    

                                    
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}" style="padding-left: 15px;padding-right: 15px;">
                                    

                                    
                                        <input id="password" type="password" class="form-control" name="password" required placeholder="Senha">

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    
                                </div>

                                <div class="form-group" style="padding-left: 15px;padding-right: 15px;">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> Lembrar
                                            </label>
                                        </div>
                                    
                                </div>

                                <div class="form-group" style="padding-left: 15px;padding-right: 15px;">
                                        <button type="submit" class="btn btn-primary">
                                            Entrar
                                        </button>

                                        <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                            Esqueceu sua senha ?
                                        </a>
                                    
                                </div>
                            </form>
                            </div>
                            <div class="bottom text-center">
                                Novo aqui ? <a href="register"><b>Junte-se a nos</b></a>
                            </div>
                     </div>
                </li>
            </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


@yield('content')






</body>
</html>
