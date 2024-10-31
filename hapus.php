<?php
include 'koneksi.php';

if(isset($_GET['nik'])) {
    // Persiapkan query dengan prepared statement (lebih aman)
    $nik = $_GET['nik'];
    $sql = "DELETE FROM tabel_kk WHERE nik = ?";
    $stmt = mysqli_prepare($koneksi, $sql);
    mysqli_stmt_bind_param($stmt, "s", $nik);
    mysqli_stmt_execute($stmt);

    if (mysqli_stmt_affected_rows($stmt) > 0) {
        // Data berhasil dihapus
        header('Location: index.php');
        exit();
    } else {
        echo "Gagal menghapus data: " . mysqli_error($koneksi);
    }
} else {
    echo "<br>data yang akan dihapus tidak ditemukan.  <br> kesalahan pada syntax";

}
?>
