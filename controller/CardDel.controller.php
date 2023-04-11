<?php
include_once("../../model/database.php");
include_once("../../model/card.php");

  $id = htmlspecialchars($_GET["id"]);

  $obj_name = new card();
  $rs2 = $obj_name->Del($id);
?>
