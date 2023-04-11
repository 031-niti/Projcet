<?php

include "../../controller/CardDetailByID.controller.php";


if (!empty($jsonDecode)) { 
    foreach ($jsonDecode as $cardDetail) {?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail IDCard</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- navbar -->
    <header>
        <h1 class="logo">Detail IDCard</h1>
        <nav>
            <ul class="nav__links">
            <li><a href="../CardView/view_index.php">Home</a></li>
            <li><a href="#">List</a></li>
            <li><a href="../CardAdd/view_add.php">AddPerson</a></li>
            </ul>
        </nav>
        <form class="search" action="" method="get">
            <input class="form-control" type="text" placeholder="Search" aria-label="Search" name="" autocomplete="off">
            <button class="btn-search btn info" type="submit" value="Search">Search</button>
        </form>
    </header>

    <section>
        <div class="con-card">
            <!-- img -->
            <div class="card-img">
                <img src="../../vendor/img/<?=$cardDetail['card_image_path'] ?>" alt="">  
            </div>
            <!-- detail -->
            <div class="card-detail">
               <div class="name">
                    <h3 class="firstname"> <?=$cardDetail['card_firstname']?> <?=$cardDetail['card_lastname']?></h3>
                </div>
                <h4 class="student_id"><?=$cardDetail['card_id']?></h4>
                <h4 class="card_major"><?=$cardDetail['card_major']?></h4>
                <h4 class="univ"><?=$cardDetail['card_univ']?></h4>
                <!-- Btn edit&del -->
                <div class="btn2">
                    <div class="btn-edit" onclick="location.href='../CardEdit/view_edit.php?id=<?=$cardDetail['id']?>'">
                        <a class="btn btn-primary btn-Lg " role="button">Edit</a>
                    </div>
                    <div class="btn-del" onclick="location.href='../CardDel/view_success-del.php?id=<?=$cardDetail['id']?>'">
                        <a class="btn btn-primary btn-Lg " role="button">Delete</a>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    

</body>
</html>

    <?php } 
} else {
    echo "Unable to retrieve Card details";
}
?>