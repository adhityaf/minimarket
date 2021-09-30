@extends('admin.template')
@section('content')

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CV. Geodata Dinamika</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="admin/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Produk Untuk Dijual</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Produk & Jasa</li>
                    <li class="breadcrumb-item"><a href="jual">Penjualan</a></li>
                    <li class="breadcrumb-item active">Edit Produk</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<div class="row justify-content-md-center">
    <div class="col-lg-10">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Data Produk</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <form action="jual">
                    <div class="form-group">
                        <label for="inputNumber">Serial Number</label>
                        <input type="text" id="inputNumber" class="form-control"
                        value="ID48270985433">
                    </div>
                    <div class="form-group">
                        <label for="inputNama">Nama Produk</label>
                        <input type="text" id="inputNama" class="form-control"
                        value="Kompas">
                    </div>
                    <div class="form-group">
                        <label for="inputHarga">Harga Produk</label>
                        <input type="text" id="inputHarga" class="form-control"
                        value="Rp. 7.000.000">
                    </div>
                    <div class="form-group">
                        <label for="inputStok">Stok Produk</label>
                        <input type="text" id="inputStok" class="form-control"
                        value="27">
                    </div>
                    <div class="form-group">
                        <label for="inputGambar">Gambar Produk</label>
                        <input type="file" id="inputGambar" class="form-control-file">kompas.png
                    </div>
                    <div class="form-group">
                        <label for="inputDescription">Deskripsi Produk</label>
                        <textarea id="inputDescription" class="form-control" rows="4">Kompas adalah alat navigasi untuk menentukan arah mata angin berupa sebuah panah penunjuk magnetis yang bebas menyelaraskan dirinya dengan medan magnet bumi secara akurat. Kompas memberikan rujukan arah tertentu, sehingga sangat membantu dalam bidang navigasi.
                        </textarea>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="jual" class="btn btn-secondary">Kembali</a>
                            <input type="submit" value="Tambah Produk" class="btn btn-success float-right">
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
<br>

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
