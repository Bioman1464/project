<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">


    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <script src="{{ asset('js/jquery.min.js') }}"></script>

  </head>

  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class='container-fluid'>
        <div class='navbar-header'>
          <button type="button" class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar' aria-expanded='false' aria-controls='navbar'>
            <span class='sr-only'>Toggle navigation</span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
            <span class='icon-bar'></span>
          </button>
          <a class='navbar-brand' href="#" title="">Admin Panel</a>
        </div>
        <div id='navbar' class='navbar-collapse collapse'>
          <ul class='nav navbar-nav navbar-right'>
            <li><a href="/" title="">Home</a></li>
            <li><a href="/admin/index" title="">Dashboard</a></li>
            <li><a href="/" title="">Settings</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div>
      <div>
        <div>
          <ul>
            <li class='active'><a href="/admin/index" title="">Overview <span class='sr-only'>(current)</span></a></li>
            <li><a href="/admin/insertForm">Insert</a></li>
            <li><a href="#">Edit</a></li>
            <li><a href="/admin/users"></a></li>
            <li><a href="#">Analytics</a></li>
          </ul>
          <ul class='nav nav-sidebar'>
            
          </ul>
          <ul class='nav nav-sidebar'>
            
          </ul>
        </div>
        <div class='col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main'>
          <h1 class='page-header'>Dashboard</h1>

          @yield('body')
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>


  </body>
</html>