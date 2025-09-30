    <?php
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $kelas = $_POST["kelas"];
    $jurusan = $_POST["jurusan"];
    $kelamin = $_POST["jk"];
    $ipk = $_POST["ipk"];

    if ($ipk >= 3.0) {
        $ket = "Mendapatkan beasiswa sebesar Rp.1.000.000";
    } else {
        $ket = "Tidak dapat beasiswa";
    }
    echo "Nama                  :$nama<br>";
    echo "NIM                   :$nim<br>";
    echo "Kelas                 :$kelas<br>";
    echo "Jurusan               :$jurusan<br>";
    echo "Jenis Kelamin         :$kelamin<br>";
    echo "IPK                   :$ipk<br>";
    echo "Menyatakan bahwa $nama $ket";
    ?>
    <br><br>
    <a href=beasiswa-input.php>Kembali</a>
    </body>

    </html>