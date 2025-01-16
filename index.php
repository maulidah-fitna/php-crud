<!--
<title>Data Siswa</title>
<h2>Data Siswa</h2>

<p><a href="tambah.php">Tambah</a></p>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
        </tr>
    </thead>
    <tbody>

<?php
// // Memanggil file koneksi
// include "config.php";

// // Menyiapkan query
// $query = "SELECT * FROM siswa";

// // Menjalankan dan menyimpan hasil query
// $result = mysqli_query($koneksi, $query);

// // Melakukan looping untuk menampilkan data
// $no = 1;
// while($data = mysqli_fetch_assoc($result)){
?>
        <tr>
            <td><?=$no?></td>
            <td><?=$data['nama']?></td>
            <td><?=$data['kelas']?></td>
            <td><?=$data['jurusan']?></td>
        </tr>

<?php
// $no++;
// }
?> 

            </tbody>
</table>

<style>
    table{
        border-collapse: collapse;
    }
    th, td{
        border: 1px solid black;
        padding: 10px;
        text-align: center;
    }
    th{
        background: #ccc;
    }
    a{
        font-weight: bold;
        text-decoration: none;
    }
</style>

<?php
// // Memanggil file koneksi
// include "config.php";

// // Menyiapkan query
// $query = "SELECT * FROM siswa";

// // Menjalankan dan menyimpan hasil query
// $result = mysqli_query($koneksi, $query);

// // Melakukan looping untuk menampilkan data
// while($data = mysqli_fetch_assoc($result)){
//     echo "Nama : ".$data['nama']."<br>";
//     echo "Kelas : ".$data['kelas']."<br>";
//     echo "Jurusan : ".$data['jurusan']."<br>";
// }
?>
-->





<title>Data Siswa</title>
<h2>Data Siswa</h2>

<p>
    <a href="tambah.php">Tambah</a>
</p>
<table>
    <thead>
        <th>No</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
    </thead>
    <tbody>

<?php
include "config.php";

$query = "SELECT * FROM siswa";

$hasil = mysqli_query($koneksi, $query);

while($data = mysqli_fetch_assoc($hasil)){
?>
    <tr>
        <td><?=$data['id']?></td>
        <td><?=$data['nama']?></td>
        <td><?=$data['kelas']?></td>
        <td><?=$data['jurusan']?></td>
    </tr>

<?php
}
?>

        
    </tbody>
</table>

<style>
    table{
        border-collapse:collapse;
    }
    th, td{
        border:1px solid black;
        padding:5px;
    }
    th{
        background:#ccc;
    }
    a{
        font-weight:bold;
        text-decoration:none;
    }
</style>

