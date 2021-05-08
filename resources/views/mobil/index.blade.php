<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Daftar Data Mobil</title>
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
                        <h1>Data Mobil Aotlie Service</h1>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="containerr mt-1">
           <a href="{{ route('mobil.create') }}" class="btn btn-outline-info">+ Mobil Baru</a>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Mobil</th>
                    <th>Jenis</th>
                    <th>Merek</th>
                    <th>Plat Mobil</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach ($mobils as $mobil)
				<tr>
					<td>{{++$i }} </td>
					<td>{{$mobil->ID_Registrasi}} </td>
					<td>{{$mobil->Jenis}} </td>
					<td>{{$mobil->Merek}} </td>
					<td>{{$mobil->Plat_Nomor}} </td>
					<td>
					<form action="{{route('mobil.show',$mobil->id)}}" method="POST" >
                    @csrf
					<a class="btn btn-info btn-sm" href="{{ route('mobil.show',$mobil->id) }}">Show</a>
					<a class="btn btn-primary" href="{{route('mobil.edit',$mobil->id)}} ">Edit</a>
					@method('DELETE')
					<button type="submit" class="btn btn-danger">Delete</button>
					</form>
				</td>
			</tr>
			@endforeach
        </table>
        </div>
        {{-- <div class="pull-left">
        showing
        {{ $mobils->firstItem()}}
        to 
        {{ $mobils->lastitem()}}
        of
        {{ $mobils->total() }}
        entries
    </div> --}}
    <div class="d-flex justify-content-end">
        {{ $mobils->links() }}
    </div>

</div>
<script src="{{asset('js/jquery.js')}} "></script>
    <script src="{{asset('js/bootstrap.min.js')}} "></script>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
</body>
<html>