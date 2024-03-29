 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Título -->
  <title>@yield('titulo', 'CEAA')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
  <!-- Agregar estilos -->
  @yield('estilos')
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('css/skin-blue.min.css') }}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- Mis estilos -->
  <link rel="stylesheet" href="{{ asset('css/mis-estilos.css') }}">
  <!-- Favicon -->
  <link rel="favicon" href="{{ asset('img/sistema/favicon.png') }}" />
  <link rel="shortcut icon" href="{{ asset('img/sistema/favicon.ico') }}" />


</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="hold-transition skin-blue fixed sidebar-mini">
<?php
  // Nombre corto de usuario autentificado.
  $nombre = explode(' ', Auth::user()->nombre);
  $apellido = explode(' ', Auth::user()->apellido);
  $anio = \Carbon\Carbon::now()->format('Y');
?>
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">
        <img src="{{ asset('img/sistema/logo_blanco.png') }}" class="logo-mini-tamanio" alt="Mini logo" />
      </span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"> C.E. El Torogoz</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Navegación</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ asset('img/users/' . Auth::user()->imagen) }}" class="user-image" alt="Imagen de usuario">
              <span class="hidden-xs">{{ $nombre[0] }} {{ $apellido[0] }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{ asset('img/users/' . Auth::user()->imagen) }}" class="img-circle" alt="Imagen de usuario">
                <p>
                  {{ $nombre[0] }} {{ $apellido[0] }}
                  <small>{{ Auth::user()->rol->nombre }}</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="{{ route('home') }}" class="btn btn-default btn-flat">Inicio</a>
                </div>
                <div class="pull-right">
                  <a href="{{ route('logout') }}" class="btn btn-default btn-flat" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Cerrar sesión</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('img/users/' . Auth::user()->imagen) }}" class="img-circle" alt="Imagen de usuario">
        </div>
        <div class="pull-left info">
          <p>{{ $nombre[0] }} {{ $apellido[0] }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        @if (Auth::user()->estra())
        <li class="header">ESTRATEGICO</li>
         <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-file"></i> <span>Reportes Estrategicos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('reportesEstrategicos.reporte') }}"><i class="fa fa-circle-o"></i> Asistencias de alumnos</a></li>
            <li><a href="{{ route('reportesEstrategicos.reporte2') }}"><i class="fa fa-circle-o"></i> Asistencia de profesores</a></li>
            <li><a href="{{ route('reportesEstrategicos.reporte3') }}"><i class="fa fa-circle-o"></i> Índice de reprobados</a></li>
            <li><a href="{{ route('reportesEstrategicos.reporte4') }}"><i class="fa fa-circle-o"></i> Porcentaje de alumnos ausentes</a></li>
            <li><a href="{{ route('reportesEstrategicos.reporte5') }}"><i class="fa fa-circle-o"></i> Porcentaje de alumnos sobresalientes</a></li>
          </ul>
          @endif
        </li>

        @if (Auth::user()->tacti())
        <li class="header">TÁCTICO</li>

        <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-file"></i> <span>Reportes Tácticos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('reportesTacticos.reporte') }}"><i class="fa fa-circle-o"></i> Asistencias de alumnos</a></li>
            <li><a href="{{ route('reportesTacticos.reporte2') }}"><i class="fa fa-circle-o"></i> Alumnos aunsentes</a></li>
            <li><a href="{{ route('reportesTacticos.reporte3') }}"><i class="fa fa-circle-o"></i> Alumnos Reprobados</a></li>
            <li><a href="{{ route('reportesTacticos.reporte4') }}"><i class="fa fa-circle-o"></i> Utilizacion de los laboratorio</a></li>
            <li><a href="{{ route('reportesTacticos.reporte5') }}"><i class="fa fa-circle-o"></i> Horas trabajadas por docentes</a></li>
            <li><a href="{{ route('reportesTacticos.reporte6') }}"><i class="fa fa-circle-o"></i> Indice conductual</a></li>
          </ul>
        </li>
        @endif

        @if (Auth::user()->admin())
        <li class="header">ADMINISTRACIÓN</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-shield"></i> <span>Seguridad</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('users.index') }}"><i class="fa fa-circle-o"></i> Usuarios</a></li>
            <li><a href="{{ route('roles.index') }}"><i class="fa fa-circle-o"></i> Roles de usuario</a></li>
          </ul>
        </li>
        @endif
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        @yield('encabezado', 'Encabezado')
        <small>@yield('subencabezado')</small>
      </h1>
      <ol class="breadcrumb">
        @yield('breadcrumb')
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      @include('flash::message')
      @yield('contenido')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer no-print">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; {{ $anio }} <a href="/home">Centro Escolar El Torogoz</a></strong>
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('js/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('js/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('js/demo.js') }}"></script>
<!-- Agregar scripts -->
@yield('scripts')
</body>
</html>
