<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <title>Pengunjung : Web Survey Harga</title>
</head>

<body class="bg-secondary">
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card border-0 shadow rounded">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-8 col-md-10">
                                <h5>Selamat Datang , Pengunjung.</h5>
                            </div>
                            <div class="col-sm-2 col-md-2">
                                <a class="btn btn-outline-danger" href="/logout" onclick=" return confirm(`Are You sure you want to logout?`);">Logout</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="card border-info mb-3 col-sm-12">
                            <div class="card-body text-info">
                                <p class="card-text">Dibawah ini merupakan list harga komoditas barang di pasar dari berbagai daerah.</p>
                            </div>
                        </div>

                        <h3>Data Barang</h3>

                        <div class="row">

                            @foreach($barang as $index=>$getBarang)
                            <div class="col col-sm-4">
                                <div class="card border border-info shadow">
                                    <img class="card-img-top" src="https://sumeks.co/assets/foto/2019/06/sayur-mayur.jpg" alt="sayur-sayuran">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $getBarang->nama_barang }}</h5>
                                        <p> Lokasi Pasar : <span class="badge badge-info">{{ $getBarang->pasar}}</span></p>
                                        <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                                        <p class="font-weight-light">Rp {{ $getBarang->harga_barang}} / {{ $getBarang->satuan_barang}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>