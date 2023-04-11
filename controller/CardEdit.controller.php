<?php
  include_once("../../model/database.php");
  include_once("../../model/card.php");


  $id = htmlspecialchars($_GET["id"]);

  //เรียกใช้
  $obj_name = new card();
  $rs2 = $obj_name->editCardeditCard($id,
  $card_firstname,
  $card_lastname,
  $card_id,
  $card_image_path,
  $card_major,
  $card_univ);
  
  if ($rs2) {
    // แก้ไขข้อมูลสำเร็จ
    echo "Edit data successfully!";
  } else {
    // แก้ไขข้อมูลไม่สำเร็จ
    echo "Edit data failed!";
  }
 
?>