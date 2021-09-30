<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CV. Geodata Dinamika</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('admin')}}/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('admin')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('admin')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('admin')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('admin')}}/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="{{asset('admin')}}/dist/yearpicker.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
{{--<script>--}}
{{--    $(document).ready(function(){--}}
{{--        $("#myInput").change (function() {--}}
{{--            var value = $(this).val().toLowerCase();--}}
{{--            $("#example1 tr").filter(function() {--}}
{{--                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)--}}
{{--            });--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}

<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
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
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="dashboard" class="brand-link">
            <span class="brand-text font-weight-light">The Best Minimarket</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="/kasir/dashboard" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/kasir/product" class="nav-link">
                            <i class="nav-icon fas fa-balance-scale"></i>
                            <p>
                                Produk
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/kasir/order" class="nav-link">
                            <i class="nav-icon fas fa-shopping-cart"></i>
                            <p>
                                Pesanan
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Laporan
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/kasir/report/day" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Harian</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/kasir/report/month" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Bulanan</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/kasir/report/kategori" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Kategori Terbaik</p>
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
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Riwayat Transaksi Bulanan</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/kasir/dashboard">Home</a></li>
                                <li class="breadcrumb-item active">Laporan</li>
                                <li class="breadcrumb-item active">Laporan Bulanan</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Laporan Bulanan Transaksi Semua Layanan <br>
                                    </h3>
                                </div>
                                <div class="card-header p-2" style="width: 1000px">
                                    <h3 class="card-title p-2">Pilih Bulan dan Tahun :</h3>
                                        <form action="/kasir/report/filtermonth" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <input type="month" id="filter" name="filter">
                                                <input class="btn btn-primary btn-sm" type="submit" value="Filter">
                                                <a href="/kasir/report/month" class="btn btn-primary btn-sm"><i class="fa fa-retweet"> </i> Reset</a>
                                            </div>
                                        </form>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <!-- /.tab-pane -->
                                        <div class="active tab-pane">
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center" scope="col">No.</th>
                                                        <th class="text-center" scope="col">Tanggal</th>
                                                        <th class="text-center" scope="col">Total Harga</th>
                                                        <th class="text-center" scope="col">Nominal</th>
                                                        <th class="text-center" scope="col">Metode Pembayaran</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php $no=1; ?>
                                                    @php $total = 0 @endphp
                                                    @foreach ($order as $item)
                                                        @php $total += $item->total @endphp
                                                            <tr>
                                                                <th class="text-center" scope="row">{{ $no++ }}.</th>
                                                                <td class="text-center">{{ Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}</td>
                                                                <td class="text-center">Rp. {{$item->total}}</td>
                                                                <td class="text-center">Rp. {{$item->nominalBayar}}</td>
                                                                <td class="text-center">{{$item->metodeBayar}}</td>
                                                            </tr>
                                                    @endforeach
                                                    </tbody>
                                                    <tr>
                                                        <td colspan="4" class="text-right"><strong>Total : </strong></td>
                                                        <td colspan="1" class="text-center"><strong>Rp. {{number_format($total,2,',','.')}}</strong></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                    </div>
                                    <!-- /.tab-content -->
                                </div><!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
    </div>
    <!-- ./wrapper -->

    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2021 <a>The Best Minimarket</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- jQuery -->
    <script src="{{asset('admin')}}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('admin')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{asset('admin')}}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('admin')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{asset('admin')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{asset('admin')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{asset('admin')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{asset('admin')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{asset('admin')}}/plugins/jszip/jszip.min.js"></script>
    <script src="{{asset('admin')}}/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{asset('admin')}}/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{asset('admin')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{asset('admin')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{asset('admin')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('admin')}}/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('admin')}}/dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
        $(function () {
            $("#example1").DataTable();

        });
        $(function () {
            $("#example2").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');

        });
        $(function () {
            $("#example3").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example3_wrapper .col-md-6:eq(0)');

        });
    </script>
<script src="{{asset('admin')}}/dist/yearpicker.js"></script>
<script>
    $('.yearpicker').yearpicker()
</script>
</body>
</html>
