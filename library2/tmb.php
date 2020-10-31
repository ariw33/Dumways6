<?php
include './include/koneksi.php';

$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$penulis = $_POST['penulis'];
$publikasi = $_POST['publikasi'];
echo $judul;

$target_dir = "./uploads/".$judul."/";
// check folder
if (!is_dir($target_dir)){
	mkdir($target_dir,0777, true);
}
$target_file = $target_dir . basename($_FILES["cover"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["cover"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["cover"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["cover"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["cover"]["name"])). " has been uploaded.";
	$uploadOK = 3;
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
if ($uploadOK == 3){
	$input = mysqli_query($koneksi,"INSERT INTO book_tb VALUES (null,'$judul' , '$kategori','$penulis','$publikasi','$target_file')");
	echo "\n Sukses";
}else{
	echo "something wrong";
}
?>
