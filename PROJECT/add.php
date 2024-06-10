<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Panel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col"><br><br>
                        <h1 class="display-1 text-center"   style="color:rgb(32, 132, 226); border: 5px solid rgb(32, 132, 226); border-radius: 30px;">𝒩𝐸𝒲 𝑅𝐸𝒞𝒪𝑅𝒟𝒮</h1><br><br>
                    </div>
                </div>
                <div class="btn-group" role="group" aria-label="Basic outlined example" style="background: rgb(132, 189, 243);">
                    <a href="panel.php" class="btn btn-outline-primary">All Records</a>
                    <a href="add.php" class="btn btn-outline-primary">New Record</a>
                    <a href="messages.php" class="btn btn-outline-primary">Messages</a>
                    <a href="logout.php" class="btn btn-outline-primary">Logout</a>
                </div>
            </div>

        </header>
        <main>
            <div class="container">
                <form action="" method="post" class="row mt-4 g-3">
                    <div class="col-6">
                        <label for="fullName" class="form-label"><h4>𝓊𝓈𝑒𝓇𝓃𝒶𝓂𝑒 </h4></label>
                        <input type="text" class="form-control" id="exampleInputNameSurname1" name="user">
                    </div>
                    
                    <div class="col-6">
                        <label for="exampleInputPassword1" class="form-label"><h4>𝓅𝒶𝓈𝓈𝓌𝑜𝓇𝒹</h4></label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">SAVE</button>
                </form>
            </div>

        </main>
    </body>
</html>

<?php

include("connection2.php");

if (isset($_POST["submit"]))
{
    $name=$_POST["user"];
    
    $password=password_hash($_POST["pass"],PASSWORD_DEFAULT);

    $insert="INSERT INTO login(username,password) VALUES ('".$name."','".$password."')";
    $runInsert = mysqli_query($conn, $insert);

    if ($runInsert)
    {
        echo '<div class="alert alert-success" role="alert">
              Record successfully added.
              </div>';
    }
    else
    {
        echo '<div class="alert alert-danger" role="alert">
              An error occurred while adding the record.
              </div>';
    }
    mysqli_close($conn);
}

?>