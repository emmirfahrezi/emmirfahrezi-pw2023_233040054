<?php
require 'functions.php';
// cek apakah tombol tambah sudah di klilk atau belum

$id = $_GET['id'];
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

if (isset($_POST['ubah'])) {

    if (ubah($_POST) > 0) {
        echo "<script>
    alert('data berhasil diubah');
    document.location.href = 'index.php';
    </script>";
    } else {
        echo "data gagal ditambahkan!";
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>pemrograman web | ubah data mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Ubah Data mahasiswa</h1>

        <form action="" method="post">
            <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
            <div class="mb-3">
                <label for="nama" class="form-label">nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required value="<?= $mhs['nama']; ?>">
            </div>

            <div class="mb-3">
                <label for="nim" class="form-label">nim</label>
                <input type="text" class="form-control" id="nim" name="nim" required value="<?= $mhs['nim']; ?>">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">email</label>
                <input type="text" class="form-control" id="email" name="email" required value="<?= $mhs['email']; ?>">
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">jurusan</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan" required value="<?= $mhs['jurusan']; ?>">
            </div>
            <button type="submit" name="ubah" class="btn btn-primary">ubah</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>