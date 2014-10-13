<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('meta-title', 'Page') | {{Config::get('xlayout::meta-title')}}</title>

    <!-- Bootstrap -->
    {{HTML::style('packages/martinsdeee/xlayout/assets/packages/bootstrap/css/bootstrap.min.css')}}
    {{HTML::style('packages/martinsdeee/xlayout/assets/packages/bootstrap/css/bootstrap-theme.min.css')}}
    {{HTML::style('packages/martinsdeee/xlayout/assets/css/main.css')}}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="row">
        @yield('content')
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    {{HTML::script('packages/martinsdeee/xlayout/assets/packages/bootstrap/js/bootstrap.min.js')}}
    {{HTML::script('packages/martinsdeee/xlayout/assets/js/main.js')}}

    @yield('scripts')

  </body>
</html>
