<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">




    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <link href="{{asset ('css/dashboard.css')}}" rel="stylesheet">

  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap">
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
            <li><a href="/products" title="">Home</a></li>
            <li><a href="/admin/index" title="">Dashboard</a></li>
            <li><a href="#" title="">Settings</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block sidebar">
          <div class="sidebar-sticky">
                <ul class="nav flex-column">
                  <li class='active nav-item'><a href="/admin/index" title="">Overview <span class='sr-only'>(current)</span></a></li>
                  <li class='nav-item'><a href="/admin/createProductForm">Insert</a></li>
                  <li class='nav-item'><a href="#">Edit</a></li>
                  <li class='nav-item'><a href="/admin/users">Users</a></li>
                  <li class='nav-item'><a href="#">Analytics</a></li>
                </ul>
          
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <h2>Dashboard</h2>
          @yield('body')
        </main>
      </div>
    </div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>


  </body>
</html>