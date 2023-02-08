<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Proyecto Vinculación</title>

  @yield('css')
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" >
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">


  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li>
        <div>
          <h1 clas="align-center">Sistema de Evaluación</h1>
       </div>          
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
     <li class="nav-item dropdown">
          <a class="nav-link " data-toggle="dropdown" href="#">
            Bienvenido
              <!-- <i class="fas fa-user"></i> -->
              {{auth()->user()->name}}
          </a>
          <!-- Authentication -->
          <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                @csrf
                <button class="btn btn-block btn-outline-danger btn-xs"><i class="nav-icon fas fa-key"></i> Cerrar Sesión</button>
          </form>
      </li> 
    </ul>
  </nav>
  <!-- /.navbar -->
  @role('admin')
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="http://institutotresdemarzo.edu.ec" class="brand-link">
      <img src="{{ asset('vendor/adminlte/dist/img/logo9.png') }}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><b>Instituto tres de Marzo</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-bars"></i>
                <p>
                  Opciones de usuario
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/user" class="nav-link">
                    <i class="fas fa-users nav-icon"></i>
                    <p>Usuarios registrados</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="user/profile" class="nav-link">
                    <i class="far fa-user nav-icon"></i>
                    <p>Administrar Perfil</p>
                  </a>
                </li>
              </ul>
            <!--   <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="user/profile" class="nav-link">
                    <i class="fas fa-key nav-icon"></i>
                    <p>Cambiar Contraseña</p>
                  </a>
                </li>
              </ul> -->
            </li>
          </ul>
        </nav>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-bars"></i>
              <p>
                Opciones 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/docente" class="nav-link">
                  <i class="fas fa-tools nav-icon"></i>
                  <p>Administrar Docentes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/estudiante" class="nav-link">
                  <i class="fas fa-tools nav-icon"></i>
                  <p>Administrar Estudiantes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-chart-pie nav-icon"></i>
                  <p>Reportes</p>
                </a>
              </li>
     <!--          <li class="nav-item">
                <a href="/carrera" class="nav-link">
                  <i class="fas fa-tools nav-icon"></i>
                  <p>Administrar Carreras</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="\materia" class="nav-link">
                  <i class="fas fa-tools nav-icon"></i>
                  <p>Administrar Materias</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/curso" class="nav-link">
                  <i class="fas fa-tools nav-icon"></i>
                  <p>Administrar Cursos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="\paralelo" class="nav-link">
                  <i class="fas fa-tools nav-icon"></i>
                  <p>Administrar Paralelos</p>
                </a>
              </li>  -->
              <li class="nav-item">
                <a href="\pregunta" class="nav-link">
                  <i class="fas fa-book nav-icon"></i>
                  <p>Administrar Preguntas</p>
                </a>
              </li>
            </ul>
          </li>
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <li class="nav-item">
             <!--  <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Acerca de
                  <span class="right badge badge-danger">..</span>
                </p>
              </a> -->
            </li>
          </div>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
@endrole


@role('estudiante')
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="http://institutotresdemarzo.edu.ec" class="brand-link">
      <img src="{{ asset('vendor/adminlte/dist/img/logo9.png') }}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><b>Instituto tres de Marzo</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-bars"></i>
                <p>
                  Opciones de usuario
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="user/profile" class="nav-link">
                    <i class="far fa-user nav-icon"></i>
                    <p>Administrar Perfil</p>
                  </a>
                </li>
              </ul>
            <!--   <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="user/profile" class="nav-link">
                    <i class="fas fa-key nav-icon"></i>
                    <p>Cambiar Contraseña</p>
                  </a>
                </li>
              </ul> -->
            </li>
          </ul>
        </nav>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-bars"></i>
              <p>
                Opciones 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/evaluacion" class="nav-link">
                  <i class="fas fa-check nav-icon"></i>
                  <p>Realizar evaluación</p>
                </a>
              </li>
            </ul>
          </li>
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <li class="nav-item">
             <!--  <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Acerca de
                  <span class="right badge badge-danger">..</span>
                </p>
              </a> -->
            </li>
          </div>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  
@endrole

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <div id="current_date">
              <script>
                  document.getElementById("current_date").innerHTML = Date();
              </script>
            </div>
        
            <!--h1 class="m-0">Dashboard</h1-->
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard"><i class="nav-icon fas fa-home"></i> Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
         @yield('contenido')
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->


  <!-- /.control-sidebar -->
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Programando para un mundo mejor
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2022 <a href="https://itsgg.edu.ec">Realizado por alumnos del ITSG</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->
<!-- REQUIRED SCRIPTS --
<!-- jQuery -->

<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/vendor/adminlte/dist/js/adminlte.min.js')}}"></script>
@yield('js')
</body>
</html>
