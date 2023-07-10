<?php
include("koneksi.php");
?>

<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>:: Data Mahasiswa ::</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>

  <body>
    <div class="container">
        <div class="col-med-12">
   <h3 style="margin:20px 0px 5px 0px">Data Mahasiswa</h3> 
   <hr>
   <a href="tambah_form.php" class="btn btn-success mt-2">Tambah Data</a>
   <table class="table table-striped m-4">
    <thead>
    <tr class="info">
        <th>NIM</th>
        <th>Nama Mahasiswa</th>
        <th>Jenis Kelamin</th>
        <th>Program Studi</th>
        <th>Keahlian</th>   
        <th>Aksi</th>    
    </thead>

    <!-- Menampilkan data mahasiswa dari database -->
    <?php
    $sql = "select * from mahasiswa";
    $query = mysqli_query($koneksi, $sql);

    while($mhs = mysqli_fetch_array($query)) {
        echo "<tr>";
        echo "<td>" .$mhs['nim']. "</td>";
        echo "<td>" .$mhs['nama_mahasiswa']. "</td>";
        echo "<td>" .$mhs['jenis_kelamin']. "</td>";
        echo "<td>" .$mhs['program_studi']. "</td>";
        echo "<td>" .$mhs['keahlian']. "</td>";
        echo "<td>"; 
        echo "<a href='edit_form.php?id=" .$mhs['id']. "' class='btn btn-primary'>Edit</a> &nbsp";
        echo "<a href='hapus.php?id=" .$mhs['id']. "' class='btn btn-danger'>Hapus</a> &nbsp";
        echo "</td>";
        echo "</tr>";
    }
    ?>
   </table>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>