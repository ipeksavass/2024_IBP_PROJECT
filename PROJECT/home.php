<?php
include("duyurular.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["title"], $_POST["textt"])) {
    $title = $_POST["title"];
    $textt = $_POST["textt"];

    $insert = "INSERT INTO duyurular (title, textt) VALUES ('$title', '$textt')";

    if ($conn->query($insert) === TRUE) {
        echo "<script>
                alert('Duyuru başarıyla oluşturuldu.');
                window.location.href = 'panel.php';
              </script>";
        exit();
    } else {
        echo "<script>alert('Hata: " . $conn->error . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Announcement</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body><br><br>
    <h1 id="h3about" style="color:rgb(32, 132, 226); border: 5px solid rgb(32, 132, 226); border-radius: 30px; text-align:center;">𝒞𝑅𝐸𝒜𝒯𝐸 𝒜𝒩𝒩𝒪𝒰𝒩𝒞𝐸𝑀𝐸𝒩𝒯</h1><br><br>
    <div class="container">
        <form action="home.php" method="post">
            <div id="contactopac">
                <div id="formgroup">
                    <div id="leftform">
                        <input type="text" name="title" placeholder="Title" required class="form-control">
                        <input type="text" name="textt" placeholder="Text" required class="form-control">
                    </div>
                    <input type="submit" value="Oluştur" class="btn btn-primary mt-3">
                </div>
            </div>
        </form>
        <footer></footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.slim.min.js" integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>
    <script src="owl/owl.carousel.min.js"></script>
    <script src="owl/script.js"></script>
</body>
</html>