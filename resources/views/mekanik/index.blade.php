@extends('layouts.app')
@section('title', 'Daftar Mobil | Mekanik')
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
					<form action="{{route('mekanik.show',$mobil->id)}}" method="POST" >
                    @csrf
					<a class="btn btn-info btn-sm" href="{{ route('mekanik.show',$mobil->id) }}">Show</a>	   
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
  