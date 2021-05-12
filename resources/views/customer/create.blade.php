<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tambah Data Customer</title>
    <link href="{{asset('css/bootstrap.min.css')}} " rel="stylesheet">
    <link href="{{asset('css/simple-sidebar.css')}} " rel="stylesheet">
    <a href="https://icons8.com/icon/he8U4VPWGpWe/"></a>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <script src="https://kit.fontawesome.com/881c7896df.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<body>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand mt-3">
                    <h3 href="view.php">
                        Aotlie Service
                    </h3>
                </li>
                 <li>
                    <a href="{{asset('/')}} ">Home</a>
                </li>
                <li>
                    <a href="{{asset('admin/customer')}}">Customer</a>
                </li>
                <li>
                    <a href="{{asset('admin/mobil')}}">Mobil</a>
                </li>
                <li>
                    <a href="{{route('logout')}}">Log Out</a>
                </li>
            </ul>
        </div>

        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Tambahkan Data Customer</h1>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="containerr mt-4">
            <form action="{{ route('customer.store') }}" method="post" enctype="multipart/form-data">
             @csrf
			<div class="mb-3">
                <label for="Nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="Nama" name="Nama" placeholder="Input Nama Customer">
				@error('Nama')
					<div class="alert alert-danger mt-2">
						{{ $message }}
					</div>
				@enderror
			</div>
            <div class="mb-3">
                <label for="Alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="Alamat" name="Alamat" placeholder="Input Alamat Customer">
				@error('Alamat')
					<div class="alert alert-danger mt-2">
						{{ $message }}
					</div>
				@enderror
			</div>
            <div class="mb-3">
                <label for="NoTelp" class="form-label">No Telepon</label>
                <input class="form-control" id="NoTelp" name="NoTelp" placeholder="Input No Handphone Customer">
				@error('NoTelp')
					<div class="alert alert-danger mt-2">
						{{ $message }}
					</div>
				@enderror
			</div>
            <div class="text-center">
                <button class="btn btn-danger text-white" type="reset" name="submit">Reset</button>
                <button class="btn btn-info text-white" type="submit" name="submit">Tambahkan</button>
            </div>
        </form>
    </div>
</div>
</html>