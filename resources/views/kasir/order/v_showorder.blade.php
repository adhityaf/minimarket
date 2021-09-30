@extends('kasir.template')
@section('tittle', 'Daftar Pesanan')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin') }}/dist/css/adminlte.min.css">

    <link rel="stylesheet" href="{{ asset('admin') }}/dist/css/image-zoom.css" />
</head>
<style>
    /**THE SAME CSS IS USED IN ALL 3 DEMOS**/
    /**gallery margins**/
    ul.gallery{
        margin-left: 3vw;
        margin-right:3vw;
    }

    .zoom {
        -webkit-transition: all 0.35s ease-in-out;
        -moz-transition: all 0.35s ease-in-out;
        transition: all 0.35s ease-in-out;
        cursor: -webkit-zoom-in;
        cursor: -moz-zoom-in;
        cursor: zoom-in;
    }

    .zoom:hover,
    .zoom:active,
    .zoom:focus {
        /**adjust scale to desired size,
        add browser prefixes**/
        -ms-transform: scale(5);
        -moz-transform: scale(5);
        -webkit-transform: scale(5);
        -o-transform: scale(5);
        transform: scale(5);
        position:relative;
        z-index:100;
    }

    /**To keep upscaled images visible on mobile,
    increase left & right margins a bit**/
    @media only screen and (max-width: 768px) {
        ul.gallery {
            margin-left: 15vw;
            margin-right: 15vw;
        }

        /**TIP: Easy escape for touch screens,
        give gallery's parent container a cursor: pointer.**/
        .DivName {cursor: pointer}
    }
</style>
<body class="hold-transition sidebar-mini">
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Daftar Pesanan</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/administrator/home">Home</a></li>
                    <li class="breadcrumb-item active">Daftar Pesanan</li>
                </ol>
            </div>
        </div>
        @if (session('pesan'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Success!</h5>
                {{ session('pesan') }}
            </div>
        @elseif(session('error'))
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-x"></i> Error!</h5>
                {{ session('error') }}
            </div>
        @endif
    </div><!-- /.container-fluid -->
</section>

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><b>Daftar Pesanan</b></h3>
            <div class="card-tools">
                <a class="btn btn-primary btn-sm" href="/kasir/add/order">
                    <i class="fas fa-edit">
                    </i>
                    Tambah Pesanan
                </a>
                <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="tab-content">
                <div class="active tab-pane">
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th class="text-center">Tanggal</th>
                                <th class="text-center">Total</th>
                                <th class="text-center">Nominal Bayar</th>
                                <th class="text-center">Metode Bayar</th>
                                <th class="text-center">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;?>
                        @foreach ($order as $item)
                        <tr>
                            <td class="text-center">{{ $no++ }}</td>
                            <td class="text-center">{{ $item->tanggal }}</td>
                            <td class="text-center">{{ $item->total }}</td>
                            <td class="text-center">{{ $item->nominalBayar }}</td>
                            @if($item->metodeBayar == 1)
                                <td class="text-center">Tunai</td>
                            @elseif( $item->metodeBayar == 2)
                                <td class="text-center">Transfer BRI</td>
                            @elseif($item->metodeBayar == 3)
                                <td class="text-center">Transfer Mandiri</td>
                            @endif

                            <td class="text-center">
                                <a class="btn btn-primary btn-sm" href="/kasir/detail/0rder/{{ $item->id }}">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="/kasir/edit/0rder/{{ $item->id }}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div><!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.col -->

<!-- jQuery -->
<script src="{{ ('admin') }}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ ('admin') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ ('admin') }}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ ('admin') }}/dist/js/demo.js"></script>
</body>
</html>

@endsection
