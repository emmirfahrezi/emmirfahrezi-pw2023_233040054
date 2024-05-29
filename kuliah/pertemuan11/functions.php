<?php

function koneksi()
{
    $db = mysqli_connect('localhost', 'root', '', 'pw2024_233040054')  or die('koneksi ke DB gagal');
    return $db;
}
function query($sql)
{
    // koneksi ke database
    $conn = koneksi();
    // lakukan query untuk mengambil data mahasiswa
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    // menyiapkan data mahasiswa (fetch)
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

// tambah data
function tambah($data)
{
    $conn = koneksi();
    // cek apakah data berhasil di tambahkan atau tidak
    $nama = htmlspecialchars($data['nama']);
    $nim =  htmlspecialchars($data['nim']);
    $email =  htmlspecialchars($data['email']);
    $jurusan =  htmlspecialchars($data['jurusan']);


    $sql = "INSERT INTO mahasiswa VALUES
            (null, '$nama', '$nim', '$email', '$jurusan')";

    mysqli_query($conn, $sql) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}


// hapus data
function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

// ubah data
function ubah($data)
{

    $conn = koneksi();
    $id = htmlspecialchars($data['id']);
    // cek apakah data berhasil di tambahkan atau tidak
    $nama = htmlspecialchars($data['nama']);
    $nim =  htmlspecialchars($data['nim']);
    $email =  htmlspecialchars($data['email']);
    $jurusan =  htmlspecialchars($data['jurusan']);


    $query = "UPDATE mahasiswa SET
            nama = '$nama',
            nim = '$nim',
            email = '$email',
            jurusan = '$jurusan'
            WHERE id = $id";

    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}
