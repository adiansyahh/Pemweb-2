<?php
include_once 'dbkoneksi.php';
include_once 'models/Produk.php';
include_once 'models/jenis_produk.php';
include_once 'models/produk.php';
include_once ('navbar.php');
include_once ('sidebar.php');
include_once('models/kartu.php');
include_once('models/Pembelian.php');
include_once('models/Pembayaran.php');
include_once('models/Pelanggan.php');
include_once('models/Pesanan.php');
include_once('models/Vendor.php');


$hal = $_REQUEST['hal'];
    if(!empty($hal)){
    include_once $hal. '.php';
}else{
    include_once 'home.php';
} 
include_once('footer.php');
?>