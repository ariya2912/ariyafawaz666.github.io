<!DOCTYPE html>
<html>
<head>
    <title>Form Pembelian Barang</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="container">
<span class="borderline"></span>
<div class="tabel">
<form action="" method="POST">

<h2>Pembelian Barang</h2>

<table border="1">
<tr>
            <th>No</th>
            <th>No Faktur</th>
            <th>Nama Pembeli</th>
            <th>Alamat Pembeli</th>
            <th>Nama Barang</th>
            <th>Harga Barang</th>
            <th>Jumlah Beli</th>
            <th>Diskon</th>
            <th>Total</th>
        </tr>

        <?php

        include "koneksi.php";
        $no=1;
        $query = mysqli_query($conn,"select * from tbpembelianbarang");
        while ($data = mysqli_fetch_array($query)) {
            if ($data['namabarang'] == "TV") {
            $harga = 5000000;
        } elseif ($data['namabarang'] == "Kulkas") {
            $harga = 4000000;
        } elseif ($data['namabarang'] == "Mesin Cuci") {
            $harga = 6000000;
        }
        $jumlahdiskon = ($data['diskon']/100) * $harga * $data['jumlahbeli'];
        $total = ($harga * $data['jumlahbeli']) - $jumlahdiskon;
        ?>
        
        <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $data['nofaktur'];?></td>
        <td><?php echo $data['namapembeli'];?></td>
        <td><?php echo $data['alamatpembeli'];?></td>
        <td><?php echo $data['namabarang'];?></td>
        <td><?php echo $harga;?></td>
        <td><?php echo $data['jumlahbeli'];?></td>
        <td><?php echo $jumlahdiskon;?></td>
        <td><?php echo $total;?></td>
        </tr>
        <?php } ?>
    </table>
</div>
</form>
</div>
</body>
</html>
