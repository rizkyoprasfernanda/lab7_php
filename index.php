<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Praktikum PHP</title>
</head>

<body>
    <?php
    $nama = "Rizky Opras";
    $tugas = 85;
    $uts = 78;
    $uas = 90;

    $nilaiRataRata = ($tugas + $uts + $uas) / 3;

    $nilaiAkhir = ($tugas * 0.30) + ($uts * 0.30) + ($uas * 0.40);

    if ($nilaiAkhir >= 85) {
        $predikat = "A";
    } elseif ($nilaiAkhir >= 75) {
        $predikat = "B";
    } elseif ($nilaiAkhir >= 60) {
        $predikat = "C";
    } else {
        $predikat = "D";
    }

    echo "Nama: " . htmlspecialchars($nama) . "<br>";
    echo "Nilai rata-rata: " . number_format($nilaiRataRata, 2) . "<br>";
    echo "Nilai akhir: " . number_format($nilaiAkhir, 2) . "<br>";
    echo "Predikat: " . $predikat;
    ?>
    <br>
    <br>


    <!-- Latihan 3 -->
    <?php
    $mahasiswa = ["Alya", "Bima", "Citra", "Doni", "Eka", "Fajar", "Gina"];

    echo "<h3>Daftar Mahasiswa</h3><ol>";

    foreach ($mahasiswa as $nama) {
        echo "<li>" . htmlspecialchars($nama) . "</li>";
    }

    echo "</ol>";
    ?>
    <br>
    <br>

    <!-- Latihan 4 -->
    <?php
    function hitungLuas($panjang, $lebar)
    {
        return $panjang * $lebar;
    }

    $luas = hitungLuas(10, 5);

    echo "Panjang: 10 cm<br>";
    echo "Lebar: 5 cm<br>";
    echo "Luas persegi panjang: " . $luas . " cm2";
    ?>
    <br>
    <br>

    <!-- Latihan 5 -->
    <?php
    $mahasiswa = ["Rizky", "Alya", "Bima", "Citra", "Doni"];
    ?>

    <form method="GET" action="">
        <label for="kata">Cari nama:</label>
        <input id="kata" name="kata" type="text">
        <button type="submit">Cari</button>
    </form>

    <?php
    if (isset($_GET["kata"])) {
        $kata = trim($_GET["kata"]);

        if (in_array($kata, $mahasiswa)) {
            echo "Nama ditemukan: " . htmlspecialchars($kata);
        } else {
            echo "Nama tidak ditemukan.";
        }
    }
    ?>
    <br>
    <br>

    <!-- Latihan 6 -->
    <form method="POST" action="">
        <label for="nama">Nama:</label>
        <input id="nama" name="nama" type="text" required>

        <label for="nim">NIM:</label>
        <input id="nim" name="nim" type="text" required>

        <label for="prodi">Program Studi:</label>
        <input id="prodi" name="prodi" type="text" required>

        <button type="submit" name="kirim">Kirim Data</button>
        <button type="reset">Reset</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nama = trim($_POST["nama"] ?? "");
        $nim = trim($_POST["nim"] ?? "");
        $prodi = trim($_POST["prodi"] ?? "");

        if ($nama === "" || $prodi === "" || $nim === "") {
            echo "<p>Semua kolom wajib diisi.</p>";
        } elseif (!ctype_digit($nim) || strlen($nim) !== 9) {
            echo "<p>NIM harus terdiri dari 9 angka.</p>";
        } else {
            echo "<h3>Data diterima</h3>";
            echo "Nama: " . htmlspecialchars($nama, ENT_QUOTES, "UTF-8") . "<br>";
            echo "NIM: " . htmlspecialchars($nim, ENT_QUOTES, "UTF-8") . "<br>";
            echo "Program Studi: " . htmlspecialchars($prodi, ENT_QUOTES, "UTF-8");
        }
    }
    ?>
    <br>
    <br>

    <!-- Latihan 7 -->
    <?php
    function formatRupiah($angka)
    {
        return "Rp" . number_format($angka, 0, ",", ".");
    }

    $hasil = null;
    $error = "";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $barang = trim($_POST["barang"] ?? "");
        $hargaInput = $_POST["harga"] ?? "";
        $jumlahInput = $_POST["jumlah"] ?? "";

        if (
            $barang === "" || !is_numeric($hargaInput) ||
            !ctype_digit((string)$jumlahInput) ||
            (float)$hargaInput < 0 || (int)$jumlahInput < 1
        ) {
            $error = "Periksa kembali nama barang, harga, dan jumlah.";
        } else {
            $harga = (float)$hargaInput;
            $jumlah = (int)$jumlahInput;
            $subtotal = $harga * $jumlah;
        }
    }
    ?>

    <form method="POST">
        <label>Nama barang
            <input name="barang" required>
        </label><br><br>

        <label>Harga
            <input name="harga" type="number" min="0" step="0.01" required>
        </label><br><br>

        <label>Jumlah
            <input name="jumlah" type="number" min="1" step="1" required>
        </label><br><br>

        <button type="submit">Hitung</button>
    </form>

    <?php
    if ($error !== "") {
        echo "<p>" . htmlspecialchars($error) . "</p>";
    } elseif (isset($subtotal)) {
        echo "<p>Barang: " . htmlspecialchars($barang) . "</p>";
        echo "<p>Harga: " . formatRupiah($harga) . "</p>";
        echo "<p>Jumlah: " . $jumlah . "</p>";
        echo "<p>Subtotal: " . formatRupiah($subtotal) . "</p>";
    }
    ?>
</body>

</html>