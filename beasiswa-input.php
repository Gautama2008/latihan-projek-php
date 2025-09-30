<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>percabangan</title>
</head>

<body>
    <h1>PENERIMAAAN BEASISWA</h1>
    <form method="post" action="beasiswa-output.php">
        Nama:<input type="text" name="nama"><br>
        NIM:<input type="text" name="nim"><br>
        Kelas:<input type="text" name="kelas"><br>
        Jurusan:<select name="jurusan">
            <option>PPLG</option>
            <option>DKV</option>
            <option>ANIMASI</option>
            <option>AKT</option>
            <option>BDP</option>
        </select><br>
        Jenis Kelamin:
        <input type="radio" name="jk" value="Laki-laki">Laki-laki
        <input type="radio" name="jk" value="Perempuan">Perempuan<br>
        IPK:<input type="text" name="ipk"><br><br>
        <input type="submit">
        <input type="reset">
    </form>
</body>

</html>