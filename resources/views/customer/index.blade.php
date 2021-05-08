
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Daftar Customer</title>
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
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu</a>
                        <h1>Data Customer Aotlie Service</h1>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="containerr mt-1">
			<a href="{{ route('customer.create') }}" class="btn btn-outline-info">+ Customer Baru</a>
    <div class="row">
        <table class="table">
            <thead>
                <tr>
					<th>No</th>
                    <th>ID Customer</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach ($customers as $customer)
				<tr>
					<td>{{++$i }} </td>
					<td>{{$customer->ID_customer}} </td>
					<td>{{$customer->Nama}} </td>
					<td>{{$customer->Alamat}} </td>
					<td>{{$customer->NoTelp}} </td>
					<td>
					<form action="{{route('customer.show',$customer->id)}}" method="POST" >
					<a class="btn btn-primary" href="{{route('customer.edit',$customer->id)}} ">Edit</a>
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">Delete</button>
					</form>
				</td>
			</tr>
			@endforeach
        </table>
    </div>
    </div>
     {{-- <div class="pull-left">
        showing
        {{ $customers->firstItem()}}
        to 
        {{ $customers->lastitem()}}
        of
        {{ $customers->total() }}
        entries
        </div> --}}
        <div class="d-flex justify-content-end">
           {{ $customers->onEachSide(1)->links() }}
        </div>
</body>
</html>