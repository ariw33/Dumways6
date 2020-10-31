<?php
include './include/koneksi.php';

$kategori= $_POST['kategori'];
$cek = mysqli_query($koneksi,"SELECT * FROM category_tb WHERE name LIKE '%$kategori%'");
$cek1 = mysqli_fetch_assoc($cek);
if(!$cek1){
if(!$kategori == ''){
$input = mysqli_query($koneksi,"INSERT INTO category_tb VALUES (null,'$kategori')");
	echo "\n Sukses kategori ".$kategori." ditambahkan";
}else{
	echo "something wrong";
}
}else{
	echo "kategori ".$kategori." sudah ada";
}
?>