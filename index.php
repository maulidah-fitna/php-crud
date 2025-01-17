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
    <a class="tambah" href="tambah.php">Tambah</a>
</p>
<table>
    <thead>
        <th>No</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>Aksi</th>

    </thead>
    <tbody>

<?php
include "config.php";

$query = "SELECT * FROM siswa";

$hasil = mysqli_query($koneksi, $query);

$no = 1;
while($data = mysqli_fetch_assoc($hasil)){
?>
    <tr>
        <td><?=$no?></td>
        <td><?=$data['nama']?></td>
        <td><?=$data['kelas']?></td>
        <td><?=$data['jurusan']?></td>
        <td>
            <a class="tombol edit" href="edit.php?id=<?=$data['id']?>">Edit</a>
            <a class="tombol hapus" href="hapus.php?id=<?=$data['id']?>">Hapus</a>
        </td>
    </tr>

<?php
$no++;
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
        border-radius:3px;
    }
    .tambah{
        background: blue;
        color: white;
        padding: 7px;
        font-weight: bold;
    }
    .tombol{
        color: white;
        padding: 3px;
        font-size: 12px;
    }
    .edit{
        background: orange;
    }
    .hapus{
        background: red;
    }

</style>

