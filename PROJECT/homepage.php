<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>İpek Jewelry</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/0f4915f0d0.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair:wght@300;400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="owl/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/owl.theme.default.min.css">
</head>
<body>
    
    <section id="menu">
        <div id="logo"></div>
        <nav>
            <a href="#homepage"><i class="fa-solid fa-house ikon"></i>HOME</a>
            <a href="#receipe"><i class="fa-solid fa-receipt ikon"></i>JEWELRY</a>
            <a href="new.php"><i class="fa-solid fa- ikon"></i>💍NEW PRODUCTS</a>
            <a href="announcements.php"></i> ✉ ANNOUNCEMENTS</a>
            <a href="#announcement"><i class="fa-solid fa-bullhorn ikon"></i>INFORMATION</a>
            <a href="#contact"><i class="fa-solid fa-message ikon"></i>CONTACT US</a>
            <a href="register.php"><i class="fa-regular fa-user ikon"></i>CHANGE PASSWORD</a>
        </nav>
    </section>

    <section id="homepage">
        <div id="black"></div>
        <div id="contents">
            <h2>Hi! </h2>
            <hr width="300" align="left">
            <p>Welcome to my jewelry world! Here you can find every kind of jewelry you are looking for. </p>
        </div>
    </section>

    <section id="receipe">
        <h3 id="h3about">JEWELRY</h3>
        <div class="container">
            
            <div class="owl-carousel owl-theme">

            <div class="card item" data-merge="1.5">
                    <img src="images/takılaraynali.jpeg" alt="" class="img-fluid">
                    <h5 class="titlecard">HEART SET</h5>
                    <p class="pcard">
                    VALENTINE'S DAY SPECIAL <br>
                    This set will warm your lover's heart!!<br>
Our set consists of a pair of heart earrings, a heart necklace and a pair of hoop earrings.
                    </p>
                </div>

                <div class="card item" data-merge="1.5">
                    <img src="images/bileklik.jpeg" alt="" class="img-fluid">
                    <h5 class="titlecard">GOLD BRACELET</h5>
                    <p class="pcard">
                    All bracelets are gold. They are suitable for sea and pool use.
                    </p>
                </div>

                <div class="card item" data-merge="1.5">
                    <img src="images/halhal.jpeg" alt="" class="img-fluid">
                    <h5 class="titlecard">ANKLAT</h5>
                    <p class="pcard">
                    The anklets are made of genuine seashells. They are handmade. Gold plated.  They are suitable for sea and pool use.
                    </p>
                </div>

                <div class="card item" data-merge="1.5">
                    <img src="images/takılar_ayna.jpeg" alt="" class="img-fluid">
                    <h5 class="titlecard">STEEL RING</h5>
                    <p class="pcard">
                    Rings are offered for sale in one piece. They do not rust because they are steel products.
                    </p>
                </div>

                <div class="card item" data-merge="1.5">
                    <img src="images/kolye.jpeg" alt="" class="img-fluid">
                    <h5 class="titlecard">STEEL NECKLACE</h5>
                    <p class="pcard">
                    All necklaces are gold. They are suitable for sea and pool use. Letter selection is made upon request.
                    </p>
                </div>
                <div class="card item" data-merge="1.5">
                    <img src="images/küpe.jpeg" alt="" class="img-fluid">
                    <h5 class="titlecard">STEEL EARRINGS</h5>
                    <p class="pcard">
                    Our earrings have a choice of colors, but you cannot choose two earrings in different colors. 
                    They are suitable for sea and pool use since they are steel.
                    </p>
                </div>
                
                
                <div class="card item" data-merge="1.5">
                    <img src="images/takılar2.jpeg" alt="" class="img-fluid">
                    <h5 class="titlecard">GOLD PLATED EARRINGS</h5>
                    <p class="pcard">
                    The earrings are gold-plated. They are suitable for sea and pool use.
                    </p>
                </div>
                
                
                
            </div>
        </div>
    </section>



    <section id="announcement">
        <h3 id="h3about">INFORMATION</h3>
        <div class="container">
            <div class="owl-carousel owl-theme">
                <div class="card item" data-merge="1.5">
                    <img src="images/duyurruden.jpg" alt="" class="img-fluid">
                    <h5 class="titlecard"></h5>
                    <p class="cardp">
                         % 5 sale for Just new users...
                    </p>
                </div>
                <div class="card item" data-merge="1.5">
                    <img src="images/duyuruu1.2.jpeg" alt="" class="img-fluid">
                    <h5 class="titlecard"></h5>
                    <p class="cardp">
                        % 40 sale for all earrings...
                    </p>
                </div>
                <div class="card item" data-merge="1.5">
                    <img src="images/shop now1.jpg" alt="" class="img-fluid">
                    <h5 class="titlecard"></h5>
                    <p class="cardp">
                        If you want to ask something, you can send a message from contact us part.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section id="contact">
        <h3 id="h3about">Is there any problem¿</h3>
        <div class="container">
            <form action="homepage.php" method="post">
            <div id="contactopac">
                <div id="formgroup">
                    <div id="leftform">
                        <input type="text" name="name" placeholder="Name" required class="form-control">
                        <input type="text" name="surname" placeholder="Surname" required class="form-control">
                    </div>
                    <div id="rightform">
                        <input type="email" name="mail" placeholder="E-mail" required class="form-control">
                        <input type="text" name="topic" placeholder="Topic" required class="form-control">
                    </div>

                    <textarea name="message" id="" cols="30" rows="10" placeholder="Write Message" required class="form-control"></textarea>

                    <input type="submit" value="SUBMIT">
                </div>
                <div id="address">
                    <h4 id="addresstitle">You can find us : </h4>
                    <p class="addressp">on Tredyol and Instagram as ipekJewelry.</p>
                    <p class="addressp">Also we are in Nişantaşı. Our open address is: </p>
                    <p class="addressp">Petunya Caddesi Bahar Sokak Şişli/Nişantaşı</p>
                    <p class="addressp">0212 222 2222</p>
                    <p class="addressp">Email: ipekJewelry@gmail.com</p>
                </div>
            </div>
            </form>
            <footer>
                <div id="copyright">2110206014 | Internet Based Project</div>
                <a href="#menu"><i class="fa-solid fa-circle-up" id="up"></i></a>
            </footer>

        </div>
    </section>
    <script
    src="https://code.jquery.com/jquery-3.7.0.slim.min.js"
    integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE="
    crossorigin="anonymous"></script>    
    <script src="owl/owl.carousel.min.js"></script>
    <script src="owl/script.js"></script>
</body>
</html>

<?php

include("connection2.php");

if (isset($_POST["name"], $_POST["surname"], $_POST["mail"], $_POST["topic"], $_POST["message"]))
{
    $name=$_POST["name"];
    $surname=$_POST["surname"];
    $mail=$_POST["mail"];
    $topic=$_POST["topic"];
    $message=$_POST["message"];

    $insert="INSERT INTO messages (f_name, l_name, email, topic, message) VALUES ('".$name."', '".$surname."','".$mail."','".$topic."','".$message."')";

    if ($conn->query($insert)===TRUE){
        echo "<script>alert('Your message has been sent successfully.')</script>";
    }
}
?>