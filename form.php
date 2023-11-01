<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <link rel="stylesheet" href="phpstyle.css">
</head>
<body>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["nama"];
        $pass = $_POST["pass"];
        $pesan = $_POST["pesan"];

        echo "<p>Nama: " . htmlspecialchars($name) . "</p>";
        echo "<p>Password: " . htmlspecialchars($pass) . "</p>";
        echo "<p>Jumlah Pemesanan: " . htmlspecialchars($pesan) . "</p>";
    }
    else{
        echo "<p>Form tidak diisi</p>";
    }
    ?>
</body>
</html>
