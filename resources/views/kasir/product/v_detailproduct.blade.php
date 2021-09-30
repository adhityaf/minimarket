@extends('administrator.template')
@section('title', 'Detail Produk')
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
                        <h1>Detail Produk - Kompas</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Produk & Jasa</li>
                            <li class="breadcrumb-item"><a href="jual">Penjualan</a></li>
                            <li class="breadcrumb-item active">Detail Produk</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

            <!-- Default box -->
            <div class="card card-solid">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <div class="col-12">
                                <img src="admin/dist/img/kompas.png" class="product-image" alt="Product Image" style="width: 300px; height: 320px">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <h3 class="my-3">Kompas</h3>

                            <div class="bg-gray py-2 px-3 mt-4">
                                <h2 class="mb-0">
                                    Rp. 3.000.000
                                </h2>
                                <h4 class="mt-0">
                                    <small>Stok : 27 </small>
                                </h4>
                            </div>
                            <div class="col-12 product-image-thumbs">
                                <div class="product-image-thumb active"><img src="admin/dist/img/kompas.png" alt="Product Image" style="height: 70px; width: 50px"></div>
                                {{--                                <div class="product-image-thumb" ><img src="admin/dist/img/prod-2.jpg" alt="Product Image"></div>--}}
                                {{--                                <div class="product-image-thumb" ><img src="admin/dist/img/prod-3.jpg" alt="Product Image"></div>--}}
                                {{--                                <div class="product-image-thumb" ><img src="admin/dist/img/prod-4.jpg" alt="Product Image"></div>--}}
                                {{--                                <div class="product-image-thumb" ><img src="admin/dist/img/prod-5.jpg" alt="Product Image"></div>--}}
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <nav class="w-100">
                                <div class="nav nav-tabs" id="product-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Spesifikasi</a>
                                    <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Deskripsi</a>
                                </div>
                            </nav>
                            <div class="tab-content p-3" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td style="width: 50%">Kategori</td>
                                                <td>Produk Penjualan</td>
                                            </tr>
                                            <tr>
                                                <td>Serial Number</td>
                                                <td>ID48270985433</td>
                                            </tr>
                                            <tr>
                                                <td>Berat</td>
                                                <td>3 Gram</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">
                                    <p class="text-justify">Kompas adalah alat navigasi untuk menentukan arah mata angin berupa
                                    sebuah panah penunjuk magnetis yang bebas menyelaraskan dirinya dengan
                                    medan magnet bumi secara akurat. Kompas memberikan rujukan arah tertentu,
                                    sehingga sangat membantu dalam bidang navigasi.</p>
                                </div>
                            </div>
                        </div>
                    </div>
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
<script>
    $(document).ready(function() {
        $('.product-image-thumb').on('click', function () {
            var $image_element = $(this).find('img')
            $('.product-image').prop('src', $image_element.attr('src'))
            $('.product-image-thumb.active').removeClass('active')
            $(this).addClass('active')
        })
    })
</script>
</body>
</html>

@endsection
