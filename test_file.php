<?php 

include_once "classes/ElectriDataSystem.php";
include_once "config.php";

include_once 'header.php';

$admin = new Admin("Jossiyed");

$system = new ElectriDataSystem($admin);

$system->CreateCustomer("Jap");
// $system->GetAdmin();




 ?>


 <?php include_once 'footer.php' ?>