@extends('kasir.template')
@section('tittle', 'Checkout Pesanan')
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
                        <h1>Checkout Pesanan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="/kasir/order">Pesanan</a></li>
                            <li class="breadcrumb-item active">Checkout Pesanan</li>
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

        <!-- Main content -->
            <div class="row justify-content-md-center">
                <div class="col-lg-10">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Data pemesan</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="/kasir/checkout" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Nominal Pembayaran</label>
                                    <input type="text" name="nominalBayar" class="form-control" value="{{ old('nominalBayar') }}" placeholder="Masukkan Nominal Pembayaran..">
                                    <div class="text-danger">
                                        @error('nominalBayar')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="metodeBayar">Metode Pembayaran</label>
                                    <select class="form-control" name="metodeBayar">
                                        <option value="" {{ old('metodeBayar') }}>Pilih Salah Satu Metode Pembayaran</option>
                                        <option value="1" {{ old('metodeBayar') }} name="Cash">Cash</option>
                                        <option value="2" {{ old('metodeBayar') }} name="Transfer Bank BRI">Transfer Bank BRI</option>
                                        <option value="3" {{ old('metodeBayar') }} name="Transfer Bank Mandiri">Transfer Bank Mandiri</option>
                                    </select>
                                    <div class="text-danger">
                                        @error('metodeBayar')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <a href="/kasir/add/order" class="btn btn-secondary">Kembali</a>
                                        <button type="submit" class="btn btn-primary btn-sm pull-right">Checkout</button>
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
