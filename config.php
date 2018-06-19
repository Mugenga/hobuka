<?php

// Server Info
$server = "localhost";
$user = "root";
$password = "";

// Database


// Creating a connection
$connection = mysqli_connect($server, $user, $password);

// Checking the connection
if (!$connection) die("Connection failed: " . mysqli_connect_error());
if(!mysqli_select_db($connection, "ElectriData")) die("Not connected to default database");
// $sql = "CREATE Database ElectriData";

// if(mysqli_query($connection,$sql)) echo "Database Created successfully";
// else echo "Database creation failed";

/// Database Creation successful



// read from database




?>