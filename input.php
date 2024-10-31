<!DOCTYPE html>
<html>
<head>
<title>Halaman Input Data KK</title>
</head>
<body>
<H2 style="padding: 1px 20px;">Input Data KK</h2>
<form action="" method="POST">
<table style="padding: 1px 20px;">
<tr>
<td>NIK</td>
<td>: </td>
<td><input type="text" name="nik" placeholder="nik" required></td>
</tr>
<tr>
<td>NAMA LENGKAP</td>
<td>: </td>
<td><Input type="text" name="nama_lengkap" placeholder="nama lengkap" required></td>
</tr>
<tr>
<td> JENIS KELAMIN</td>
<td>:</td>
<td><select name="jenkel">
<option value="">--Pilih --</option>
<option value="Laki-Laki">Laki Laki</option>
<option value="Porempuan" >Perempuan</option>
</tr>
<tr>
    <td>TEMPAT TANGGAL  LAHIR</td>
    <td>:</td>
    <td><input type="text" name="ttl" placeholder="ttl" required></td>
</tr>
<tr>
    <td>AGAMA</td>
    <td>:</td>
    <td><select name="agama" id="">
        <option value="">--Pilih--</option>
        <option value="islam">islam</option>
        <option value="kristen">kristen</option>
    </select></td>
</tr>
<tr>
    <td>PENDIDIKAN</td>
    <td>:</td>
    <td><input type="text" name="pendidikan" placeholder="pendidikan" required></td>
</tr>
<tr>
    <td>PEKERJAAN</td>
    <td>:</td>
    <td><input type="text" name="pekerjaan" placeholder="pekerjaan" required></td>
</tr>
<tr>
    <td></td>
    <td></td>
    <td>
        <input type="submit" name="simpan" value="simpan">
        <a href="index.php"><button>Balik ke halaman</button></a>
    </td>
</tr>
</table>
</form>
<?php
include 'koneksi.php';
if(isset($_POST["simpan"])){
$nik = $_POST["nik"];
$nama_lengkap = $_POST["nama_lengkap"];
$jenkel = $_POST[ "jenkel"];
$ttl = $_POST["ttl"];
$agama =  $_POST["agama"];
$pendidikan = $_POST["pendidikan"];
$pekerjaan = $_POST["pekerjaan"];
// membuat variable untuk insert ke database
$sql = "INSERT INTO tabel_kk (nik, nama_lengkap, jenkel, ttl, agama, pendidikan, pekerjaan) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($koneksi, $sql);
mysqli_stmt_bind_param($stmt, "sssssss", $nik, $nama_lengkap, $jenkel, $ttl, $agama, $pendidikan, $pekerjaan);
mysqli_stmt_execute($stmt);

if (mysqli_stmt_error($stmt)) {
    die('Error: ' . mysqli_stmt_error($stmt));
} else {
    header('location: index.php');
}
}
?>
</body>
</html>

