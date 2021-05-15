@extends('layouts.app')
@section('title', 'Daftar Mobil | Admin')
@section('judul', 'Data  Mobil Aotlie Service')
@section('content')
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
					<a class="btn btn-info " href="{{ route('mobil.show',$mobil->id) }}">Show</a>
					<a class="btn btn-primary" href="{{route('mobil.edit',$mobil->id)}} ">Edit</a>
					@method('DELETE')
					<button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
					</form>
				</td>
			</tr>
			@endforeach
        </table>
        </div>
    <div class="d-flex justify-content-end">
        {{ $mobils->links() }}
    </div>

@endsection
           
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()-> has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()-> has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>
<script src="{{asset('js/jquery.js')}} "></script>
<script src="{{asset('js/bootstrap.min.js')}} "></script>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
@endsection
 