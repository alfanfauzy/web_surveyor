<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <title>Web Survey Harga </title>
</head>

<body class="bg-secondary">
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <div class="card-footer">
                            <h4 class="card-title text-center">Login Web Survey</h4>
                        </div>

                        <div class="card border-info mb-3 col-sm-12">
                            <div class="card-body text-info">
                                <p class="card-text">Silahkan memilih role anda agar dapat melakukan proses login.</p>
                            </div>
                        </div>

                        <form action="/login" method="post">
                            <div class="form-group">
                                {{ csrf_field() }}
                                <div class="form-input">
                                    <label>Role</label>
                                    <select name="role" class="form-control">
                                        <option value="1">Admin</option>
                                        <option value="2">Surveyor</option>
                                        <option value="3">Pengunjung</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-input">
                                <input class="btn btn-primary" type="submit" name="submit" value="Login" />
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>