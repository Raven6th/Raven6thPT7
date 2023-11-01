<?php
    include 'session.php';
    require 'connect.php';

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(isset($_POST['login'])){
            $username = $_POST['lognama'];
            $password = $_POST['logpass'];

            if($username === "admin" && $password === "admin"){
                $_SESSION['username'] = "admin";
                $_SESSION['loggedin'] = true;
                header("Location: index.php");
            }
            $result = mysqli_query($conn, "SELECT * FROM part_user WHERE nama = $username");
            if(mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);
                if($row['password'] === $password){
                    $_SESSION['username'] = $username;
                    $_SESSION['loggedin'] = true;
                    header("Location: index.php");
                }
            }
            else{
                echo "
                <script>
                alert('Username atau Password salah');
                document.location.href = 'login.php';
                </script>
                ";
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
                <li class="to" id="register"><a href="register.php">Register</a></li>
                <li class="to"><a href="index.php#product">Produk</a></li>
                <li class="to"><a href="index.php#about">Tentang Saya</a></li>
                <button class="toggle-mode-btn">Dark/Light Mode</button>
            </ul>
        </nav>
    </header>
    <div>
        <section class="register">
                <h2>Login</h2>
                <form action="login.php" method="post">
                    <label for="lognama">Masukkan Nama: </label>
                    <input type="text" name="lognama" id="lognama" required><br><br>

                    <label for="logpass">Masukkan Password: </label>
                    <input type="password" name="logpass" id="logpass"><br><br>
                    <br>
                    <input type="submit" name="login">
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