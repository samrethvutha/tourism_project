
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
     <link href="{{ asset('public/css/common.css') }}" rel="stylesheet">  

{{--  <script src="{{ asset('public/_/cdn-cgi/apps/head/gmXC2gL9CEI5yG32ZFrDP6Fm73k.js') }}"></script>  --}}
<link rel="stylesheet" type="text/css" href="{{ asset('public/_/components/bootstrap/dist/css/bootstrap.min.css') }}" />

{{--  <script src="js/demo-rtl.js"></script>  --}}


<!-- <link rel="stylesheet" type="text/css" href="components/font-awesome/css/font-awesome.css" /> -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"/>  
<link rel="stylesheet" type="text/css" href="{{ asset('public/_/css/libs/nanoscroller.css') }}" />

<link rel="stylesheet" type="text/css" href="{{ asset('public/_/css/compiled/theme_styles.css') }}" />

<link rel="stylesheet" type="text/css" href="{{ asset('public/_/components-custom/jquery-jvectormap-2.0.3/jquery-jvectormap-2.0.3.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('public/_/components/weather-icons/css/weather-icons.min.css') }}" />

<link type="image/x-icon" href="favicon.png" rel="shortcut icon" />

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<div id="theme-wrapper">
<header class="navbar" id="header-navbar">
<div class="container">
<a href="index.html" id="logo" class="navbar-brand">
<img src="{{ asset('public/_/img/logo.png') }}" class="normal-logo logo-white" >
{{--  <img src="{{ asset('public/_/img/logo-black.png') }}" class="normal-logo logo-white" >  --}}
<img src="{{ asset('public/_/img/logo-small.png') }}" class="small-logo hidden-xs hidden-sm hidden" >
{{--  <img src="{{ asset('public/_/') }}" alt="">
<img src="" alt="" class="normal-logo logo-white" />
<img src="" alt="" class="normal-logo logo-black" />
<img src="" alt="" class="small-logo hidden-xs hidden-sm hidden" />  --}}
</a>
<div class="clearfix">
<button class="navbar-toggle" data-target=".navbar-ex1-collapse" data-toggle="collapse" type="button">
<span class="sr-only">Toggle navigation</span>
<span class="fa fa-bars"></span>
</button>
<div class="nav-no-collapse navbar-left pull-left hidden-sm hidden-xs">
<ul class="nav navbar-nav pull-left">
<li>
<a class="btn" id="make-small-nav">
<i class="fa fa-bars"></i>
</a>
</li>
<li class="dropdown hidden-xs">
<a class="btn dropdown-toggle" data-toggle="dropdown">
<i class="fa fa-bell"></i>
<span class="count">8</span>
</a>
<ul class="dropdown-menu notifications-list">
<li class="pointer">
<div class="pointer-inner">
<div class="arrow"></div>
</div>
</li>
<li class="item-header">You have 6 new notifications</li>
<li class="item">
<a href="index.html#">
<i class="fa fa-comment"></i>
<span class="content">New comment on ‘Awesome P...</span>
<span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
</a>
</li>
<li class="item">
<a href="index.html#">
<i class="fa fa-plus"></i>
<span class="content">New user registration</span>
<span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
</a>
</li>
<li class="item">
<a href="index.html#">
<i class="fa fa-envelope"></i>
<span class="content">New Message from George</span>
<span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
</a>
</li>
<li class="item">
<a href="index.html#">
<i class="fa fa-shopping-cart"></i>
<span class="content">New purchase</span>
<span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
</a>
</li>
<li class="item">
<a href="index.html#">
<i class="fa fa-eye"></i>
<span class="content">New order</span>
<span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
</a>
</li>
<li class="item-footer">
<a href="index.html#">
View all notifications
</a>
</li>
</ul>
</li>
<li class="dropdown hidden-xs">
<a class="btn dropdown-toggle" data-toggle="dropdown">
<i class="fa fa-envelope-o"></i>
<span class="count">16</span>
</a>
<ul class="dropdown-menu notifications-list messages-list">
<li class="pointer">
<div class="pointer-inner">
<div class="arrow"></div>
</div>
</li>
<li class="item first-item">
<a href="index.html#">

