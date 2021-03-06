<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Portal Administrativo SYBICEP</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
     <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../css/font-awesome.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../css/AdminLTE.min.css">
    <link href="../css/animate.min.css" rel="stylesheet">
    <link href="plugins/pnotify/pnotify.custom.min.css" rel="stylesheet">
    <link href="plugins/CustomAlerts/css/jquery-confirm.css" rel="stylesheet">
    <link href="css/spinner.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/_all-skins.min.css">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="shortcut icon" href="img/favicon.ico">

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="MenuPrincipal.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>IC</b>EP</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>SYBICEP</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
         
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <small class="bg-red">Online</small>
                  <span class="hidden-xs">GUNVOLT</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    
                    
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Cerrar</a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
                    
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Biblioteca</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Libro</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Detalles</a></li>
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-th"></i>
                <span>Administracion</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="VistaMaestros.php"><i class="fa fa-circle-o"></i> Maestros</a></li>
                
              </ul>
            </li>
            
                       
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Acceso</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Usuarios</a></li>
                
              </ul>
            </li>
             <li>
              <a href="#">
                <i class="fa fa-plus-square"></i> <span>Ayuda</span>
                <small class="label pull-right bg-red">PDF</small>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-info-circle"></i> <span>Acerca De...</span>
                <small class="label pull-right bg-yellow">IT</small>
              </a>
            </li>
                        
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>





       <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        
        <!-- Main content -->
        <section class="content">
          
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">SEARCH YOUR BOOK </h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                      <div class="col-md-12">
                              <!--Contenido-->
                              <h3>Contenido</h3>
                             <div class="container">
    <!-- <div class="row"> -->

      <div class="row">
        
      </div>
      <div class="row" style="margin-bottom: 20px">
        
        <div class="col-xs-4 form-group">
          <select name="" id="select_status" class="form-control">
            <option value="2">TODOS</option>
            <option value="1">ACTIVOS</option>
            <option value="0">INACTIVOS</option>
          </select>
        </div>
        <div class="col-xs-4 form-group">
          <input type="text" class="form-control" id="txt_busqueda" placeholder="busqueda...">
        </div>
      </div>
      <div id="tableContainer" class="table-responsive row">

        <table class="table table-striped table-bordered">
          <thead id="thead">
          </thead>
          <tbody id="tbody">
          </tbody>
        </table>

            </div>
    <!-- </div> -->
  </div>

                              <!--Fin Contenido-->
                            <div class="container">
    <!-- <div class="row"> -->

      
        <div class="col-xs-4 form-group">
         
        </div>
      </div>
      <div id="tableContainer" class="table-responsive row">

        <table class="table table-striped table-bordered">
          <thead id="thead">
          </thead>
          <tbody id="tbody">
          </tbody>
        </table>

            </div>
    <!-- </div> -->
  </div>
                           </div>
                        </div>
                        

                      </div>

                    </div><!-- /.row -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
         
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!--Fin-Contenido-->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 0.0.1
        </div>
        
      </footer>

      
     <script src="../js/jQueryMaestros.js"></script> 
    <script src="../js/jQuery-2.1.4.min.js"></script>
    <script src="../js/VistaMaestros.js"></script>
    <script src="../js/bootstrap.min.js"></script>
   
    <script src="../js/app.min.js"></script>
    
  </body>
</html>
