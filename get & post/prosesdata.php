<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1" cellpadding="5" cellspacing="5">
        <tr>
            <th colspan="2">Tabel</th>
        </tr>
        <tr>
            <th>Nama</th>
            <td><?php echo $_POST["nama"];?></td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td><?php echo $_POST["alamat"];?></td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td><?php echo $_POST["jk"];?></td>
        </tr>
        <tr>
            <th>Pekerjaan</th>
            <td><?php echo $_POST["pekerjaan"];?></td>
        </tr>
        <tr>
            <th>Hobi</th>
            <td><?php echo $_POST["t"];?>
                <?php echo $_POST["a"];?>
                <?php echo $_POST["m"];?>
            </td>
        </tr>
    </table>
</body>

</html>