<img src="{{ asset('public/_/img/samples/messages-photo-1.png') }}" alt="">
<span class="content">
<span class="content-headline">
George Clooney
</span>
<span class="content-text">
Look, just because I don't be givin' no man a foot massage don't make it
right for Marsellus to throw...
</span>
</span>
<span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
</a>
</li>
<li class="item">
<a href="index.html#">
<img src="{{ asset('public/_/img/samples/messages-photo-2.png') }}" alt="">
<span class="content">
<span class="content-headline">
Emma Watson
</span>
<span class="content-text">
Look, just because I don't be givin' no man a foot massage don't make it
right for Marsellus to throw...
</span>
</span>
<span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
</a>
</li>
<li class="item">
<a href="index.html#">
<img src="{{ asset('public/_/img/samples/messages-photo-3.png') }}" alt="">
<span class="content">
<span class="content-headline">
Robert Downey Jr.
</span>
<span class="content-text">
Look, just because I don't be givin' no man a foot massage don't make it
right for Marsellus to throw...
</span>
</span>
<span class="time"><i class="fa fa-clock-o"></i>13 min.</span>
</a>
</li>
<li class="item-footer">
<a href="index.html#">
View all messages
</a>
</li>
</ul>
</li>
<li class="dropdown hidden-xs">
<a class="btn dropdown-toggle" data-toggle="dropdown">
New Item
<i class="fa fa-caret-down"></i>
</a>
<ul class="dropdown-menu">
<li class="item">
<a href="index.html#">
<i class="fa fa-archive"></i>
New Product
</a>
</li>
<li class="item">
<a href="index.html#">
<i class="fa fa-shopping-cart"></i>
New Order
</a>
</li>
<li class="item">
<a href="index.html#">
<i class="fa fa-sitemap"></i>
New Category
</a>
</li>
<li class="item">
<a href="index.html#">
<i class="fa fa-file-text"></i>
New Page
</a>
</li>
</ul>
</li>
<li class="dropdown hidden-xs">
<a class="btn dropdown-toggle" data-toggle="dropdown">
English
<i class="fa fa-caret-down"></i>
</a>
<ul class="dropdown-menu">
<li class="item">
<a href="index.html#">
Spanish
</a>
</li>
<li class="item">
<a href="index.html#">
German
</a>
</li>
<li class="item">
<a href="index.html#">
Italian
</a>
</li>
</ul>
</li>
</ul>
</div>
<div class="nav-no-collapse pull-right" id="header-nav">
<ul class="nav navbar-nav pull-right">
<li class="mobile-search">
<a class="btn">
<i class="fa fa-search"></i>
</a>
<div class="drowdown-search">
<form role="search">
<div class="form-group">
<input type="text" class="form-control" placeholder="Search...">
<i class="fa fa-search nav-search-icon"></i>
</div>
</form>
</div>
</li>
<li class="dropdown profile-dropdown">
<a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">
<img src="{{ asset('public/_/img/samples/scarlet-159.png') }}" alt="">
<span class="hidden-xs">Scarlett Johansson</span> <b class="caret"></b>
</a>
<ul class="dropdown-menu dropdown-menu-right">
<li><a href="user-profile.html"><i class="fa fa-user"></i>Profile</a></li>
<li><a href="index.html#"><i class="fa fa-cog"></i>Settings</a></li>
<li><a href="index.html#"><i class="fa fa-envelope-o"></i>Messages</a></li>
<li><a href="index.html#"><i class="fa fa-power-off"></i>Logout</a></li>
</ul>
</li>
<li class="hidden-xxs">
<a class="btn">
<i class="fa fa-power-off"></i>
</a>
</li>
</ul>
</div>
</div>
</div>
</header>
<div id="page-wrapper" class="container">
<div class="row">
<div id="nav-col">
<section id="col-left" class="col-left-nano">
<div id="col-left-inner" class="col-left-nano-content">
<div id="user-left-box" class="clearfix hidden-sm hidden-xs dropdown profile2-dropdown">
<img src="{{ asset('public/_/img/samples/scarlet-159.png') }}" alt="">
<div class="user-box">
<span class="name">
<a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">
Scarlett J.
<i class="fa fa-angle-down"></i>
</a>
<ul class="dropdown-menu">
<li><a href="user-profile.html"><i class="fa fa-user"></i>Profile</a></li>
<li><a href="index.html#"><i class="fa fa-cog"></i>Settings</a></li>
<li><a href="index.html#"><i class="fa fa-envelope-o"></i>Messages</a></li>
<li><a href="index.html#"><i class="fa fa-power-off"></i>Logout</a></li>
</ul>
</span>
<span class="status">
<i class="fa fa-circle"></i> Online
</span>
</div>
</div>
<div class="collapse navbar-collapse navbar-ex1-collapse" id="sidebar-nav">
<ul class="nav nav-pills nav-stacked">
<li class="nav-header nav-header-first hidden-sm hidden-xs">
Navigation
</li>
<li class="active">
<a href="index.html">
<i class="fa fa-dashboard"></i>
<span>Dashboard</span>
<span class="label label-primary label-circle pull-right">28</span>
</a>
</li>
<li>
<a href="index.html#" class="dropdown-toggle">
<i class="fa fa-table"></i>
<span>Province</span>
{{--  <i class="fa fa-angle-right drop-icon"></i>  --}}
</a>
{{--  <ul class="submenu">
<li>
<a href="tables.html">
Simple
</a>
</li>
<li>
<a href="tables-advanced.html">
Advanced
</a>
</li>
<li>
<a href="users.html">
Users
</a>
</li>
<li>
<a href="tables-footables.html">
FooTables
<span class="label label-success pull-right">New</span>
</a>
</li>
</ul>  --}}
{{--  </li>  --}}
<li>
<a href="index.html#" class="dropdown-toggle">
<i class="fa fa-envelope"></i>
<span>Tourism</span>
{{--  <i class="fa fa-angle-right drop-icon"></i>  --}}
</a>
{{--  <ul class="submenu">
<li>
<a href="email-inbox.html">
Inbox
</a>
</li>
<li>
<a href="email-detail.html">
Detail
</a>
</li>
<li>
<a href="email-compose.html">
Compose
</a>
</li>
</ul>  --}}
</li>
{{--  <li>
<a href="index.html#" class="dropdown-toggle">
<i class="fa fa-bar-chart-o"></i>
<span>Graphs</span>
<i class="fa fa-angle-right drop-icon"></i>
</a>
<ul class="submenu">
<li>
<a href="graphs-morris.html">
Morris &amp; Mixed
</a>
</li>  --}}
{{--  <li>
<a href="graphs-flot.html">
Flot
</a>
</li>
<li>  --}}
{{--  <a href="graphs-dygraphs.html">
Dygraphs
</a>
</li>
<li>  --}}
{{--  <a href="graphs-xcharts.html">
xCharts
</a>
</li>
</ul>
</li>
<li>  --}}
{{--  <a href="widgets.html">
<i class="fa fa-th-large"></i>
<span>Widgets</span>
<span class="label label-success pull-right">New</span>
</a>
</li>
<li>  --}}
{{--  <a href="index.html#" class="dropdown-toggle">
<i class="fa fa-copy"></i>
<span>Pages</span>
<i class="fa fa-angle-right drop-icon"></i>
</a>
<ul class="submenu">
<li>
<a href="calendar.html">
Calendar
</a>
</li>
<li>
<a href="gallery.html">
Gallery
</a>
</li>
<li>
<a href="gallery-v2.html">
Gallery v2
</a>
</li>
<li>
<a href="pricing.html">
Pricing
</a>
</li>
<li>
<a href="projects.html">
Projects
</a>
</li>
<li>
<a href="team-members.html">
Team Members
</a>
</li>
<li>
<a href="timeline.html">
Timeline
</a>
</li>
<li>
<a href="timeline-grid.html">
Timeline Grid
</a>
</li>
<li>
<a href="user-profile.html">
User Profile
</a>
</li>
<li>
<a href="search.html">
Search Results
</a>
</li>
<li>
<a href="invoice.html">
Invoice
</a>
</li>
<li>
<a href="intro.html">
Tour Layout
</a>
</li>
</ul>
</li>
<li class="nav-header hidden-sm hidden-xs">
Components
</li>
<li>
<a href="index.html#" class="dropdown-toggle">
<i class="fa fa-edit"></i>
<span>Forms</span>
<i class="fa fa-angle-right drop-icon"></i>
</a>
<ul class="submenu">
<li>
<a href="form-elements.html">
Elements
</a>
</li>
<li>
<a href="x-editable.html">
X-Editable
</a>
</li>
<li>
<a href="form-wizard.html">
Wizard
</a>
</li>
<li>
<a href="form-wizard-popup.html">
Wizard popup
</a>
</li>
<li>
<a href="form-wysiwyg.html">
WYSIWYG
</a>
</li>
<li>
<a href="form-summernote.html">
WYSIWYG Summernote
</a>
</li>
<li>
<a href="form-ckeditor.html">
WYSIWYG CKEditor
</a>
</li>
<li>
<a href="form-dropzone.html">
Multiple File Upload
</a>
</li>
</ul>
</li>
<li>
<a href="index.html#" class="dropdown-toggle">
<i class="fa fa-desktop"></i>
<span>UI Kit</span>
<i class="fa fa-angle-right drop-icon"></i>
</a>
<ul class="submenu">
<li>
<a href="ui-elements.html">
Elements
</a>
</li>
<li>
<a href="notifications.html">
Notifications &amp; Alerts
</a>
</li>
<li>
<a href="modals.html">
Modals
</a>
</li>
<li>
<a href="video.html">
Video
</a>
</li>
<li>
<a href="index.html#" class="dropdown-toggle">
Icons
<i class="fa fa-angle-right drop-icon"></i>
</a>
<ul class="submenu">
<li>
<a href="icons-awesome.html">
Awesome Icons
</a>
</li>
<li>
<a href="icons-halflings.html">
Halflings Icons
</a>
</li>
</ul>
</li>
<li>  --}}
{{--  <a href="ui-nestable.html">
Nestable List
</a>
</li>
<li>
<a href="typography.html">
Typography
</a>
</li>
<li>
<a href="index.html#" class="dropdown-toggle">
3 Level Menu
<i class="fa fa-angle-right drop-icon"></i>
</a>
<ul class="submenu">
<li>
<a href="index.html#">
3rd Level
</a>
</li>
<li>
<a href="index.html#">
3rd Level
</a>
</li>
<li>
<a href="index.html#">
3rd Level
</a>
</li>
</ul>
</li>
</ul>
</li>
<li>
<a href="maps.html">
<i class="fa fa-map-marker"></i>
<span>Google Maps</span>
<span class="label label-danger pull-right">Updated</span>
</a>
</li>
<li>
<a href="index.html#" class="dropdown-toggle">
<i class="fa fa-file-text-o"></i>
<span>Extra pages</span>
<i class="fa fa-angle-right drop-icon"></i>
</a>
<ul class="submenu">
<li>
<a href="faq.html">
FAQ
</a>
</li>
<li>
<a href="emails.html">
Email Templates
</a>
</li>
<li>
<a href="login.html">
Login
</a>
</li>
<li>
<a href="login-full.html">
Login Full
</a>
</li>
<li>
<a href="registration.html">
Registration
</a>
</li>
<li>
<a href="registration-full.html">
Registration Full
</a>
</li>
<li>
<a href="forgot-password.html">
Forgot Password
</a>
</li>
<li>
<a href="forgot-password-full.html">
Forgot Password Full
</a>
</li>
<li>
<a href="lock-screen.html">
Lock Screen
</a>
</li>
<li>
<a href="lock-screen-full.html">
Lock Screen Full
</a>
</li>
<li>
<a href="error-404.html">
Error 404
</a>
</li>
<li>
<a href="error-404-v2.html">
Error 404 Nested
</a>
</li>
<li>
<a href="error-500.html">
Error 500
</a>
</li>
<li>
<a href="extra-grid.html">
Grid
</a>
</li>
</ul>
</li>
<li>
<a href="https://cube.adbee.technology/angularjs">
<i class="fa fa-google"></i>
<span>AngularJS Demo</span>
</a>
</li>
</ul>  --}}
</div>
</div>
</section>
<div id="nav-col-submenu"></div>
</div>


