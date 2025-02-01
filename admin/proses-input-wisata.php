<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$nomor=$_POST['nomor'];
$nama_wisata=$_POST['nama_wisata'];
$alamat=$_POST['alamat'];
$harga_masuk=$_POST['harga_masuk'];

include "../koneksi.php";

$simpan=$koneksi->query("insert into wisata(nomor,nama_wisata,alamat,harga_masuk) 
                        values ('$nomor', '$nama_wisata', '$alamat', '$harga_masuk')");

if($simpan==true){

    header("location:tampil-wisata.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>