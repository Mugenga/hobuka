<?php 
include_once "config.php";
include_once "classes/ElectriDataSystem.php";


// $admin = new SuperAdmin();

// $system = new ElectriDataSystem($admin);
// $system->CreateCustomer();


$admin = new Admin("sam","sam",10);
echo $admin->RegisterAccount("sam");


















?>