<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="../assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Proyecto Base') }}</title>
	<!--     Fonts and icons     -->
	
	<!-- CSS Files -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
	<link href="{{ asset('css/libs.css') }}"  rel="stylesheet"> 

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">   


</head>

<body class="">

	
	<div class="wrapper ">
		<div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
    <div class="logo">
    	<a href="http://www.creative-tim.com" class="simple-text logo-mini">
    		
    	</a>
    	<a href="http://www.creative-tim.com" class="simple-text logo-normal">
    		Proyecto Base
    	</a>
    </div>
    <div class="sidebar-wrapper" id="sidebar-wrapper">
    	<ul class="nav">
    		<li class="{{ activeMenu('home') }}">
    			<a href="home">
    				<i class="now-ui-icons design_app"></i>
    				<p>Dashboard</p>
    			</a>
    		</li>
    		<li class="{{ activeMenu('pagina_1') }}">
    			<a href="pagina_1">
    				<i class="now-ui-icons education_atom"></i>
    				<p>Icons</p>
    			</a>
    		</li>
    		<li  class="{{ activeMenu('pagina_1') }}">
    			<a href="./map.html">
    				<i class="now-ui-icons location_map-big"></i>
    				<p>Maps</p>
    			</a>
    		</li>
    		<li  class="{{ activeMenu('pagina_1') }}">
    			<a href="./notifications.html">
    				<i class="now-ui-icons ui-1_bell-53"></i>
    				<p>Notifications</p>
    			</a>
    		</li>
    		<li  class="{{ activeMenu('pagina_1') }}">
    			<a href="./user.html">
    				<i class="now-ui-icons users_single-02"></i>
    				<p>User Profile</p>
    			</a>
    		</li>
    		<li  class="{{ activeMenu('pagina_1') }}">
    			<a href="./tables.html">
    				<i class="now-ui-icons design_bullet-list-67"></i>
    				<p>Table List</p>
    			</a>
    		</li>
    		<li  class="{{ activeMenu('pagina_1') }}">
    			<a href="./typography.html">
    				<i class="now-ui-icons text_caps-small"></i>
    				<p>Typography</p>
    			</a>
    		</li>
    		<li class="active-pro">
    			<a href="./upgrade.html">
    				<i class="now-ui-icons arrows-1_cloud-download-93"></i>
    				<p>TIC</p>
    			</a>
    		</li>
    	</ul>
    </div>
</div>
   <div class="main-panel" id="main-panel">
       <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
              <a class="navbar-brand" id="index" href="#">
        <label style="max-width: 271px;">Servicio de Salud Arica</label>
        <div class="col-lg-12" style="padding-right:0 !important;padding-left:0 !important;max-width: 271px;">
          <div class="row">
            <div class="col-lg-6" style="padding-right:0 !important;padding-left:0 !important;">
              <div style="height:4px;background-color:red;width:100%;"></div>
            </div>
            <div class="col-lg-6" style="padding-right:0 !important;padding-left:0 !important;">
              <div style="height:4px;background-color:blue;width:100%;"></div>
            </div>                            
          </div>
        </div>

        <label style="max-width: 271px;font-size: large;">Proyecto Base</label>
      </a>
           </a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Buscar...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons users_single-02"></i>{{ current_user()}}
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#"> <i class="now-ui-icons media-1_button-power"> </i> Salir</a> 
                  
                </div>
              </li>
             
            </ul>
          </div>
        </div>
      </nav>
       <div class="panel-header panel-header-lg">
        
      </div>
   	<div id="app">
        <div class="container-fluid mt-4">
   		 @yield('content')
         </div>
   	</div>

   	</div>

</div>
<!--   Core JS Files   -->
<script src="{{ asset('js/app.js') }}" ></script>
<script src="{{ asset('js/libs.js') }}" ></script>        


</body>

</html>