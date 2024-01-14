<?php
require 'koneksi.php';
    
$nofaktur               = $_POST['nofaktur'];
$namapembeli            = $_POST['namapembeli'];
$alamatpembeli          = $_POST['alamatpembeli'];
$namabarang             = $_POST['namabarang'];
$jumlahbeli             = $_POST['jumlahbeli'];
$jumlahdiskon           = $_POST['diskon'];

$sql = "INSERT INTO tbpembelianbarang (nofaktur, namapembeli, alamatpembeli, namabarang, jumlahbeli, diskon)
VALUES ('$nofaktur', '$namapembeli', '$alamatpembeli', '$namabarang', '$jumlahbeli', '$jumlahdiskon')";

if (mysqli_query($conn, $sql)) {
      header('location: hasil.php');
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>