<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $NamaBarang = "Iphone 16 PRo Max";
    $jumlah = 5;
    $harga = 2800000;
    $total = $harga * $jumlah;
    $diskon = $total * 0.03;
    $bayar = $total - $diskon;


    echo "Nama Barang:$NamaBarang<br>";
    echo "Jumlah Beli:$jumlah<br>";
    echo "Harga Barang:$harga<br>";
    echo "Diskon:$diskon<br>";
    echo "Total Barang:$total<br>";
    echo "Jumlah Pembayaran:$bayar<br>";
    ?>
</body>

</html>