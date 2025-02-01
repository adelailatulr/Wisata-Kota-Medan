<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['wisata_id'];
$nomor=$_POST['nomor'];
$nama_wisata=$_POST['nama_wisata'];
$alamat=$_POST['alamat'];
$harga_masuk=$_POST['harga_masuk'];

$ubah=$koneksi->query("update wisata set nomor='$nomor', nama_wisata='$nama_wisata', alamat='$alamat', harga_masuk='$harga_masuk' where wisata_id='$id'");

if($ubah==true){

    header("location:tampil-wisata.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>