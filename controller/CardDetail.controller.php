<?php

include_once("../../model/database.php");
include_once("../../model/card.php");
$id = htmlspecialchars($_GET["id"]);

$obj = new card();
$res = $obj->getCardDetail();
$jsonDecode = json_decode($res,true);


?>