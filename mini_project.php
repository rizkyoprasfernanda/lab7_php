<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Aplikasi Formulir Data Mahasiswa</title>
</head>

<body>
    <?php
    $data = null;
    $error = [];
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nama = trim($_POST["nama"] ?? "");
        $nim = trim($_POST["nim"] ?? "");
        $prodi = trim($_POST["prodi"] ?? "");
        $semesterInput = $_POST["semester"] ?? "";
        $email = trim($_POST["email"] ?? "");
        if ($nama === "") $error[] = "Nama wajib diisi.";
        if ($nim === "") $error[] = "NIM wajib diisi.";
        if ($prodi === "") $error[] = "Program studi wajib diisi.";
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error[] = "Format email tidak valid.";
        }
        if (
            !ctype_digit((string)$semesterInput) ||
            (int)$semesterInput < 1 || (int)$semesterInput > 14
        ) {
            $error[] = "Semester harus berupa angka 1–14.";
        }
        if (!$error) {
            $data = compact("nama", "nim", "prodi", "email");
            $data["semester"] = (int)$semesterInput;
        }
    }
    ?>

    <h2>Form Data Mahasiswa</h2>

    <form method="POST" action="">
        Nama:<br>
        <input type="text" name="nama"><br><br>

        NIM:<br>
        <input type="text" name="nim"><br><br>

        Program Studi:<br>
        <input type="text" name="prodi"><br><br>

        Semester:<br>
        <input type="number" name="semester"><br><br>

        Email:<br>
        <input type="text" name="email"><br><br>

        <button type="submit">Kirim</button>
    </form>

    <?php if ($error): ?>
        <h3>Terjadi Kesalahan:</h3>
        <?php foreach ($error as $pesan): ?>
            <p><?php echo htmlspecialchars($pesan); ?></p>
        <?php endforeach; ?>
    <?php endif; ?>

    <?php if ($data): ?>
        <h3>Data Mahasiswa</h3>
        Nama: <?php echo htmlspecialchars($data["nama"]); ?><br>
        NIM: <?php echo htmlspecialchars($data["nim"]); ?><br>
        Program Studi: <?php echo htmlspecialchars($data["prodi"]); ?><br>
        Semester: <?php echo htmlspecialchars((string)$data["semester"]); ?><br>
        Email: <?php echo htmlspecialchars($data["email"]); ?>
    <?php endif; ?>
</body>

</html>