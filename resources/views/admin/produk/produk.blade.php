@extends('admin.layout.app')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Tables</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Tables</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <a href="{{url('admin/produk/create') }}" class="btn btn-primary">Tambah Data</a>
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
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Harga Jual</th>
                        <th>Harga Beli</th>
                        <th>Stok</th>
                        <th>Minimal Stok</th>
                        <th>Deskripsi</th>
                        <th>Kategori Produk</th>
                    </tr>
                </thead>               
                <tbody>
                @php
                $no = 1;
                @endphp
                @foreach ($produk as $prod)
                    <tr>
                        <th>{{ $no }}</th>
                        <th>{{ $prod->kode }}</th>
                        <th>{{ $prod->nama }}</th>
                        <th>{{ $prod->harga_jual }}</th>
                        <th>{{ $prod->harga_beli }}</th>
                        <th>{{ $prod->stok }}</th>
                        <th>{{ $prod->min_stok }}</th>
                        <th>{{ $prod->deskripsi }}</th>
                        <th>{{ $prod->nama_kategori }}</th>
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
@endsection