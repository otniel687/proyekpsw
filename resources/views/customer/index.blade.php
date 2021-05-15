@extends('layouts.app')
@section('title','Daftar Customer | Admin')
@section('judul','Data  Customer Aotlie Service')
@section('content')
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
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div class="d-flex justify-content-end">
        {{ $customers->links()}}
    </div>
@endsection