<?php
include_once('dbkoneksi.php');
include_once('models/Produk.php');
// step 1 tangkap request form
$_kode = $_POST['kode']; // 1
$_nama = $_POST['nama']; // 2
$_harga = $_POST['harga_beli']; // 3
$_stok = $_POST['stok']; // 4
$_minstok = $_POST['min_stok']; // 5
$_jenis = $_POST['jenis_produk_id']; // 6

// step 2 simpan data ke dalam array
$data = [
    $_kode, // 1
    $_nama, // 2
    $_harga, // 3
    $_jual = 1.2 * $_harga, // 4
    $_stok, // 5
    $_minstok, // 6
    $_jenis, // 7
];

// step 3 eksekusi data dengan menggunakan mekanisme pdo
$model = new Produk();
$tombol = $_REQUEST['proses'];
switch ($tombol) {
    case 'simpan':
        $model->simpan($data);
        break;
    case 'ubah':
        // tangkap hidden field idx untuk mencari id
        $data[] = $_POST['idx'];
        $model->ubah($data);
        break;
    case 'hapus';
    unset($data);
    $model->hapus($_POST['idx']);
    break;
    default:
        header('Location:index.php?hal=produk');
        break;
}
// step 4 arahkan ke halaman produk kembali jika proses sudah selesai
header('Location:index.php?hal=produk');
include_once('models/Jenis_produk.php');
include_once('navbar.php');
include_once('sidebar.php');
?>