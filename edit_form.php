<?php
include ("koneksi.php");

if (!isset($_GET['id'])){
    header('Location: index.php');
}

$id = $_GET['id'];

$sql = "select * from mahasiswa where id = $id";
$query = mysqli_query($koneksi, $sql);
$mhs = mysqli_fetch_assoc($query);

$checked = explode(".", $mhs['keahlian']);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>::Update Data Mahasiswa::</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <style>
    .btn-space {
        margin-right: 8px
    }
    </style>
</head>
  <body>
   <div class="container">
<div class="col-md-12">
    <h3 style="margin: 20px 0px 20px 0px"> Update Data Mahasiswa </h3>
    <from method="post" action ="edit_aksi.php" class = "form_horizontal">
        <input type="hidden" name="id" value="<?php echo $mhs['id'] ?>">
        <input type="hidden" name="nim" value="<?php echo $mhs['nim'] ?>">
<div class="mb-3">
    <label class="form-label fw-bold">NIM</label>
    <input type="text" name="nim" class="form-control" value="<?php echo $mhs['nim'] ?>" disabled>
</div>
<div class="mb-3">
    <label class="form-label fw-bold">Nama Mahasiswa</label>
    <input type="text" name="nama_mahasiswa" class="form-control" value="<?php echo $mhs['nama_mahasiswa'] ?>">
</div>
<div class="mb-3">
    <label class="form-label fw-bold">Jenis Kelamin</label>
    <div class="form-check">
    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Pria"<?php if($mhs['jenis_kelamin'] == 'Pria')  echo 'checked'?>>
    <label class="form-check-label">
        Pria 
</label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" name="jenis_kelamin" value="Wanita" <?php if($mhs['jenis_kelamin'] == 'Wanita')  echo 'checked'?>>
    <label class="form-check-label">
        Wanita
</label>
</div>
</div>
<div class="mb-3">
    <label class="form-label fw-bold">Program Studi</label>
    <select class="form-select" name="program_studi">   
    <option value="Teknik Informatika" <?php if ($mhs['program_studi'] == 'Teknik Informatika') echo 'selected'?>>Teknik Informatika</option>
    <option value="Sistem Informasi" <?php if ($mhs['program_studi'] == 'Sistem Informasi') echo 'selected'?>>Sistem Informasi</option>
    <option value="Ilmu Komunikasi" <?php if ($mhs['program_studi'] == 'Ilmu Komunikasi') echo 'selected'?>>Ilmu Komunikasi</option>
    </select>
</div>
<div class="mb-3">
<label class="form-label fw-bold">Keahlian</label>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="keahlian[]" value="Data Mining" <?php if(in_array("Data Mining", $checked)) echo "checked" ?>>
    <label class="form-check-label">Data Mining
    </label>
</div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="keahlian[]" value="Enterprice Architecture" <?php if(in_array("Enterprice Architecture", $checked)) echo "checked" ?>>
    <label class="form-check-label">
        Enterprice Architecture
    </label>
</div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="keahlian[]" value="Image Processing" <?php if(in_array("Image Processing", $checked)) echo "checked" ?>>
    <label class="form-check-label">
        Image Processing
    </label>
</div>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="keahlian[]" value="Software Engineering" <?php if(in_array("Software Engineering", $checked)) echo "checked" ?>>
    <label class="form-check-label">Software Engineering
    </label>
</div>
</div>
<div class="form-group mt-4">
    <button type="reset" name="reset" class="btn btn-danger btn-space">Cancel</button>
    <button type="submit" name="Update" class="btn btn-primary">Update</button>
</div>
    </form>
</div>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>