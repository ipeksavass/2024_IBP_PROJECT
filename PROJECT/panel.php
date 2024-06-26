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
                    <h1 class="display-1 text-center" style="color:rgb(32, 132, 226); border: 5px solid rgb(32, 132, 226); border-radius: 30px;">𝒜𝐿𝐿 𝑅𝐸𝒞𝒪𝑅𝒟𝒮</h1><br><br>
                </div>
                
            </div>
            <div class="btn-group" role="group" aria-label="Basic outlined example" style="background: rgb(132, 189, 243);">
                <a href="panel.php" class="btn btn-outline-primary" >All Records</a>
                <a href="add.php" class="btn btn-outline-primary">New Record</a>
                <a href="create.php" class="btn btn-outline-primary">Create</a>
                <a href="home.php" class="btn btn-outline-primary">Announcement</a> 
                <a href="messages.php" class="btn btn-outline-primary">Messages</a>
                <a href="homepage.php" class="btn btn-outline-primary">Homepage</a>
                <a href="logout.php" class="btn btn-outline-primary">Logout</a>
            </div>
        </div>

    </header>
    <main>
        <div class="container">
            <div class="row mt-3">
                <div class="col">
                   <table class="table table-hover table-striped">
                       <thead>
                           <tr>
                               <th><h4>𝓊𝓈𝑒𝓇𝓃𝒶𝓂𝑒</h4></th>
                           </tr>
                       </thead>
                       <tbody>
                       <?php
                       include("connection2.php");

                       if (isset($_GET['remove'])){
                           $sqlremove="DELETE FROM login WHERE `login`.`username` = ?";
                           $resultremove=$conn->prepare($sqlremove);
                           $resultremove->execute([$_GET['remove']]);

                           header('Location:panel.php');
                       }

                       $select2="Select * From login";
                       $result2=$conn->query($select2);

                       while($pull = $result2->fetch_assoc()) { ?>
                            <tr>
                                <td><?=$pull['username']?></td>
                                <td><div class="btn-group">
                                        <a href="update.php?id=<?=$pull['username']?>" class="btn btn-secondary">update</a>
                                        <a href="?remove=<?=$pull['username']?>" onclick="return confirm('Remove this member?')" class="btn btn-danger">remove</a>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                       </tbody>
                   </table>
                </div>
            </div>
        </div>

    </main>
</body>
</html>
