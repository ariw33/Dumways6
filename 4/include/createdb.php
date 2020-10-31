<?php 
$servername = "localhost";
$username = "root";
$password = "gx58ud9x";
$dbl = "library";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error."<br>");
}

// Create database
$sql = "CREATE DATABASE ".$dbl."";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully <br>";
} else {
  echo "Error creating database: " . $conn->error."<br>";
}
$conn->close();
$conn2 = mysqli_connect($servername, $username, $password, $dbl);
$table1 = "CREATE TABLE book_tb (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
                name VARCHAR( 128 ) NOT NULL ,
                category_id VARCHAR( 64 ) NOT NULL ,
                writer_id VARCHAR( 16 ) NOT NULL ,
                Publication_year VARCHAR( 16 ) NOT NULL ,
                img VARCHAR( 32 ) NOT NULL
                )";
if (mysqli_query($conn2, $table1)) {
  echo "Table book_tb created successfully <br>";
} else {
  echo "Error creating table: " . mysqli_error($conn2)."<br>";
}
$table2 = "CREATE TABLE category_tb (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
                name VARCHAR( 128 ) NOT NULL
                )";
if (mysqli_query($conn2, $table2)) {
  echo "Table category_tb created successfully <br>";
} else {
  echo "Error creating table: " . mysqli_error($conn2)."<br>";
}	
$table3 = "CREATE TABLE writer_tb (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
                name VARCHAR( 128 ) NOT NULL,
				Gender VARCHAR (7) NOT NULL,
				komentar TEXT NOT NULL
                )";
if (mysqli_query($conn2, $table3)) {
  echo "Table writer_tb created successfully <br>";
} else {
  echo "Error creating table: " . mysqli_error($conn2)."<br>";
}			
mysqli_close($conn2);

?>