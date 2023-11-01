<?php
    include 'session.php';
    require 'connect.php';

    $privilege = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PART</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!-- <script text="javascript" src="script.js"></script> -->
</head>
<body>
    <?php
        if(isset($_SESSION['loggedin'])){
            $loginstatus = $_SESSION['loggedin'];
        }
        else if($_SESSION['username'] === "admin" && isset($_SESSION['loggedin'])){
            $privilege = "admin";
            $loginstatus = $_SESSION['loggedin'];
        }
        else{
            $loginstatus = false;
        }
    ?>
    <header>
    <a href="index.php"><h1 style="color: darksalmon;">PART</h1></a>
        <a href="index.php"><h2><span style="color: darksalmon;">P</span>ersediaan <span style="color: darksalmon;">A</span>lat <span style="color: darksalmon;">R</span>umah <span style="color: darksalmon;">T</span>angga</h2></a>
        <nav>
            <ul class="links">
                <li class="to" id="logout" <?php if(!$loginstatus) echo 'style="display: none;"'?>><a href="logout.php">Logout</a></li>
                <li class="to" id="register" <?php if($loginstatus) echo 'style="display: none;"'?>><a href="register.php">Register</a></li>
                <li class="to" id="login" <?php if($loginstatus) echo 'style="display: none;"'?>><a href="login.php">Login</a></li>
                <li class="to"><a href="#product">Produk</a></li>
                <li class="to"><a href="#about">Tentang Saya</a></li>
                <button class="toggle-mode-btn">Dark/Light Mode</button>
                <li class="to" <?php if($_SESSION['username'] != "admin") echo 'style="display: none;"'?>><a href="belanja.php">Keranjang belanja</a></li>
            </ul>
        </nav>
    </header>
    <div class="main">
        <section class="product" id="product">
            <h2>Populer Saat Ini</h2>
            <p id="jam">
                <?php
                date_default_timezone_set("asia/pontianak");
                echo date("l, d F Y - H:i:s");
                ?>
            </p>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla venenatis justo sit amet est suscipit, id convallis ex semper.</p> -->
            <div class="gallery">

                <div>
                    <img src="sapuskop.jpg" alt="">
                    <p class="producttitle">
                        Product 1
                    </p>
                    <ul>
                        <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor perspiciatis molestias deleniti aliquid eaque totam culpa deserunt, enim voluptate laborum, sed ut omnis cum eius, vero reiciendis. Totam, hic deleniti.</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, dolor doloribus ipsum vitae, fugiat cumque id ducimus eos, molestiae exercitationem itaque. Aspernatur, cupiditate nobis iure modi accusantium architecto sunt magnam?</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quos amet quaerat rerum quia, unde sit ducimus, eius nobis, fugiat dicta ipsum incidunt quas nihil exercitationem a voluptate non corporis.</li>
                    </ul>
                </div>

                <div>
                    <img src="pel.jpg" alt="">
                    <p class="producttitle">
                        Product 2
                    </p>
                    <ul>
                        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio molestias quo, optio unde, accusantium enim nesciunt dolore neque dignissimos debitis vero quos nam. Unde fugit, nam sequi maiores officia iure.</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, ea. Dolorem voluptas laborum, rerum nesciunt cumque est tempore asperiores iure nemo laudantium? Perferendis hic expedita debitis, deleniti dolores repudiandae inventore!</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius sapiente repellendus consequuntur est eum obcaecati, velit, autem molestiae ratione officia doloribus error perferendis aspernatur odit nostrum labore consequatur sint delectus?</li>
                    </ul>
                </div>

                <div>
                    <img src="hanger kawat.jpg" alt="">
                    <p class="producttitle">
                        Product 3
                    </p>
                    <ul>
                        <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio amet reiciendis quia magnam libero dolorum sed minus earum, at culpa iure quaerat mollitia fuga alias molestiae voluptas! Libero, iure architecto?</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, sint molestiae, tempore natus sunt commodi fugiat, alias tempora molestias perspiciatis delectus corrupti hic. Cumque facere quam quae similique accusantium consequatur.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, modi in ad corporis praesentium eius dolore autem? Totam illo placeat dolores ducimus repudiandae veritatis odio perspiciatis dignissimos, harum obcaecati ad!</li>
                    </ul>
                </div>

                <div>
                    <img src="cooking set.jpg" alt="">
                    <p class="producttitle">
                        Product 4
                    </p>
                    <ul>
                        <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores delectus officia dolore rem debitis atque magnam, aliquam architecto assumenda praesentium obcaecati nemo? Impedit dolor molestiae vitae! Repellendus omnis ipsum eum.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto cum dicta temporibus non? Laudantium esse ipsa dolorum atque reprehenderit vero libero dignissimos veniam sequi quos, pariatur unde nisi similique neque!</li>
                        <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta in minima quod voluptas, voluptate doloremque tempora odio rerum dolorum maiores corrupti sunt id, porro aliquid aliquam ea, quam et animi!</li>
                    </ul>
                </div>

                <div>
                    <img src="knife set.jpg" alt="">
                    <p class="producttitle">
                        Product 5
                    </p>
                    <ul>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat ab, modi deserunt ipsa error doloribus cupiditate, voluptas beatae necessitatibus voluptatum culpa fugit magni distinctio sit laboriosam et provident. Accusantium, et?</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab ipsum dolores tempore fugit perferendis corrupti atque assumenda ex dolor magnam adipisci, aspernatur nemo dolorem ullam consectetur soluta et incidunt. Consectetur.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error consequuntur at, eligendi amet sint velit. Dignissimos, distinctio. A reprehenderit praesentium delectus. Totam eius, blanditiis possimus earum vitae quas rem! Expedita.</li>
                    </ul>
                </div>

                <div>
                    <img src="alat perkakas.jpg" alt="">
                    <p class="producttitle">
                        Product 6
                    </p>
                    <ul>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque ad quae, ipsum veniam accusamus vero quos possimus, ea harum quod vel voluptas quasi facilis nulla enim animi eveniet aperiam eos.</li>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt, voluptates illo unde repellat ipsa aliquid ipsam maiores vero culpa adipisci, ut, quae praesentium velit beatae amet deleniti harum itaque excepturi.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis sunt, sit eveniet minima vel illo optio quisquam voluptas architecto labore autem. Veritatis accusamus in, perspiciatis sunt commodi facilis pariatur repellat!</li>
                    </ul>
                </div>

                <div>
                    <?php
                        $query = mysqli_query($conn, "SELECT * FROM part_belanja");
                        while ($row = mysqli_fetch_assoc($query)) {
                            echo "<img src='gambarsimpan/$row[gambar]' class='gambar-cover' alt='Gambar'>";
                        }
                    ?>
                </div>

            </div>
            <button class="quickshop">PRESS</button>
        </section>

            <div class="box-background" id="formbox">
                <div class="box-content">
                    <h1>Quick Buy</h1>
                    <br>
                    <form action="form.php" method="POST" id="buyform">
                        <label for="nama">Nama:</label>
                        <input type="text" name="nama" id="nama" required><br><br>
                        
                        <label for="pass">Password:</label>
                        <input type="password" name="pass" id="pass"><br><br>
                        
                        <label for="pesan">Jumlah:</label>
                        <input type="number" name="pesan" id="pesan" required><br><br>
                        
                        <input class="buton" type="submit" value="Order!"><br>
                    </form>
                    <button class="buton" id="backButton">Kembali</button>
                </div>
            </div>
            <div class="box-background" id="resultboxbackground">
                <div class="box-content" id="resultbox">
                    <button class="butonresult" id="backButtonresult">Kembali</button>
                </div>
            </div>

        <section class="about" id="about">
            <h2 class="me">Tentang Saya</h2>
            <ul>
                <li>Nama: Kevin Rafif</li>
                <li>NIM : 2209106131</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea rem, debitis maiores quam ullam ab laboriosam, quisquam sequi voluptas distinctio id molestiae adipisci. Voluptas impedit sunt delectus repellendus molestiae magnam.</li>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quia quidem repudiandae eaque soluta velit eligendi facilis voluptates ratione id incidunt accusamus asperiores minima enim quibusdam, neque esse et harum.</li>
            </ul>
            
        </section>
    </div>
    <footer>
        <p>&copy; 2023 PART Store</p>
    </footer>
    <script>
        function updateClock() {
            var elementJam = document.getElementById("jam");
            var now = new Date();
            var days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
            var day = days[now.getDay()];
            var date = now.getDate();
            var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
            var month = months[now.getMonth()];
            var year = now.getFullYear();
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds();
            var timeString = year + ' ' + month + ' ' + date + ', ' + day + ' - ' + (hours < 10 ? "0" : "") + hours + ':' + (minutes < 10 ? "0" : "") + minutes + ':' + (seconds < 10 ? "0" : "") + seconds;
            elementJam.innerText = timeString;
        }

        updateClock();
        setInterval(updateClock, 1000);
        $(document).ready(function () {
            var message = loginstatus;
            console.log(message);
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

            $('.quickshop').click(function(){
                $('#formbox').show();
              });
            
            $('#backButton').click(function(){
                $('#formbox').hide();
                $('#resultboxbackground').hide();
            });
            $('#backButtonresult').click(function(){
                $('#formbox').hide();
                $('#resultboxbackground').hide();
            });
            $('#buyform').submit(function(e){
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    type: 'POST',
                    url: 'form.php',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $('#resultbox').html(response);
                        $('#resultboxbackground').show();
                        $('#formbox').hide();
                    }
                });
            });
        });
    </script>
</body>
</html>
