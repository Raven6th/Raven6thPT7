<?php
    include 'session.php';
    require 'connect.php';
    if(isset($_SESSION['loggedin'])){
        $loginstatus = $_SESSION['loggedin'];
    }
    else{
        $loginstatus = false;
    }
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(isset($_POST['belanja'])){
            if($loginstatus){
                $username = $_SESSION['username'];
                $barang = $_POST['barang'];
                $jumlah = $_POST['jumlah'];
                $gambar = $_FILES['pict'];
                $time = date("Y-m-d");
                $namagambar = "$time.png";
                $tmp = $_FILES["pict"]["tmp_name"];
                if (move_uploaded_file($tmp, 'gambarsimpan/' . $namagambar)){
                    $sql = "INSERT INTO part_belanja VALUES (NULL, '$username', '$barang', '$jumlah', '$namagambar')";
                    $result = mysqli_query($conn, $sql);
                    if($result){
                        header("Location: index.php");
                    }
                }
            }
            else if(!$loginstatus){
                $username = $_POST["nama"];
                $barang = $_POST["barang"];
                $jumlah = $_POST["jumlah"];
                $gambar = $_FILES["pict"];
                $time = date("Y-m-d");
                $namagambar = "$time.png";
                $tmp = $_FILES["pict"]["tmp_name"];
                if (move_uploaded_file($tmp, 'gambarsimpan/' . $namagambar)){
                    $sql = "INSERT INTO part_belanja VALUES (NULL, '$username', '$barang', '$jumlah', '$namagambar')";
                    $result = mysqli_query($conn, $sql);
                    if($result){
                        header("Location: index.php");
                    }
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PART</title>
    <link rel="stylesheet" href="belanja.css">
</head>
<body>
    <header>
    <a href="index.php"><h1 style="color: darksalmon;">PART</h1></a>
        <a href="index.php"><h2><span style="color: darksalmon;">P</span>ersediaan <span style="color: darksalmon;">A</span>lat <span style="color: darksalmon;">R</span>umah <span style="color: darksalmon;">T</span>angga</h2></a>
        <nav>
            <ul class="links">
                <li class="to" id="logout.php" <?php if(!$loginstatus) echo 'style="display: none;"'?>><a href="">Logout</a></li>
                <li class="to" id="register" <?php if($loginstatus) echo 'style="display: none;"'?>><a href="register.php">Register</a></li>
                <li class="to"><a href="index.php#product">Produk</a></li>
                <li class="to"><a href="index.php#about">Tentang Saya</a></li>
                <button class="toggle-mode-btn">Dark/Light Mode</button>
                <li class="to"><a href="belanja.php">Keranjang belanja</a></li>
            </ul>
        </nav>
    </header>
    <div class="main">
        <section class="belanja">
            <form action="belanja.php" method="post" class="shopcart" enctype="multipart/form-data">
                <?php if(!$loginstatus) echo '<label for="nama">Masukkan Nama</label>';
                 if(!$loginstatus) echo '<input type="text" name="nama" id="nama"><br><br>';?>

                <label for="barang">Masukkan Nama Barang</label>
                <input type="text" name="barang" id="barang"><br><br>

                <label for="jumlah">Masukkan jumlah barang</label>
                <input type="number" name="jumlah" id="jumlah"><br><br>

                <label for="">foto</label>
                <input type="file" name="pict" id="pict" required><br><br>

                <input type="submit" name="belanja">
            </form>
        </section>
    </div>
    <footer>
        <p>&copy; 2023 PART Store</p>
    </footer>
</body>
</html>