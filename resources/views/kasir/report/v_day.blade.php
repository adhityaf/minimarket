@extends('kasir.template')
@section('tittle', 'Daftar Laporan Harian')
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
                <h1>Pesanan Penjualan</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/kasir/dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Laporan</li>
                    <li class="breadcrumb-item active">Harian</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><b>Daftar Pesanan Penjualan</b></h3>

            <div class="card-tools">
                <button type="button" href="/kasir/report/exportpdf" class="btn btn-success btn-sm"> Export to PDF</button>
                <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-header p-2" style="width: 1000px">
            <h3 class="card-title p-2">Pilih Tanggal :</h3>
                <form action="/kasir/report/filterday" method="POST">
                    @csrf
                    <div class="form-group">
                        <input value="{{ old('created_at') }}" type="date" data-date-format="dd-mm-yyyy" data-date-viewmode="years" id="filter" name="filter" class="form-control ">
                        <input class="btn btn-primary btn-sm" type="submit" value="Filter">
                        <a href="/kasir/report/day" class="btn btn-primary btn-sm"><i class="fa fa-retweet"> </i> Reset</a>
                    </div>
                </form>
                <form action="/kasir/report/rentangday" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Waktu Awal</label>
                        <div class="input-group">
                            <input name="tanggalAwal" value="{{ old('tanggalAwal') }}" type="date" data-date-format="dd-mm-yyyy" data-date-viewmode="years" id="dp" class="form-control ">
                            <div class="input-group-append">
                                <span class="input-group-text">s/d</span>
                            </div>
                            <input name="tanggalAkhir" value="{{ old('tanggalAkhir') }}" type="date" data-date-format="dd-mm-yyyy" data-date-viewmode="years" id="dp" class="form-control ">
                        </div>
                        <div class="text-danger">
                            @error('tanggalAwal')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="text-danger">
                            @error('tanggalAkhir')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <input class="btn btn-primary btn-sm" type="submit" value="Filter">
                    <a href="/kasir/report/day" class="btn btn-primary btn-sm"><i class="fa fa-retweet"> </i> Reset</a>
                </form>
        </div>
        <div class="card-body">
            <div class="tab-content">
                <div class="active tab-pane" id="semua">
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th class="text-center">Tanggal</th>
                                <th class="text-center">Total</th>
                                <th class="text-center">Nominal Bayar</th>
                                <th class="text-center">Metode Bayar</th>
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
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
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
<link href="{{ asset('public/assets/css/material-dashboard.css?v=2.1.2') }}" rel="stylesheet" />
<!-- DataTable -->
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js" type="text/javascript"></script>
</body>
</html>

@endsection
