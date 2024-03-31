<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listing Produk</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    </head>
<body>

    <!-- Content -->
    <section class="container-fluid">
        <div class="container mx-auto mt-3 py-1">
            <div class="container p-0">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Daftar Produk Baru</h6>
                                <div class="card-tools">
                                    <div class="col-12">
                                        <a type="button" class="btn btn-success" href="#"><i class="bi bi-plus-square"></i> Tambah Reservasi</a>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive p-3">
                                <table class="table align-items-center table-flush" id="dataTable">
                                    <thead class="thead-light">
                                        <tr>
                                        <th>Nama Produk</th>
                                        <th>Deskripsi</th>
                                        <th>Harga</th>
                                        <th>Stok</th>
                                        <th>Foto</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Panci</td>
                                            <td>Alat memasak</td>
                                            <td>Rp 20000</td>
                                            <td>10</td>
                                            <td><img src="img/panci.jpg" alt="" style="width: 100px;"></td>
                                            <td>Ready</td>
                                            <td>
                                            <div class="btn-group" role="group">
                                                <a class="btn btn-primary" role="button" href=""><i class="bi bi-gear"></i></a>
                                                <a class="btn btn-danger" role="button" onclick="return confirm('anda yakin ingin hapus?');" href=""><i class="bi bi-trash"></i></a>
                                            </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Wajan</td>
                                            <td>Alat memasak</td>
                                            <td>Rp 15000</td>
                                            <td>8</td>
                                            <td><img src="img/wajan.png" alt="" style="width: 100px;"></td>
                                            <td>Ready</td>
                                            <td>
                                            <div class="btn-group" role="group">
                                                <a class="btn btn-primary" role="button" href=""><i class="bi bi-gear"></i></a>
                                                <a class="btn btn-danger" role="button" onclick="return confirm('anda yakin ingin hapus?');" href=""><i class="bi bi-trash"></i></a>
                                            </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Spatula</td>
                                            <td>Alat memasak</td>
                                            <td>Rp 10000</td>
                                            <td>15</td>
                                            <td><img src="img/spatula.jpg" alt="" style="width: 100px;"></td>
                                            <td>Ready</td>
                                            <td>
                                            <div class="btn-group" role="group">
                                                <a class="btn btn-primary" role="button" href=""><i class="bi bi-gear"></i></a>
                                                <a class="btn btn-danger" role="button" onclick="return confirm('anda yakin ingin hapus?');" href=""><i class="bi bi-trash"></i></a>
                                            </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Kompor Gas</td>
                                            <td>Alat memasak</td>
                                            <td>Rp 100000</td>
                                            <td>0</td>
                                            <td><img src="img/kompor.webp" alt="" style="width: 100px;"></td>
                                            <td>Kosong</td>
                                            <td>
                                            <div class="btn-group" role="group">
                                                <a class="btn btn-primary" role="button" href=""><i class="bi bi-gear"></i></a>
                                                <a class="btn btn-danger" role="button" onclick="return confirm('anda yakin ingin hapus?');" href=""><i class="bi bi-trash"></i></a>
                                            </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery.dataTables.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
