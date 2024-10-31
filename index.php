<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu keluarga</title>
    <!-- link to style.css -->
     <link rel="stylesheet" href="style.css">
     <style>
         /* Style untuk semua tombol */
button {
  background-color: #4CAF50; /* Warna hijau */
  color: white;
  font-weight: bold; /* Teks menjadi tebal */
  padding: 10px 13px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  margin: 5px;
}

/* Style untuk tombol saat dihover */
button:hover {
  background-color: #3e8e41;
}
     </style>
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
    <a href="input.php"><button>Tambah</button></a>
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
            <td align="center">Aksi</td>
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
<td>
<a href="edit.php?nik =<?php echo $hasil['nik'] ?>"><button>Edit</button></a>
<a href="hapus.php?nik=<?php echo $hasil['nik'] ?>"><button>Hapus</button></a>
</td>
</tr>
<?php }}else { ?>
<tr>
    <td colspan="9" align="center">Data Kosong</td>
</tr>
<?php }  ?>
            </table>
            <br>
        <a href="cetak.php" target="blank">
            <button>
                cetak
            </button>
        </a>
    </div>
</body>
</html>