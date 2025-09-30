<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pengelolaan Data Mahasiswa</h1>
    <form action="prosesdata.php" method="post">
        Nama:<input type="text" name="nama" size="25"><br>
        Alamat:<input type="text" name="alamat"><br>
        Jenis Kelamin:
        <input type="radio" name="jk" value="Laki-laki">Laki-laki
        <input type="radio" name="jk" value="Perempuan">Perempuan<br>
        Pekerjaan:
        <select name="pekerjaan">
            <option>Pelajar</option>
            <option>Guru</option><
        </select><br>
        Hobi:
        <input type="checkbox" name="t" value="olahraga">olahraga
        <input type="checkbox" name="a" value="main game">Main game
        <input type="checkbox" name="m" value="nonton film">Nonton film<br>
        <input type="submit" value="Kirim"><input type="reset" value="Batal">
        </form>
</body>
</html>