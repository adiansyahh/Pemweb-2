@extends('admin.layout.app')
@section('content')
@if (Auth::user()->role != 'pelanggan')
<div class="container-fluid px-4">
    <h1 class="mt-4">Tables</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Tables</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            @if(Auth::user()->role== 'admin')
            <a href="{{url ('admin/pesanan/create') }}" class="btn btn-primary">Tambah Data</a>
            @endif
            <i class="fas fa-table me-1"></i> 
        </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Produk
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama_Pemesan</th>
                        <th>Alamat_Pemesan</th>
                        <th>No_HP</th>
                        <th>Email</th>
                        <th>Jumlah_pesanan</th>
                        <th>Deskripsi</th>
                        <th>Produk_id</th>
                        <th>Action</th>
                    </tr>
                </thead>               
                <tbody>
                @php
                $no = 1;
                @endphp
                @foreach ($pesanan as $ps)
                    <tr>
                        <th>{{ $no }}</th>
                        <th>{{ $ps->tanggal }}</th>
                        <th>{{ $ps->nama_pemesan }}</th>
                        <th>{{ $ps->alamat_pemesan }}</th>
                        <th>{{ $ps->no_hp }}</th>
                        <th>{{ $ps->email }}</th>
                        <th>{{ $ps->jumlah_pesanan }}</th>
                        <th>{{ $ps->deskripsi }}</th>
                        <th>{{ $ps->nama_produk }}</th>
                        <td><a href="{{url ('admin/pesanan/edit/'. $ps->id) }}" class="btn btn-success">Edit</a></td>
                        <td><a href="{{url ('admin/pesanan/delete/'. $ps->id) }}" class="btn btn-danger">Delete</a></td>
                    </tr>
                @php
                $no++
                @endphp
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>  
@else
@include('admin.access_denied')
@endif
@endsection