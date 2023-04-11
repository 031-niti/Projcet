<?php 
  //สร้างตัวแปร
  $id = $_POST['id'];
  $card_firstname = $_POST['card_firstname'];
  $card_lastname = $_POST['card_lastname'];
  $card_id = $_POST['card_id'];
  $card_image_path = $_POST['card_image_path'];
  $card_major = $_POST['card_major'];
  $card_univ = $_POST['card_univ'];


  $data=array();
  $data["id"]=$id;
  $data["card_firstname"]=$card_firstname;
  $data["card_lastname"]=$card_lastname;
  $data["card_id"]=$card_id;
  $data["card_image_path"]=$card_image_path;
  $data["card_major"]=$card_major;
  $data["card_univ"]=$card_univ;


    include_once("../../model/database.php");
    include_once("../../model/card.php");
    $obj_name=new card();
    $rs2= $obj_name->Add($data);


?>