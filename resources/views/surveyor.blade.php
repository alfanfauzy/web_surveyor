<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <title>Surveyor : Web Survey Harga</title>
</head>

<body class="bg-secondary">
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card border-0 shadow rounded">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-8 col-md-10">
                                <h5>Selamat Datang , Surveyor.</h5>
                            </div>
                            <div class="col-sm-2 col-md-2">
                                <a class="btn btn-outline-danger" href="/logout" onclick=" return confirm(`Are You sure you want to logout?`);">Logout</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="card border-info mb-3 col-sm-12">
                            <div class="card-body text-info">
                                <p class="card-text">Team Surveyor diharapkan untuk dapat mengisi semua field untuk bisa dapat di terima oleh Team Admin</p>
                            </div>
                        </div>

                        <h4>Form Input Data Barang</h4>
                        <hr />

                        <div class="container">
                            <form action="/surveyor/add" method="post">
                                {{ csrf_field() }}
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama Barang</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nama_barang" value="" required placeholder="Masukkan nama barang" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Harga Barang</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="harga_barang" value="" required placeholder="Masukkan harga barang (hanya angka)" onkeydown="javascript: return event.keyCode === 8 || event.keyCode === 46 || event.keyCode === 9 ? true : !isNaN(Number(event.key))" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Satuan Barang</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="satuan_barang" value="" required placeholder="Masukkan satuan barang (Kg/Gram/Liter/Ikat)" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Pasar</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="pasar" value="" required placeholder="Masukkan lokasi pasar" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Tanggal Survey</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" name="tanggal_survey" value="" required />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Petugas</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="petugas" value="" required placeholder="Masukkan nama petugas survey" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <input class="btn btn-success" type="submit" name="submit" value="Submit" />
                                    </div>
                                </div>

                                <hr />

                                <h4>List Data Barang</h4>

                                <table class="table table-striped">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Barang</th>
                                        <th>Harga Barang</th>
                                        <th>Pasar</th>
                                    </tr>
                                    @foreach($barang as $index => $getBarang)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $getBarang->nama_barang }}</td>
                                        <td>Rp {{ $getBarang->harga_barang }} / {{ $getBarang->satuan_barang }}</td>
                                        <td>{{ $getBarang->pasar }}</td>
                                    </tr>
                                    @endforeach
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>