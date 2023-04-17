<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url ('/asset/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">


  <!-- DataTables -->
  <link rel="stylesheet" href="{{url ('/asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{url ('/asset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{url ('/asset/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
  
  <!-- Select2 -->
  <link rel="stylesheet" href="{{url ('/asset/plugins/select2/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{url ('/asset/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{url ('/asset/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{url ('/asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">

  <!-- JQVMap -->
  <link rel="stylesheet" href="{{url ('/asset/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url ('/asset/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{url ('/asset/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{url ('/asset/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{url ('/asset/plugins/summernote/summernote-bs4.min.css') }}">

  


  <link rel="stylesheet" href="{{url ('/css/app.css') }}">
  <!-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> -->

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{url ('/asset/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{url ('/asset/dist/img/user1-128x128.jpg') }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{url ('/asset/dist/img/user8-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{url ('/asset/dist/img/user3-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/dashboard')}}" class="brand-link">
      <img src="{{url ('/asset/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">BILLING</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url ('/asset/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{url('/dashboard')}}" class="d-block">Max Solutions</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{url('/dashboard')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt text-red"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/bank-account')}}" class="nav-link">
              <i class="nav-icon fas fa-piggy-bank text-blue"></i>
              <p>
                Bank Account
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users text-green"></i>
              <p>
                People
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/user-roles')}}" class="nav-link">
                  <i class="nav-icon fas fa-user-cog text-purple"></i>
                  <p>User Roles</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/users')}}" class="nav-link">
                  <i class="nav-icon fas fa-users text-pink"></i>
                  <p>User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/customer')}}" class="nav-link">
                  <i class="nav-icon fas fa-user-friends text-yellow"></i>
                  <p>Customers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/supplier')}}" class="nav-link">
                  <i class="nav-icon fas fa-male text-yellow"></i>
                  <p>Suppliers</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-boxes text-purple"></i>
              <p>
                Inventory
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/warehouse')}}" class="nav-link">
                  <i class="nav-icon fas fa-warehouse text-red"></i>
                  <p>Warehouse</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/stock')}}" class="nav-link">
                  <i class="nav-icon fas fa-layer-group text-pink"></i>
                  <p>Stock Entry</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/transfer')}}" class="nav-link">
                  <i class="nav-icon fas fa-random text-yellow"></i>
                  <p>Transfer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/product-category')}}" class="nav-link">
                  <i class="nav-icon fas fa-shapes text-blue"></i>
                  <p>Product Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/product')}}" class="nav-link">
                  <i class="nav-icon fas fa-dice-d20 text-green"></i>
                  <p>Products</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/purchase')}}" class="nav-link">
                  <i class="nav-icon fas fa-shopping-bag text-yellow"></i>
                  <p>Purchase</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/purchase-return')}}" class="nav-link">
                  <i class="nav-icon fas fa-reply text-yellow"></i>
                  <p>Purchase return</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/sale')}}" class="nav-link">
                  <i class="nav-icon fas fa-store text-red"></i>
                  <p>Sales</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('/sales-return')}}" class="nav-link">
                  <i class="nav-icon fas fa-reply text-red"></i>
                  <p>Sales return</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/quotation')}}" class="nav-link">
                  <i class="nav-icon fas fa-file-invoice-dollar text-green"></i>
                  <p>Quotation</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{url('/expense')}}" class="nav-link">
              <i class="nav-icon fab fa-codepen text-green"></i>
              <p>
                Expenses
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-area text-pink"></i>
              <p>
                Reports
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/report/gstr1')}}" class="nav-link">
                  <i class="nav-icon fas fa-truck text-yellow"></i>
                  <p>GSTR1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/report/gstr2')}}" class="nav-link">
                  <i class="nav-icon fas fa-truck-loading text-violet"></i>
                  <p>GSTR2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/report/sale')}}" class="nav-link">
                  <i class="nav-icon fas fa-book-open text-yellow"></i>
                  <p>Sales</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/report/sales-return')}}" class="nav-link">
                  <i class="nav-icon fas fa-reply text-yellow"></i>
                  <p>Sales return</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('/report/expense')}}" class="nav-link">
                  <i class="nav-icon fab fa-readme text-red"></i>
                  <p>Expenses</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/report/ledger')}}" class="nav-link">
                  <i class="nav-icon fas fa-search-dollar text-orange"></i>
                  <p>Ledger</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/report/profit-and-loss')}}" class="nav-link">
                  <i class="nav-icon fas fa-hand-holding-usd text-teal"></i>
                  <p>Profit & Loss</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-cog text-blue"></i>
              <p>
                Settings
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/settings')}}" class="nav-link">
                  <i class="nav-icon fas fa-cogs text-pink"></i>
                  <p>Company Settings</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/expense-category')}}" class="nav-link">
                  <i class="nav-icon fas fa-receipt text-yellow"></i>
                  <p>Expense category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/tax')}}" class="nav-link">
                  <i class="nav-icon fas fa-file-invoice text-green"></i>
                  <p>Tax</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/discount')}}" class="nav-link">
                  <i class="nav-icon fas fa-percent text-red"></i>
                  <p>Discounts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/currency')}}" class="nav-link">
                  <i class="nav-icon fab fa-ethereum text-green"></i>
                  <p>Currency</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


 <!-- Navigation bar here -->
    @yield('content')
    <!-- Footer here -->



  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- jQuery -->
<script src="{{url ('/asset/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{url ('/asset/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{url ('/asset/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{url ('/asset/plugins/select2/js/select2.full.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{url ('/asset/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{url ('/asset/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{url ('/asset/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{url ('/asset/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{url ('/asset/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{url ('/asset/plugins/moment/moment.min.js') }}"></script>
<script src="{{url ('/asset/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{url ('/asset/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{url ('/asset/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{url ('/asset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{url ('/asset/dist/js/adminlte.js') }}"></script>


<!-- DataTables  & Plugins -->
<script src="{{url ('/asset/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{url ('/asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{url ('/asset/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{url ('/asset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{url ('/asset/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{url ('/asset/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{url ('/asset/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{url ('/asset/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{url ('/asset/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{url ('/asset/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{url ('/asset/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{url ('/asset/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url ('/asset/dist/js/pages/dashboard.js') }}"></script>

<script src="{{url ('/js/app.js') }}"></script>
<script src="{{url ('/js/custom.js') }}"></script>
<!-- <script src="{{ mix('js/app.js') }}"></script> -->
</body>
</html>