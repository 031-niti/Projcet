<?php
include_once("../model/ConDB.php");
include_once("../model/Course.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add IDCard</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- navbar -->
    <header>
        <h1 class="logo">Add IDCard</h1>
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

    <!-- View -->
    <section>
        <h2>Add IDCard</h2>
        <form name="frmadd" method="post" action="view_success-add.php" enctype="multipart/form-data">              
            <div class="col">
                <div class="col-sm-2">
                    <label for="staticFirst" class="col-sm-1 col-form-label">ID </label>
                    <input type="text" name="id" class="form-control" id="id" placeholder="id" required>
                </div>
                <div class="col-sm-2">
                    <label for="staticFirst" class="col-sm-1 col-form-label">FirstName </label>
                    <input type="text" name="card_firstname" class="form-control" id="card_firstname" placeholder="card_firstname" required>
                </div>
                <div class="col-sm-2">
                    <label for="staticLast" class="col-sm-1 col-form-label">LastName </label>
                    <input type="text" name="card_lastname" class="form-control" id="card_lastname" placeholder="card_lastname" required>
                </div>
                <div class="col-sm-2">
                    <label for="staticLast" class="col-sm-1 col-form-label">CardID </label>
                    <input type="text" name="card_id" class="form-control" id="card_id" placeholder="card_id" required>
                </div>
                <div class="col-sm-2">
                    <label for="staticImage" class="col-sm-1 col-form-label">Image </label>
                    <input list="card_image_path" name="card_image_path" class="form-control" id="card_image_path" placeholder="card_image_path" required>

                </div>
                <div class="col-sm-2">
                    <label for="staticMajor" class="col-sm-1 col-form-label">Major </label>
                    <input type="text" name="card_major" class="form-control" id="card_major" placeholder="card_major" required>
                </div>
                <div class="col-sm-2">
                    <label for="staticUniv" class="col-sm-1 col-form-label">Univ </label>
                    <input type="text" name="card_univ" class="form-control" id="card_univ" placeholder="card_univ" required>
                </div>
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-info btn-block"><i class="fa fa-pencil-square"aria-hidden="true"></i>&nbsp; บันทึกข้อมูล</button>
                </div>
            </div>
        </form>
    </section>
    
</body>
</html>