@extends('kasir.template')
@section('tittle', 'Daftar Produk')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="admin/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Produk yang dijual</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Produk</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><b>Daftar Produk</b></h3>

                    <div class="card-tools">
                        <a class="btn btn-primary btn-sm" href="/kasir/add/product">
                            <i class="fas fa-edit">
                            </i>
                            Tambah Produk
                        </a>
                        <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th class="text-center">Kode Produk</th>
                                <th class="text-center">Nama Produk</th>
                                <th class="text-center">Kategori Produk</th>
                                <th class="text-center">Stok Produk</th>
                                <th class="text-center">Harga Produk</th>
                                <th class="text-center">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;?>
                        @foreach ($product as $item)
                        <tr>
                            <td class="text-center">{{ $no++ }}</td>
                            <td class="text-center">{{ $item->kodeProduk }}</td>
                            <td class="text-center">{{ $item->namaProduk }}</td>
                            <td class="text-center">{{ $item->category->namaKategori }}</td>
                            <td class="text-center">{{ $item->stokProduk }}</td>
                            <td class="text-center">Rp. {{ number_format($item->hargaProduk) }}</td>
                            <td class="text-center">
                                <a class="btn btn-primary btn-sm" href="/kasir/detail/product/{{ $item->id }}">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="/kasir/edit/product/{{ $item->id }}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="/kasir/delete/product/{{ $item->id }}">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

<!-- jQuery -->
<script src="admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="admin/dist/js/demo.js"></script>
</body>
</html>

@endsection
