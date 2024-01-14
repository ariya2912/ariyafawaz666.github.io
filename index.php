<!DOCTYPE html>
<html>
<head>
    <title>Form Pembelian Barang</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
    <span class="borderline"></span>
    <form action="ambildata.php" method="POST">
    <h2>Form Pembelian Barang</h2><br>
        <div class="inputbox">
        <input type="text" name="nofaktur" required>
        <span>No Faktur</span>
        <i></i>
        </div>
        <div class="inputbox">
        <input type="text" name="namapembeli" required>
        <span>Nama Pembeli</span>
        <i></i>
        </div>
        <div class="inputbox">
        <input type="text" name="alamatpembeli" required>
        <span>Alamat Pembeli</span>
        <i></i>
        </div>
        <div class="inputbox">
        <input type="text" name="namabarang" required>
        <span>Nama Barang</span>
        <i></i>
        </div>
        <div class="inputbox">
        <input type="number" name="jumlahbeli" required>
        <span>Jumlah Beli</span>
        <i></i>
        </div>
        <div class="inputbox">
        <input type="text" name="diskon" required>
        <span>Diskon (%)</span>
        <i></i><br>
        </div>
        <span>.</span>
        <span>.</span>
        <input type="submit" value="SIMPAN">
    </form>
    </div>
</body>
</html>