<div id="content-wrapper">
<div class="row">
<div class="col-lg-12">
<div class="row">
<div class="col-lg-12">
<div id="content-header" class="clearfix">
<div class="pull-left">
<ol class="breadcrumb">
 <li><a href="index.html#">Home</a></li>
<li class="active"><span>Dashboard</span></li>
</ol>
<h1>Dashboard</h1>
</div>
<div class="pull-right hidden-xs">
<div class="xs-graph pull-left">
<div class="graph-label">
<b><i class="fa fa-shopping-cart"></i> 838</b> Orders
</div>
<div class="graph-content spark-orders"></div>
</div>
<div class="xs-graph pull-left mrg-l-lg mrg-r-sm">
<div class="graph-label">
<b>&dollar;12.338</b> Revenues
</div>
<div class="graph-content spark-revenues"></div>
</div>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-lg-3 col-sm-6 col-xs-12">
<div class="main-box infographic-box colored emerald-bg">
<i class="fa fa-envelope"></i>
<span class="headline">Messages</span>
<span class="value">4.658</span>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-xs-12">
<div class="main-box infographic-box colored green-bg">
<i class="fa fa-money"></i>
<span class="headline">Orders</span>
<span class="value">22.631</span>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-xs-12">
<div class="main-box infographic-box colored red-bg">
<i class="fa fa-user"></i>
<span class="headline">Users</span>
<span class="value">92.421</span>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-xs-12">
<div class="main-box infographic-box colored purple-bg">
<i class="fa fa-globe"></i>
<span class="headline">Visits</span>
<span class="value">13.298</span>
</div>
</div>
</div>

