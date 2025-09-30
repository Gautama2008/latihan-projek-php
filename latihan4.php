<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menhitung Luas Lingkaran Menggunakan Difine</title>
</head>

<body>
    <h1>Luas Lingkaran</h1>
    <?php
    //konstanta untuk nilai judul
    define("Judul", "Hitung Luas Lingkaran");
    //konstanta untuk nilai phi
    define("PHI", 3.14);
    $r = 10;
    echo "<br> Jari-jari : $r<br>";
    $luas = PHI * $r * $r;
    echo "Luas Lingkaran = $luas";
    ?>
    <h1>Luas Segitiga</h1>
    <?php
    define("st", 1 / 2);
    define("tt", 8);
    define("ls1", 12);
    define("ls2", 6);
    $l1 = st * ls1 * tt;
    echo "luas segitiga 1 : $l1<br> ";
    $l2 = st * ls2 * tt;
    echo "luas segitiga 2 : $l2";
    ?>
</body>

</html>