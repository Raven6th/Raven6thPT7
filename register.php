<?php
    include 'session.php';
    require 'connect.php';

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(isset($_POST['register'])){
            $username = $_POST['regnama'];
            $email = $_POST['regemail'];
            $password = $_POST['regpass'];

            $stmt = $conn->prepare("INSERT INTO part_user (nama, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $username, $email, $password);
            if($stmt->execute()){
                $_SESSION['username'] = $username;
                $_SESSION['loggedin'] = true;
                header("Location: index.php");
                exit;
            }
            else{
                // header("Location: register.php");
                echo "Error: " . $stmt->error;
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
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>
<body>
<header>
<a href="index.php"><h1 style="color: darksalmon;">PART</h1></a>
        <a href="index.php"><h2><span style="color: darksalmon;">P</span>ersediaan <span style="color: darksalmon;">A</span>lat <span style="color: darksalmon;">R</span>umah <span style="color: darksalmon;">T</span>angga</h2></a>
        <nav>
            <ul class="links">
                <li class="to" id="login"><a href="login.php">Login</a></li>
                <li class="to"><a href="index.php#product">Produk</a></li>
                <li class="to"><a href="index.php#about">Tentang Saya</a></li>
                <button class="toggle-mode-btn">Dark/Light Mode</button>
            </ul>
        </nav>
    </header>
    <div>
        <section class="register">
                <h2>Registrasi</h2>
                <form action="register.php" method="post">
                    <label for="regnama">Masukkan Nama: </label>
                    <input type="text" name="regnama" id="regnama" required><br><br>

                    <label for="regemail">Masukkan Email: </label>
                    <input type="email" name="regemail" id="regemail" required><br><br>

                    <label for="regpass">Masukkan Password: </label>
                    <input type="password" name="regpass" id="regpass"><br><br>
                    <br>
                    <input type="submit" name="register">
                </form>
        </section>
    </div>
    <footer>
        <p>&copy; 2023 PART Store</p>
    </footer>
<script>
    $(document).ready(function () {
        $(".toggle-mode-btn").on("click", function(){ //addeventlistener
            if($(".main").hasClass("dark")){
                $(".main").removeClass("dark");
                $(".links").removeClass("dark");
                $(".about").removeClass("dark");
                $(".product").removeClass("dark");
                $(".box-content").removeClass("box-content-dark");
                $(".box-content").addClass("box-content");
                $(".me").removeClass("lighttext");
                $(".to").removeClass("lighttext");
                $(".toggle-mode-btn").text("Dark Mode");
            }
            else{
                $(".main").addClass("dark");
                $(".links").addClass("dark");
                $(".about").addClass("dark");
                $(".product").addClass("dark");
                $(".box-content").addClass("box-content-dark");
                $(".box-content").removeClass("box-content");
                $(".me").addClass("lighttext");
                $(".to").addClass("lighttext");
                $(".toggle-mode-btn").text("Light Mode");
            }
        });
    });
</script>
</body>
</html>