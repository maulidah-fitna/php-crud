<?php
// $host = "localhost";
// $user = "root";
// $pass = "";
// $db = "sekolah";

// $koneksi = mysqli_connect($host, $user, $pass, $db);
// if(!$koneksi){
//     die("Koneksi Gagal: ".mysqli_connect_error());
// }
?>

<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "sekolah";

$koneksi = mysqli_connect($host, $user, $pass,$db);

if(!$koneksi){
    die("Koneksi Gagal: ".mysqli_connect_error());
}
?>