</div>
</div>
<footer id="footer-bar" class="row">
<p id="footer-copyright" class="col-xs-12">
Powered by Cube Theme.
</p>
</footer>
</div>
</div>
</div>
</div>

{{--  
<div id="config-tool" class="closed">
<a id="config-tool-cog">
<i class="fa fa-cog"></i>
</a>
<div id="config-tool-options">
<h4>Layout Options</h4>
<ul>
<li>
<div class="checkbox-nice">
<input type="checkbox" id="config-fixed-header" />
<label for="config-fixed-header">
Fixed Header
</label>
</div>
</li>
<li>
<div class="checkbox-nice">
<input type="checkbox" id="config-fixed-sidebar" />
<label for="config-fixed-sidebar">
Fixed Left Menu
</label>
</div>
</li>
<li>
<div class="checkbox-nice">
<input type="checkbox" id="config-fixed-footer" />
<label for="config-fixed-footer">
Fixed Footer
</label>
</div>
</li>
<li>
<div class="checkbox-nice">
<input type="checkbox" id="config-boxed-layout" />
<label for="config-boxed-layout">
Boxed Layout
</label>
</div>
</li>
<li>
<div class="checkbox-nice">
<input type="checkbox" id="config-rtl-layout" />
<label for="config-rtl-layout">
Right-to-Left
</label>
</div>
</li>
</ul>
<br />
<h4>Skin Color</h4>
<ul id="skin-colors" class="clearfix">
<li>
<a class="skin-changer" data-skin="" data-toggle="tooltip" title="Default" style="background-color: #34495e;">
</a>
</li>
<li>
<a class="skin-changer" data-skin="theme-white" data-toggle="tooltip" title="White/Green" style="background-color: #2ecc71;">
</a>
</li>
<li>
<a class="skin-changer blue-gradient" data-skin="theme-blue-gradient" data-toggle="tooltip" title="Gradient">
</a>
</li>
<li>
<a class="skin-changer" data-skin="theme-turquoise" data-toggle="tooltip" title="Green Sea" style="background-color: #1abc9c;">
</a>
</li>
<li>
<a class="skin-changer" data-skin="theme-amethyst" data-toggle="tooltip" title="Amethyst" style="background-color: #9b59b6;">
</a>
</li>
<li>
<a class="skin-changer" data-skin="theme-blue" data-toggle="tooltip" title="Blue" style="background-color: #2980b9;">
</a>
</li>
<li>
<a class="skin-changer" data-skin="theme-red" data-toggle="tooltip" title="Red" style="background-color: #e74c3c;">
</a>
</li>
<li>
<a class="skin-changer" data-skin="theme-whbl" data-toggle="tooltip" title="White/Blue" style="background-color: #3498db;">
</a>
</li>
</ul>
</div>
</div>  --}}

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="{{ asset('public/_/js/demo-skin-changer.js') }}"></script> 
{{--  <script src="{{ asset('public/_/components/jquery/dist/jquery.min.js') }}"></script>  --}}
<script src="{{ asset('public/_/components/bootstrap/dist/js/bootstrap.js') }}"></script>
<script src="{{ asset('public/_/components/nanoscroller/bin/javascripts/jquery.nanoscroller.min.js') }}"></script>
<script src="{{ asset('public/_/components/moment/min/moment.min.js') }}"></script>
{{--  <script src="{{ asset('public/_/components-custom/jquery-jvectormap-2.0.3/jquery-jvectormap-2.0.3.min.js') }}"></script>
<script src="{{ asset('public/_/components-custom/jvectormap-maps/jquery-jvectormap-world-merc.js') }}"></script>
<script src="{{ asset('public/_/components-custom/jvectormap-maps/gdp-data.js') }}"></script>
<script src="{{ asset('public/_/js/demo.js') }}"></script>  --}}
{{--  <script src="http://cdn.jsdelivr.net/jquery.flot/0.8.3/jquery.flot.min.js"></script>  --}}

<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="{{ asset('public/_/components/flot/excanvas.min.js') }}"></script><![endif]-->
{{--  <script src="{{ asset('public/_/components/flot/jquery.flot.js') }}"></script>
<script src="{{ asset('public/_/components/flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('public/_/components/flot/jquery.flot.time.js') }}"></script>
<script src="{{ asset('public/_/components/flot/jquery.flot.threshold.js') }}"></script>  --}}
{{--  <script src="{{ asset('public/_/components/flot-axislabels/jquery.flot.axislabels.js') }}"></script>  --}}
{{--  <script src="{{ asset('public/_/components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('public/_/components/skycons/skycons.js') }}"></script>  --}}
<script src="{{ asset('public/_/js/scripts.js') }}"></script>
{{--  <script src="{{ asset('public/_/components/PACE/pace.min.js') }}"></script>  --}}
<script>
	$(document).ready(function() {
		
	  

	});
	</script>
    <script src="{{ asset('public/js/app.js') }}"></script>  
</body>
</html>

