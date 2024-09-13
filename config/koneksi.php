<?php 
// echo 'tes koneksi';
// untuk menghubungkan aplikasi kita ke database
// yang harus dilakukan adalah login kedalam database kita
// menggunakan user dan password yang telah dibuat
// secara default (tanpa disetting) :
// user adalah 'root' 
// dan password nya kosong
$rootDir = $_SERVER['DOCUMENT_ROOT'].'/mlaku/';
$server = "localhost";
$dbuser = "root_rez";
$dbpass = 'ires123';

// lalu kita juga membutuhkan nama database yang akan kita gunakan
// dalam hal ini saya menggunakan nama database 'mlaku'
// sesuai dengan database yang sudah saya buat dan akan saya gunakan untuk project
// untuk anda, sesuaikan nama database dengan nama database yang akan anda gunakan untuk project
$dbname = "mlaku";

// here comes the connection 
$koneksi = mysqli_connect($server, $dbuser, $dbpass, $dbname);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }

?>