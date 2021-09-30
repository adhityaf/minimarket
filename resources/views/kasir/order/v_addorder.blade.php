@extends('kasir.template')
@section('tittle', 'Tambah Pesanan')
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
                        <h1>Tambah Pesanan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="/kasir/order">Pesanan</a></li>
                            <li class="breadcrumb-item active">Tambah Pesanan</li>
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
                            <h3 class="card-title">Data Pesanan</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="/kasir/save/orderdetail" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <?php $no = 1?>
                                    <label>Nama Produk</label>
                                    <select class="form-control" name="product_id">
                                        <option value="">Pilih Nama Produk</option>
                                        @foreach($product as $data)
                                        <option value="{{ $data->id }}">{{ $no++ }}. {{ $data->namaProduk }}</option>
                                        @endforeach
                                    </select>
                                    <div class="text-danger">
                                        @error('product_id')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Jumlah Produk</label>
                                    <input name="jumlahOrder" class="form-control" value="{{ old('jumlahOrder') }}" placeholder="Masukkan Jumlah Produk ...">
                                    <div class="text-danger">
                                        @error('jumlahOrder')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <a href="/kasir/order" class="btn btn-secondary">Kembali</a>
                                        <button type="submit" class="btn btn-primary btn-sm pull-right">Tambah Data</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>

                    <div class="col-md-12">
                        <!-- Form Element sizes -->
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title" style="text-align: center">Ringkasan Pesanan</h3>
                            </div>
                            <div class="card-body">
                                <div class="col col-12 mb-2">
                                    <div class="card">
                                        <div class="card-body">
                                            <table class="table table-stripped">
                                                <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th class="text-center">Nama Produk</th>
                                                    <th class="text-center">Harga Produk</th>
                                                    <th class="text-center">Jumlah</th>
                                                    <th class="text-center">Subtotal</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @php $no = 1 @endphp
                                                @php $total = 0 @endphp
                                                @foreach($orderDetail as $id => $details)
                                                    @php $total += $details->subtotal @endphp
                                                    <tr>
                                                        <td class="text-center">{{ $no++ }}.</td>
                                                        <td class="text-center">{{ $details->product->namaProduk }}</td>
                                                        <td class="text-center">Rp. {{ number_format($details->product->hargaProduk,0,',','.') }}</td>
                                                        <td class="text-center">{{ number_format($details->jumlahOrder) }}</td>
                                                        <td class="text-center">Rp. {{ number_format($details->subtotal,0,',','.') }}</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                                <tr>
                                                    <td colspan="4" class="text-right"><b>Total : </b></td>
                                                    <td class="text-center"><b>Rp. {{number_format($total,0,',','.')}}</b></td>
                                                </tr>

                                            </table>
                                        </div>
                                        @if($orderDetail == NULL)
                                        <button  href="/kasir/orderform" class="btn btn-danger" style="float: right;" disabled>Selanjutnya <i class="fa fa-arrow-circle-right"> </i></button >
                                        @else
                                        <a href="/kasir/orderform" class="btn btn-danger" style="float: right;">Selanjutnya <i class="fa fa-arrow-circle-right"> </i></a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>

                    <!-- /.card-body -->
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
