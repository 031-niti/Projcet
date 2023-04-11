<?php

include_once("../../model/database.php");
include_once("../../model/card.php");



$obj = new card();
$id = $_GET['id'];      
$res = $obj->getCardDetailByID($id); 
$jsonDecode = json_decode($res,true);

?>