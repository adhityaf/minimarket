@extends('kasir.template')
@section('tittle', 'Tambah Produk')
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
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tambah Produk Untuk dijual</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Produk</li>
                            <li class="breadcrumb-item"><a href="/kasir/product">Jual</a></li>
                            <li class="breadcrumb-item active">Tambah Produk</li>
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
                            <form action="/kasir/save/product" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Kode Produk</label>
                                    <input name="kodeProduk" class="form-control" value="{{ old('kodeProduk') }}" placeholder="Masukkan Kode Produk...">
                                    <div class="text-danger">
                                        @error('kodeProduk')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Nama Produk</label>
                                    <input name="namaProduk" class="form-control" value="{{ old('namaProduk') }}" placeholder="Masukkan Nama Produk...">
                                    <div class="text-danger">
                                        @error('namaProduk')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <?php $no = 1?>
                                    <label>Kategori Produk</label>
                                    <select class="form-control" name="category_id">
                                        <option value="#">Pilih Kategori Produk</option>
                                        @foreach($category as $data)
                                        <option value="{{ $data->id }}">{{ $no++ }}. {{ $data->namaKategori }}</option>
                                        @endforeach
                                    </select>
                                    <div class="text-danger">
                                        @error('category_id')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Stok Produk</label>
                                    <input name="stokProduk" class="form-control" value="{{ old('stokProduk') }}" placeholder="Masukkan Stok Produk...">
                                    <div class="text-danger">
                                        @error('stokProduk')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Harga Produk</label>
                                    <input name="hargaProduk" class="form-control" value="{{ old('hargaProduk') }}" placeholder="Masukkan Harga Produk...">
                                    <div class="text-danger">
                                        @error('hargaProduk')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <a href="/kasir/product" class="btn btn-secondary">Kembali</a>
                                        <button type="submit" class="btn btn-primary btn-sm pull-right">Simpan</button>
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
