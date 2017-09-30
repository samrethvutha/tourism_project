<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" data-ng-app="app">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"/>  

    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
     <link href="{{ asset('public/css/common.css') }}" rel="stylesheet">  
     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
     <link href="{{ asset('public/libs/google-map/maps.css') }}" rel="stylesheet">  
     <link href="{{ asset('public/libs/alertify/alertify.css') }}" rel="stylesheet"/>  
     {{--  <script src="http://malsup.github.com/jquery.form.js"></script>     --}}
     <link href="{{ asset('public/libs/alertify/default.css') }}" rel="stylesheet"/>
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"/>     
     <script src="{{ asset('public/libs/alertify/alertify.js') }}"></script> 
     <script src="{{URL::asset('public/libs/sweetalert-master/dist/sweetalert.min.js')}}"></script>
     <link rel="stylesheet" type="text/css" href="{{URL::asset('public/libs/sweetalert-master/dist/sweetalert.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.6/angular.min.js"></script>
<script src="//unpkg.com/angular-ui-router/release/angular-ui-router.min.js"></script>

    {{-- 
    <link href="{{ asset('libs/fileinput/bootstrap-fileinput/themes/explorer/theme.css') }}" media="all" rel="stylesheet" type="text/css"/>  
    <link href="{{ asset('libs/fileinput/bootstrap-fileinput/css/fileinput.css') }}" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
       <script src="{{ asset('libs/fileinput/bootstrap-fileinput/js/fileinput.js') }}" type="text/javascript"></script>
        <script src="{{ asset('libs/fileinput/bootstrap-fileinput/js/plugins/sortable.js') }}" type="text/javascript"></script>

    <script src="{{ asset('libs/fileinput/bootstrap-fileinput/js/locales/fr.js') }}" type="text/javascript"></script>
    <script src="{{ asset('libs/fileinput/bootstrap-fileinput/js/locales/es.js') }}" type="text/javascript"></script>

    <script src="{{ asset('libs/fileinput/bootstrap-fileinput/themes/explorer/theme.js') }}" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>  --}}

    
    {{--  <script src="http://www.dropzonejs.com/js/dropzone.js?v=6"></script>  --}}
    {{--  <script src="{{URL::asset('libs/loadingoverlay/loadingoverlay.min.js')}}"></script>  
    <script src="{{URL::asset('libs/loadingoverlay/loadingoverlay_progress.min.js')}}"></script>    --}}
 </head>
<body>
    <a ui-sref="appl" ui-sref-active="active">Hello</a>
    <a ui-sref="about" ui-sref-active="active">About</a>

    
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ asset('login') }}">Login</a></li>
                            <li><a href="{{ asset('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ asset('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ asset('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    <div class="container">
        @section('sidebar')
           @if (!Auth::guest())
       <div class="col-md-2 panel-default">
<ul class="nav nav-rb navbar-default sidebar panel panel-default nav-list">
       <li>
                            <a href="{{url('admin')}}" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                          <li>
                            <a href="{{url('admin/tourisms')}}" class="active"><i class="fa fa-table fa-fw"></i> Tourisms</a>
                        </li>
                         <li>
                            <a href="{{url('admin/gallerys')}}" class="active"><i class="fa fa-table fa-fw"></i> Gallery</a>
                        </li>
                         <li>
                            <a class="accordion-heading" data-toggle="collapse" data-target="#subMedia">
      <span class="nav-header-primary"><i class="fa fa-wrench fa-fw"></i>  Media <b class="caret"></b></span>
    </a>
      <ul class="nav nav-list collapse" id="subMedia">
      <li><a href="{{url('admin/images')}}" title="Title">Images</a></li>
      <li><a href="#" title="Title">Videos</a></li>
    </ul>
                           
                        </li>
                         <li>
                            <a href="{{url('admin/provinces')}}" class="active"><i class="fa fa-table fa-fw"></i> Province</a>
                        </li>
                         <li>
                            <a href="{{url('admin/tourisms')}}" class="active"><i class="fa fa-dashboard fa-fw"></i> Tourisms</a>
                        </li>
  <li>
    <a class="accordion-heading" data-toggle="collapse" data-target="#submenu">
      <span class="nav-header-primary"><i class="fa fa-wrench fa-fw"></i>  Setting <b class="caret"></b></span>
    </a>
      <ul class="nav nav-list collapse" id="submenu">
      <li><a href="#" title="Title">Roles</a></li>
      <li><a href="#" title="Title">Permissions</a></li>
      <li><a href="/admin/users" title="Title">Users</a></li>
    </ul>
  </li>
</ul>
        </div>
            @endif
        @show
        @yield('content')
    </div>
    </div>
    <!-- Scripts -->
    
  <script src="{{ asset('public/js/app.js') }}"></script> 
<script src="{{ asset('public/app/application.js') }}"></script> 

  {{-- <script src="{{ asset('js/jquery.min.js') }}"></script> 
  <script src="{{ asset('libs/formoid-solid-red.js') }}"></script>
  <link href="{{ asset('libs/formoid-solid-red.css') }}" rel="stylesheet">    --}}
  
</body>
</html>
