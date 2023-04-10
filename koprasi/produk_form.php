<?php

$obj_jenis_produk = new jenis_produk();
$obj_produk = new Produk();

$data_produk = $obj_produk->dataProduk();
$data_jenis_produk = $obj_jenis_produk->dataJenis_produk(); 
?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Produk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?hal=home">Home</a></li>
              <li class="breadcrumb-item active">Tambah Produk</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div class="container">
    <form action="produk_controller.php" method="POST">
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <input id="text1" name="text1" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="text2" name="text2" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label">Harga Beli</label> 
    <div class="col-8">
      <input id="text3" name="text3" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text4" class="col-4 col-form-label">Stok</label> 
    <div class="col-8">
      <input id="text4" name="text4" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text5" class="col-4 col-form-label">Min Stok</label> 
    <div class="col-8">
      <input id="text5" name="text5" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="jenis_produk_id" class="col-4 col-form-label">Jenis Produk</label> 
    <div class="col-8">
      <select id="jenis_produk_id" name="jenis_produk_id" class="custom-select"></select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" value="simpan" type="submit" class="btn btn-primary">Simpan</button>
      <button type="submit" name="proses" value="batal" class="btn btn-danger">Batal</button>
    </div>
  </div>
</form>
</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->