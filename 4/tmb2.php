<?php
include './include/koneksi.php';

$nama= $_POST['nama'];
$kelamin = $_POST['kelamin'];
$keterangan = $_POST['keterangan'];
$cek = mysqli_query($koneksi,"SELECT * FROM writer_tb WHERE name LIKE '%$nama%'");
$cek1 = mysqli_fetch_assoc($cek);
if(!$cek1){
if(!$nama == ''){
$input = mysqli_query($koneksi,"INSERT INTO writer_tb VALUES (null,'$nama','$kelamin','$keterangan')");
	echo "\n Sukses nama penulis ".$nama." ditambahkan";
}else{
	echo "something wrong";
}
}else{
	echo "nama penulis ".$nama." sudah ada";
}
?>