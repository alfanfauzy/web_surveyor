<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <title>Admin : Web Survey Harga</title>
</head>

<body class="bg-secondary">
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card border-0 shadow rounded">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-8 col-md-10">
                                <h5>Selamat Datang , Admin.</h5>
                            </div>
                            <div class="col-sm-2 col-md-2">
                                <a class="btn btn-outline-danger" href="/logout" onclick=" return confirm(`Are You sure you want to logout?`);">Logout</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="card border-info mb-3 col-sm-12">
                            <div class="card-body text-info">
                                <p class="card-text">Dibawah ini merupakan list harga komoditas barang di pasar dari berbagai daerah yang telah di upload oleh Surveyor.</p>
                            </div>
                        </div>

                        <h3>Data Barang</h3>

                        <table class="table table-sm table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama Barang</th>
                                    <th class="text-center">Harga Barang</th>
                                    <th class="text-center">Pasar</th>
                                    <th class="text-center">Tanggal Survey</th>
                                    <th class="text-center">Petugas Survey</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            @foreach($barang as $index=>$getBarang)
                            <tr>
                                <th class="text-center">{{ $index + 1 }}</th>
                                <td class="text-center">{{ $getBarang->nama_barang }}</td>
                                <td class="text-center">Rp. {{ $getBarang->harga_barang }} / {{ $getBarang->satuan_barang }}</td>
                                <td class="text-center">{{ $getBarang->pasar }}</td>
                                <td class="text-center">{{ date('d-m-Y', strtotime($getBarang->tanggal_survey)) }}</td>
                                <td class="text-center">{{ $getBarang->surveyor }}</td>
                                <td class="text-center">
                                    @if($getBarang->status_barang == 0)
                                    <a class="btn btn-success" href="/admin/accept/{{ $getBarang->id }}">Accept</a>
                                    @else
                                    <p class="font-italic font-weight-light">Publish</p>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>