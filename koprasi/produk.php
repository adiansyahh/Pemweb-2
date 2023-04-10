<?php
$model = new Produk();
$data_produk = $model->dataproduk();

?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Produk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?hal=home">Home</a></li>
              <li class="breadcrumb-item active">Produk</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
       <div class="container">
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped table-responsive ">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Harga_Beli</th>
                                <th>Harga_Jual</th>
                                <th>Stok</th>
                                <th>Min_Stok</th>
                                <th>Jenis Produk</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_produk as $row){
                        ?>
                        <tr>
                            <td> <?=$no?></td>
                            <td> <?=$row ['kode']?></td>
                            <td> <?=$row ['nama']?></td>
                            <td> <?= number_format($row['harga_beli'],0,',','.')?></td>
                            <td> <?= number_format($row['harga_jual'],0,',','.')?></td>
                            <td> <?=$row ['stok']?></td>
                            <td> <?=$row ['min_stok']?></td>
                            <td> <?=$row ['prod']?></td>
                            <td>
                              <form action="produk_controler.php" method="POST">
                                <a href="index.php?hal=produk_detail&id=<?= $row['id']?>">
                                <button typr="button" class="btn btn-info" title="Detail Produk">
                                <i class="fa-regular fa-eye fa-beat"></i>
                                </button>
                                </a>
                                <a href="index.php?hal=produk_edit&idedit=<?= $row['id']?>">
                                <button typr="button" class="btn btn-warning btn-sm" title="Edit Produk">
                                <i class="fa-regular fa-pen-to-square fa-flip"></i>
                                </button>
                                </a>
                                <button typr="button" class="btn btn-danger btn-sm" name="proses" value="hapus" 
                                onclick="return confirm('apakah anda yakin ingin menghapus data produk yang bernama <?=$row['nama'] ?>')" title="Hapus Produk">
                                <i class="fa-regular fa-trash-can fa-shake"></i>
                                <input type="hidden" name="idx" value="<?= $row['id']?>">
                                </button>
                              
                              </form>
                            </td>
                        </tr>
                        <?php
                        $no++;
                    }
                        ?>
                        <a href="index.php?hal=produk_form" class="bg-gradient-primary"><button class="btn-primary">Tambah Produk</button></a>
                        </tbody>
                    </table>
                </div>
            </div>
       </div>
    </section>
    <!-- /.content -->
  </div>