<!-- koneksi php ke db_basisdata-->
 <?php
 $koneksi  = mysqli_connect("localhost", "root", "", "db_basisdata");
//  jika koneksi gagal maaka tampilkan error
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
