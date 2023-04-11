<?php

include "../../controller/CardDetail.controller.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ID Card</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- navbar -->
    <header>
        <h1 class="logo">ID Card</h1>
        <nav>
            <ul class="nav__links">
            <li><a href="#">Home</a></li>
            <li><a href="#">List</a></li>
            <li><a href="../CardAdd/view_add.php">AddPerson</a></li>
            </ul>
        </nav>
        <form class="search" action="" method="get">
            <input class="form-control" type="text" placeholder="Search" aria-label="Search" name="" autocomplete="off">
            <button class="btn-search btn info" type="submit" value="Search">Search</button>
        </form>
    </header>

    <!-- View -->
    <section>
        <div class="con ">
            <?php foreach($jsonDecode as $cardDetail){ ?>
                <div class="details">
                    <img src="../../vendor/img/<?=$cardDetail['card_image_path'] ?>" alt="">
                    <div class="name">
                        <h2 class="firstname"><?=$cardDetail['card_firstname']?> <?=$cardDetail['card_lastname']?></h2>
                    </div>
                    <h4 class="student_id"><?=$cardDetail['card_id']?></h4>
                    <div class="btn-viwe" onclick="location.href='../CardDetails/Detail.php?id=<?=$cardDetail['id']?>'">
                        <a class="btn btn-primary btn-Lg " role="button">Detail</a>
                    </div>
                </div>
            <?php } ?>    
        </div> 
    </section>
    
</body>
</html>