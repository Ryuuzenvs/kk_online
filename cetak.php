<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> - </title>
</head>
<body bgcolor="f0f8ff">
    <div style="margin: 0 auto; width:90%" >
<table align= "center">
    <tr>
        <td align="center" bgcolor="#f0f8ff" width="100%" >
            <h2 align="center">KARTU KELUARGA</h2>
            <h3 align="center">No. 012345678</h3>
        </td>  
    </tr>
</table>
<tr>
    <a href="index.php">
        
    </a>
    <br>
    <!-- <a href="input.php">Tambah</a> -->
    <br>
    <table align="center" border="1" cellpeding="0" width="100%" bgcolor="#add8e6">
        <tr bgcolor="#48d1cc">
            <td align="center">NO</td>
            <td align="center">Nik</td>
            <td align="center">Nama Lengkap</td>
            <td align="center">Jenis Kelamin</td>
            <td align="center">Tempat tanggal lahir</td>
            <td align="center">Agama</td>
            <td align="center">Pendidikan</td>
            <td align="center">Pekerjaan</td>
        </tr>
    <?php
    include 'koneksi.php';
    $no = 1;
    $tampil= mysqli_query($koneksi, "SELECT * FROM tabel_kk");
    if (mysqli_num_rows($tampil)>0) {
        while ($hasil = mysqli_fetch_array($tampil)) {
    ?>
<tr align="center">
<td> <?php echo $no++ ?></td>
<td> <?php echo $hasil['nik' ] ?></td>
<td> <?php echo $hasil[ 'nama_lengkap'] ?></td>
<td> <?php echo $hasil['jenkel'] ?></td>
<td> <?php echo $hasil['ttl'] ?></td>
<td> <?php echo $hasil['agama'] ?></td>
<td> <?php echo $hasil[ 'pendidikan'] ?></td>
<td> <?php echo $hasil[ 'pekerjaan'] ?></td>
</tr>
<?php }}else { ?>
<tr>
    <td colspan="8" align="center">Data Kosong</td>
</tr>
<?php }  ?>
    </table>
    <script>
        window.print();
    </script>
    </div>
</body>
</html>