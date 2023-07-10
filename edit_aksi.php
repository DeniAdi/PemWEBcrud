<?php
include("koneksi.php");

// Jika tombol submit di klik
if(isset($_POST['update'])) {
    // Ambil data dari form
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nama_mahasiswa = $_POST['nama_mahasiswa'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $program_studi = $_POST['program_studi'];
    $keahlian = implode(",", $_POST['keahlian']);

    // Buat query untuk memperbarui data
    $sql = "UPDATE mahasiswa SET nim='$nim', nama_mahasiswa='$nama_mahasiswa', jenis_kelamin='$jenis_kelamin', program_studi='$program_studi', keahlian='$keahlian' WHERE id=$id";
    $query = mysqli_query($koneksi, $sql);

    if($query) {
        header('location: index.php');
    } else {
        echo "Gagal Mengubah Data Mahasiswa <a href=index.php>Halaman Index</a>";
    }
} else {
    echo "Anda tidak mempunyai akses <a href=index.php>Halaman Index</a>";
}
?>