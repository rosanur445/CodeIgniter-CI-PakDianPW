<?php 
include 'config.php';
$penerbit_kode=$_POST['experiencce_id'];
$penerbit_nama=$_POST['nama'];
$penerbit_alamat=$_POST['tahun'];
$penerbit_telp=$_POST['keterangan'];

mysqli_query($koneksi,"insert into experience values('$penerbit_kode','$penerbit_nama','$penerbit_alamat','$penerbit_telp')");
header("location:exp.php");

 ?>